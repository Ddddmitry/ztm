<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php
$arData = explode("#SEPARATOR#",$arResult["DETAIL_TEXT"]);
if(!empty($arData)):
?>
    <?php
    echo $arData[0];
    ?>
    <?$APPLICATION->IncludeComponent("custom:google.sheets.dates","detail_service",[
        "KEY_FILE" => $_SERVER["DOCUMENT_ROOT"]."/result/ztm-test-1601831087518-2068998f3cb6.json",
        "SPREAD_SHEET_ID" => "1MRW93djzAqh4NyoLPQ6ZKk5MHRATuH86dtMNXaCXqh0",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600"
    ]);?>
    <?php
    echo $arData[1];
    ?>
<?else:?>
    <?
    echo $arResult["DETAIL_TEXT"];
    ?>
<?endif;?>
