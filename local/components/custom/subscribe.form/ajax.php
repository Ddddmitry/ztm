<?
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if(!CModule::IncludeModule("subscribe"))
{
	ShowError("Модуль подписки не найден.");
	return;
}

$subscribeResult = false;
if((int)$_REQUEST["RUB_ID"] && check_bitrix_sessid())
{

	$bAllowSubscription = true;
	$rsRubric = CRubric::GetByID($_REQUEST["RUB_ID"]);
	if($arRubric = $rsRubric->Fetch())
		if($arRubric["VISIBLE"] == "N")
			$bAllowSubscription = false;

	if($bAllowSubscription === true && strlen($_REQUEST["sf_EMAIL"]) > 0)
	{

		$obSubscription = new CSubscription;

		$arFields = array(
			"USER_ID" => false,
			"FORMAT" => "html",
			"EMAIL" => htmlspecialcharsbx($_REQUEST["sf_EMAIL"]),
			"RUB_ID" => array((int)$_REQUEST["RUB_ID"]),
			"ACTIVE" => "Y",
			"CONFIRMED" => "Y"
		);

		$ID = $obSubscription->Add($arFields);
		$res = ($ID > 0);
		if($res)
		{
			$arResult["RESPONSE"]["type"] = "Y";
		}
		else
		{
			$arResult["RESPONSE"]["type"] = "N";
			$arResult["RESPONSE"]["message"] = $obSubscription->LAST_ERROR;
		}


	}
	else{
		$arResult["RESPONSE"]["type"] = "N";
		$arResult["RESPONSE"]["message"] = "Введите E-mail";
	}
}

$APPLICATION->RestartBuffer();
header('Content-type: application/json');
echo json_encode($arResult["RESPONSE"]);

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");
?>
