<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Application;
use Bitrix\Main\Loader;
Loader::includeModule("iblock");

$APPLICATION->IncludeComponent("custom:google.sheets.delivery","",[
    "KEY_FILE" => __DIR__."/../result/".KEY_FILE,
    //"SPREAD_SHEET_ID" => "1qFDu5RxRxvkgmp83g098XrPOwr-WUnQYuY41eRQjlN0",
    "SPREAD_SHEET_ID" => SPREAD_SHEET_ID,
    "CACHE_VARS_FROM_REQUEST" => ["from","to","weight","volume","pallet"],
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600"
]);?>