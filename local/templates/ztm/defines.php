<?
global $is404, $isIndex, $isBigHeader, $isHideFooterForm, $isHideBreadcrumbs, $isPechat, $isPoshiv;
$is404 = (defined("ERROR_404") && ERROR_404 === "Y");
$isIndex = $APPLICATION->GetCurPage(false) === '/';

?>