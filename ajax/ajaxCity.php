<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

Loader::includeModule("highloadblock");

$hlbl = 1; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();
$arFilter = ["%=UF_CITY_RU"=>"%".$_POST["city"]."%"];
if($_POST["from"]){
    $arFilter["UF_DIRECTION"] = $_POST["from"];
}else{
    $arFilter["UF_DIRECTION"] = false;
}
$rsData = $entity_data_class::getList(array(
    "select" => array("UF_CITY"),
    "order" => array("ID" => "ASC"),
    "filter" => $arFilter  // Задаем параметры фильтра выборки
));
$arResult = [];
while($arData = $rsData->Fetch()){
    $arResult[] = $arData["UF_CITY"];
}
echo json_encode($arResult);
die();
