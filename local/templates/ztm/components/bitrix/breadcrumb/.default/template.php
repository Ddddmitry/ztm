<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';



$strReturn .= '<ul class="breadcrumbs" aria-label="Breadcrumb" role="navigation">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="child"' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
		<li class="breadcrumbs__item">
		    <a class="breadcrumbs__link" href="'.$arResult[$index]["LINK"].'">'.$title.'</a>
        </li>';
	}
	else
	{
		$strReturn .= '<li class="breadcrumbs__item"><span>'.$title.'</span></li>';
	}
}

$strReturn .= '</ul>';

return $strReturn;

