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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="cases__pagination">
    <div class="cases__pagination-wp">



	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
            <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                <svg width="16" height="16">
                    <use xlink:href="#icon-arrow-prev"></use>
                </svg>
            </a>

		<?else:?>

			<?if ($arResult["NavPageNomer"] > 2):?>
                <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                    <svg width="16" height="16">
                        <use xlink:href="#icon-arrow-prev"></use>
                    </svg>
                </a>

			<?else:?>
                <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                    <svg width="16" height="16">
                        <use xlink:href="#icon-arrow-prev"></use>
                    </svg>
                </a>

			<?endif?>

		<?endif?>

	<?else:?>
        <a class="cases__pagination-el disabled" >
            <svg width="16" height="16">
                <use xlink:href="#icon-arrow-prev"></use>
            </svg>
        </a>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <a class="cases__pagination-el current" ><?=$arResult["nStartPage"]?></a>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
		<?else:?>
            <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>

		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>


	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <a class="cases__pagination-el" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
            <svg width="16" height="16">
                <use xlink:href="#icon-arrow-next"></use>
            </svg>
        </a>

	<?else:?>
        <a class="cases__pagination-el disabled" >
            <svg width="16" height="16">
                <use xlink:href="#icon-arrow-next"></use>
            </svg>
        </a>
	<?endif?>
    </div>
</div>

