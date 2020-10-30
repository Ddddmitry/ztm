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
<?$this->SetViewTarget("ADD_BREAD");?>
    <div class="case-page__top-left">
    <?if($arResult["NEIGHTBORING"]["PREV"]):?>
    <a class="case-page__top-prev" href="<?=$arResult["NEIGHTBORING"]["PREV"]["DETAIL_PAGE_URL"]?>">
        <svg width="16" height="16">
            <use xlink:href="#icon-arrow-prev"></use>
        </svg><span>Предыдущий кейс</span></a>
    <?endif;?>
    <?if($arResult["NEIGHTBORING"]["NEXT"]):?>
    <a class="case-page__top-next" href="<?=$arResult["NEIGHTBORING"]["NEXT"]["DETAIL_PAGE_URL"]?>"><span>Следующий кейс</span>
        <svg width="16" height="16">
            <use xlink:href="#icon-arrow-next"></use>
        </svg>
    </a>
    <?endif;?>
</div>
<?$this->EndViewTarget();?>

<?$this->SetViewTarget("BOTTOM_CASES");?>
    <div class="case-page__bottom-btns">
        <?if($arResult["NEIGHTBORING"]["PREV"]):?>
        <a class="case-page__top-prev" href="<?=$arResult["NEIGHTBORING"]["PREV"]["DETAIL_PAGE_URL"]?>">
            <svg width="16" height="16">
                <use xlink:href="#icon-arrow-prev"></use>
            </svg><span>Предыдущий кейс</span></a>
        <?endif;?>
        <?if($arResult["NEIGHTBORING"]["NEXT"]):?>
        <a class="case-page__top-next" href="<?=$arResult["NEIGHTBORING"]["NEXT"]["DETAIL_PAGE_URL"]?>"><span>Следующий кейс</span>
            <svg width="16" height="16">
                <use xlink:href="#icon-arrow-next"></use>
            </svg></a>
        <?endif;?>
    </div>

<?$this->EndViewTarget();?>

<div class="case-page__left-top">
    <div class="case-page__left-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?> <?if($arResult["PROPERTIES"]["TIME_TO_READ"]["VALUE"]):?>/ <?=$arResult["PROPERTIES"]["TIME_TO_READ"]["VALUE"]?> минут чтения<?endif;?></div>

    <noindex>
        <?
        $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
            "HANDLERS" => $arParams["SHARE_HANDLERS"],
            "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
            "PAGE_TITLE" => $arResult["~NAME"],
            "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
            "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
            "HIDE" => $arParams["SHARE_HIDE"],
        ),
            $component,
            array("HIDE_ICONS" => "Y")
        );
        ?>
    </noindex>
</div>
<div class="case-page__article">


    <?=$arResult["DETAIL_TEXT"]?>

    <div class="cases__item-bottom-left">
        <div class="cases__item-name"><?=$arResult["PROPERTIES"]["AUTHOR"]["VALUE"]?></div>
        <div class="cases__item-rank"><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?></div>
    </div>
</div>


