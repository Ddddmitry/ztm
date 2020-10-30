<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc as Loc;

class GoogleSheetsWorkDates extends CBitrixComponent
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

        $rangeToReadChina = "For_Site!o6:r6";
        $rangeToReadEuropa = "For_Site!o11:r11";

        $response = $service->spreadsheets_values->get($this->spreadSheetsId, $rangeToReadChina);
        $this->arResult["CHINA"] = $response->values;
        $response = $service->spreadsheets_values->get($this->spreadSheetsId, $rangeToReadEuropa);
        $this->arResult["EUROPA"] = $response->values;

    }

    /**
     * выполняет действия после выполения компонента, например установка заголовков из кеша
     */
    protected function executeEpilog()
    {
        if ($this->arResult['IBLOCK_ID'] && $this->arParams['CACHE_TAG_OFF'])
            \CIBlock::enableTagCache($this->arResult['IBLOCK_ID']);
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