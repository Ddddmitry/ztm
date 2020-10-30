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
<?if($arResult["ITEMS"]):?>
<div class="case-page__right" data-sticky-container="">
    <div class="case-page__right-wp" data-margin-top="120" style="">
        <div class="project-double"><span></span><span></span></div>
        <div class="case-page__right-title">Другие кейсы</div>
        <div class="case-page__right-list">
        <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>

        <?endforeach;?>
        </div>
        <a class="cases__link" href="/cases/">
            <svg width="154" height="64" viewBox="0 0 154 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8C1 4.13401 4.13401 1 8 1H152.719L141.575 45.5783C139.015 55.8172 129.815 63 119.261 63H8C4.13401 63 1 59.866 1 56V8Z" stroke="url(#casespage-gr)" stroke-width="2"/>
                <defs>
                    <linearGradient id="casespage-gr" x1="6.15577e-06" y1="64" x2="147.401" y2="64" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EC663B"/>
                        <stop offset="1" stop-color="#F39324"/>
                    </linearGradient>
                </defs>
            </svg><span>Все кейсы</span></a>
    </div>
</div>

<?endif;?>

