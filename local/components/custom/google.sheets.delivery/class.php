<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc as Loc;

class GoogleSheetsWork extends CBitrixComponent
{
    /**
     * кешируемые ключи arResult
     * @var array()
     */
    protected $cacheKeys = array();

    /**
     * дополнительные параметры, от которых должен зависеть кеш
     * @var array
     */
    protected $cacheAddon = array();

    /**
     * парамтеры постраничной навигации
     * @var array
     */
    protected $navParams = array();

    /**
     * вохвращаемые значения
     * @var mixed
     */
    protected $returned;

    /**
     * @var string
     */
    protected $googleAccountKeyFilePath = "";

    protected $spreadSheetsId = "";

    /**
     * подключает языковые файлы
     */
    public function onIncludeComponentLang()
    {
        $this->includeComponentLang(basename(__FILE__));
        Loc::loadMessages(__FILE__);
    }

    /**
     * подготавливает входные параметры
     * @param array $arParams
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
        $result = $params;

        return $result;
    }

    /**
     * определяет читать данные из кеша или нет
     * @return bool
     */
    protected function readDataFromCache()
    {
        global $USER;
        if ($this->arParams['CACHE_TYPE'] == 'N')
            return false;

        if (is_array($this->arParams["CACHE_VARS_FROM_REQUEST"]) && !empty($this->arParams["CACHE_VARS_FROM_REQUEST"])){
            foreach ($this->arParams["CACHE_VARS_FROM_REQUEST"] as $param) {
                if(trim($_REQUEST[$param]))
                    $this->cacheAddon[] = trim($_REQUEST[$param]);
            }
        }

        if (is_array($this->cacheAddon))
            $this->cacheAddon[] = $USER->GetUserGroupArray();
        else
            $this->cacheAddon = array($USER->GetUserGroupArray());

        return !($this->startResultCache(false, $this->cacheAddon, md5(serialize($this->arParams))));
    }

    /**
     * кеширует ключи массива arResult
     */
    protected function putDataToCache()
    {
        if (is_array($this->cacheKeys) && sizeof($this->cacheKeys) > 0)
        {
            $this->SetResultCacheKeys($this->cacheKeys);
        }
    }

    /**
     * прерывает кеширование
     */
    protected function abortDataCache()
    {
        $this->AbortResultCache();
    }

    /**
     * завершает кеширование
     * @return bool
     */
    protected function endCache()
    {
        if ($this->arParams['CACHE_TYPE'] == 'N')
            return false;

        $this->endResultCache();
    }

    /**
     * проверяет подключение необходиимых модулей
     * @throws LoaderException
     */
    protected function checkModules()
    {
        if (!Main\Loader::includeModule('iblock'))
            throw new Main\LoaderException(Loc::getMessage('STANDARD_ELEMENTS_LIST_CLASS_IBLOCK_MODULE_NOT_INSTALLED'));
    }

    /**
     * проверяет заполнение обязательных параметров
     * @throws SystemException
     */
    protected function checkParams()
    {
        if ($this->arParams['KEY_FILE'] == "" )
            throw new Main\ArgumentNullException('KEY_FILE');
        if ($this->arParams['SPREAD_SHEET_ID'] == "" )
            throw new Main\ArgumentNullException('SPREAD_SHEET_ID');
    }

    /**
     * выполяет действия перед кешированием
     */
    protected function executeProlog()
    {
        $this->googleAccountKeyFilePath .= $this->arParams["KEY_FILE"];
        putenv( 'GOOGLE_APPLICATION_CREDENTIALS=' . $this->googleAccountKeyFilePath );
        $this->spreadSheetsId  = $this->arParams["SPREAD_SHEET_ID"];
    }

