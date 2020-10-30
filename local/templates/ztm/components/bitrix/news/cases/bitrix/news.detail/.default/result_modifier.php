<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
$k = 0;
$neighboring = array();
$arSelect = array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(array("ACTIVE_FROM" => "DESC"), $arFilter, false, array("nElementID" => $arResult["ID"], "nPageSize" => 1), $arSelect);
while($ob = $res->GetNext())
{
    if($arResult["ID"] == $ob["ID"])
    {
        $neighboring["CURRENT"] = $ob;
    }
    elseif($k > 0 && !empty($neighboring["CURRENT"]))
    {
        $neighboring["PREV"] = $ob;
    }

    if($k == 0 && empty($neighboring["CURRENT"]))
    {
        $neighboring["NEXT"] = $ob;
    }
    $k++;
}

if(!empty($neighboring))
    $arResult["NEIGHTBORING"] = $neighboring;

