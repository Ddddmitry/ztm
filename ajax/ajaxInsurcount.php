<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Application;
use Bitrix\Main\Loader;
Loader::includeModule("iblock");

$request = Application::getInstance()->getContext()->getRequest();
$responce = Application::getInstance()->getContext()->getResponse();
$arData = $request->getPostList()->toArray();
$arResult = $arData;
//$arData["km"] = 99;
$SPREAD_SHEET_ID = SPREAD_SHEET_ID;
putenv( 'GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__."/../result/".KEY_FILE );
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope( 'https://www.googleapis.com/auth/spreadsheets' );
$service = new Google_Service_Sheets( $client );
$rangeToPasteInsurcount = "Info!ax9:ax9";
$rangeToReadInfo = "Info!au11:au11";
// Вставляем стоимость
$arToPaste = [[$arData["insurcount"]]];
$body    = new Google_Service_Sheets_ValueRange( [ 'values' => $arToPaste ] );
$options = array( 'valueInputOption' => 'USER_ENTERED' );
$res = $service->spreadsheets_values->update( $SPREAD_SHEET_ID, $rangeToPasteInsurcount, $body, $options );
if($res->getUpdatedCells() > 0 ){
    $response = $service->spreadsheets_values->get($SPREAD_SHEET_ID, $rangeToReadInfo);
    $arResult = $response->values;
}
header('Content-type: application/json');
echo json_encode(number_format($arResult[0][0],0,".",""));
die();