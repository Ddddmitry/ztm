<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!IsModuleInstalled("subscribe"))
{
	ShowError(GetMessage("SUBSCR_MODULE_NOT_INSTALLED"));
	return;
}

if(!isset($arParams["RUB_ID"]))
{
	ShowError(GetMessage("SUBSCR_NO_RUBRIC_FOUND"));
	return;
}

if(!isset($arParams["PAGE"]) || strlen($arParams["PAGE"]) <= 0)
	$arParams["PAGE"] = $this->GetPath()."/ajax.php";

$arResult["FORM_ACTION"] = htmlspecialcharsbx(str_replace("#SITE_DIR#", LANG_DIR, $arParams["PAGE"]));

$this->IncludeComponentTemplate();
?>