    /**
     * получение результатов
     */
    protected function getResult()
    {
        $client = new Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope( 'https://www.googleapis.com/auth/spreadsheets' );
        $service = new Google_Service_Sheets( $client );

        if($_REQUEST["from"] == ""
            || $_REQUEST["to"] == ""
            || $_REQUEST["weight"] == ""
            || $_REQUEST["volume"] == ""){
            throw new Main\LoaderException("Отсутсвуют обязательные параметры для расчёта");
        }
        $rangeToPaste = "For_Site!c4:g4";
        $rangeToRead = "For_Site!a7:n16";
        $rangeToReadInfo = "Info!a1:as86";
        $arToPaste = [[
            trim($_REQUEST["weight"]),
            trim($_REQUEST["volume"]),
            trim($_REQUEST["from"]),
            trim($_REQUEST["to"]),
            trim($_REQUEST["pallet"]),
        ]];

        $body    = new Google_Service_Sheets_ValueRange( [ 'values' => $arToPaste ] );
        $options = array( 'valueInputOption' => 'USER_ENTERED' );
        $service->spreadsheets_values->update( $this->spreadSheetsId, $rangeToPaste, $body, $options );

        //На всякий случай,чтобы google не заблочил
        sleep(1);

        $response = $service->spreadsheets_values->get($this->spreadSheetsId, $rangeToRead);
        $this->arResult["ITEMS"] = $response->values;
        $this->arResult["INPUT_PARAMS"] = [
            "FROM" => trim($_REQUEST["from"]),
            "TO" => trim($_REQUEST["to"]),
            "WEIGHT" => trim($_REQUEST["weight"]),
            "VOLUME" => trim($_REQUEST["volume"]),
            "PALLET" => trim($_REQUEST["pallet"]),
        ];
        if(isset($_REQUEST["index"])) {
            $this->arResult["CURRENT"] = $this->arResult["ITEMS"][trim($_REQUEST["index"])];
            $this->arResult["INPUT_PARAMS"]["index"] = trim($_REQUEST["index"]);
        }
        $response = $service->spreadsheets_values->get($this->spreadSheetsId, $rangeToReadInfo);
        $this->arResult["INFO"] = $response->values;

        $arRangeToReadInfo = [
            "SBORNIK" => "Info!a12:e18",
            "TRANSIT" => "Info!f12:j18",
            "AVIA1" => "Info!k12:o18",
            "AVIA2" => "Info!p12:t18",
            "AVIA3" => "Info!u12:y18",
            "AVIA4" => "Info!z12:ad18",
            "JD" => "Info!ae12:ah18",
            "VILNUS" => "Info!aj12:an18",
            "ITALY" => "Info!ao12:as18"
        ];
        foreach ($arRangeToReadInfo as $index => $item) {
            $response = $service->spreadsheets_values->get($this->spreadSheetsId, $item);
            $this->arResult["GRAPH"][$index] = $response->values;
        }

        $response = $service->spreadsheets_values->get($this->spreadSheetsId, "Info!au10:au10");
        $this->arResult["PRICE"]["TAMOJNYA"] = number_format($response->values[0][0],0,".","");
        sleep(1);

        $response = $service->spreadsheets_values->get($this->spreadSheetsId, "Info!bc18:bc18");
        $this->arResult["PRICE"]["DO_MCAD"] = number_format($response->values[0][0],0,".","");

        $response = $service->spreadsheets_values->get($this->spreadSheetsId, "Info!ax12:az12");
        $this->arResult["PRICE"]["ECP"] = number_format($response->values[0][0],0,".","");
        $this->arResult["PRICE"]["BROKER"] = number_format($response->values[0][2], 0, ".","");

        $this->cacheKeys = array_keys($this->arResult);
    }

    /**
     * выполняет действия после выполения компонента, например установка заголовков из кеша
     */
    protected function executeEpilog()
    {
        if ($this->arResult['IBLOCK_ID'] && $this->arParams['CACHE_TAG_OFF'])
            \CIBlock::enableTagCache($this->arResult['IBLOCK_ID']);
    }

    public function isAjaxRequest() {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }
    /**
     * выполняет логику работы компонента
     */
    public function executeComponent()
    {
        global $APPLICATION;
        try
        {
            $this->checkModules();
            $this->checkParams();
            $this->executeProlog();

            if ($this->isAjaxRequest()){
                $APPLICATION->RestartBuffer();
                $this->getResult();
                $this->includeComponentTemplate("ajax");
                die();
            }

            if (!$this->readDataFromCache())
            {


                $this->getResult();
                $this->putDataToCache();
                $this->includeComponentTemplate();
            }


            $this->executeEpilog();

            return $this->returned;
        }
        catch (Exception $e)
        {
            $this->abortDataCache();
            ShowError($e->getMessage());
        }
    }
}
?>