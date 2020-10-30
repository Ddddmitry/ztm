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
    <section class="main-case">
        <div class="main-case__title">Наши кейсы</div>
        <div class="main-case__subtitle">Мы гордимся своим опытом, и с гордостью рассказываем, как выглядит работа
            логиста изнутри.
        </div>
        <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
            <div class="main-case__box">
                <div class="main-case__el">
                    <div class="main-case__el-title">
                        <div class="project-double"><span></span><span></span></div>
                        <span><?=$arItem["NAME"]?></span>
                    </div>
                    <div class="main-case__el-text"><?=$arItem["PREVIEW_TEXT"]?></div>
                    <div class="main-case__el-btns">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <svg width="161" height="64" viewBox="0 0 161 64" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.4254 45.5783L1.28078 1H160V63H34.7386C24.1847 63 14.9851 55.8172 12.4254 45.5783Z"
                                      fill="url(#grdient-to-right)" stroke="url(#grdient-to-right)" stroke-width="2"/>
                                <path d="M12.4254 45.5783L1.28078 1H160V63H34.7386C24.1847 63 14.9851 55.8172 12.4254 45.5783Z"
                                      fill="#EC663B" stroke="transparent" stroke-width="2"/>
                                <defs>
                                    <linearGradient id="grdient-to-right" x1="161" y1="0" x2="0" y2="1.04658e-07"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#EC663B"/>
                                        <stop offset="1" stop-color="#F39324"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Читать кейс</span></a>
                        <a href="/cases/">
                            <svg width="154" height="64" viewBox="0 0 154 64" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H152.719L141.575 45.5783C139.015 55.8172 129.815 63 119.261 63H1V1Z"
                                      fill="transparent" stroke="url(#gradient-to-left)" stroke-width="2"/>
                                <defs>
                                    <linearGradient id="gradient-to-left" x1="6.15577e-06" y1="64" x2="147.401" y2="64"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#EC663B"/>
                                        <stop offset="1" stop-color="#F39324"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Все кейсы</span>
                        </a>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </section>
<?endif;?>