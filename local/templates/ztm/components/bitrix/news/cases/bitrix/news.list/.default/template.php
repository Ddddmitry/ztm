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
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
<div class="cases__grid">
        <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
            <a class="cases__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <div class="cases__item-top">
                    <div class="project-double"><span></span><span></span></div>
                    <div class="cases__item-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?> <?if($arItem["PROPERTIES"]["TIME_TO_READ"]["VALUE"]):?>/ <?=$arItem["PROPERTIES"]["TIME_TO_READ"]["VALUE"]?> минут чтения<?endif;?></div>
                </div>
                <div class="cases__item-middle">
                    <div class="cases__item-title"><?=$arItem["NAME"]?></div>
                    <div class="cases__item-text"><?=$arItem["PREVIEW_TEXT"]?></div>
                </div>
                <div class="cases__item-bottom">
                    <div class="cases__item-bottom-left">
                        <div class="cases__item-name"><?=$arItem["PROPERTIES"]["AUTHOR"]["VALUE"]?></div>
                        <div class="cases__item-rank"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></div>
                    </div>
                    <div class="cases__link">
                        <svg width="161" height="64" viewBox="0 0 161 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.4254 45.5783L1.28078 1H153C156.866 1 160 4.13401 160 8V56C160 59.866 156.866 63 153 63H34.7386C24.1847 63 14.9851 55.8172 12.4254 45.5783Z" stroke="url(#cases-gradient)" stroke-width="2"/>
                            <defs>
                                <linearGradient id="cases-gradient" x1="6.43557e-06" y1="64" x2="154.101" y2="64" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.151042" stop-color="#F39324"/>
                                    <stop offset="1" stop-color="#EC663B"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span>Читать кейс</span>
                    </div>
                </div>
            </a>

        <?endforeach;?>
</div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>

<?endif;?>

