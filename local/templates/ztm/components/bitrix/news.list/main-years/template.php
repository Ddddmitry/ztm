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
    <?php
        $current = array_shift($arResult["ITEMS"]);
        $pic = "";
        if($current["PROPERTIES"]["FILE"]["VALUE"]):
            $pic = CFile::GetPath($current["PROPERTIES"]["FILE"]["VALUE"]);
        elseif($current["PREVIEW_PICTURE"]["SRC"]):
            $pic = $current["PREVIEW_PICTURE"]["SRC"];
        endif;
    ?>
    <section class="main-years">
        <div class="container">
            <div class="main-years__double">
                <div class="project-double"><span></span><span></span></div>
            </div>
            <div class="main-years__title"><span>25 лет мы доставляем грузы <br/> со всего мира в любую точку России</span>
                <div class="project-double white"><span></span><span></span></div>
            </div>
            <div class="main-years__box">
                <div class="main-years__current">
                    <div class="main-years__current-number">01</div>
                    <div class="main-years__current-box">
                        <div class="main-years__current-info">
                            <div class="main-years__current-icon"><img src="<?=$pic?>" alt="<?=$current["NAME"]?>"></div>
                            <div class="main-years__current-title"><?=$current["NAME"]?></div>
                        </div>
                        <div class="main-years__current-text"><?=$current["PREVIEW_TEXT"]?></div>
                        <div class="main-years__current-btn"><a href="<?=$current["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
                    </div>
                </div>
                <div class="main-years__other">
                    <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
                    <?
                        $pic = "";
                        if($arItem["PROPERTIES"]["FILE"]["VALUE"]):
                            $pic = CFile::GetPath($arItem["PROPERTIES"]["FILE"]["VALUE"]);
                        elseif($arItem["PREVIEW_PICTURE"]["SRC"]):
                            $pic = $arItem["PREVIEW_PICTURE"]["SRC"];
                        endif;
                    ?>
                    <div class="main-years__el">
                        <div class="main-years__el-number">0<?=($index+2)?></div>
                        <div class="main-years__el-icon"><img src="<?=$pic?>" alt="<?=$arItem["NAME"]?>"></div>
                        <div class="main-years__el-text"><?=$arItem["NAME"]?></div>
                    </div>

                    <?endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?endif;?>





