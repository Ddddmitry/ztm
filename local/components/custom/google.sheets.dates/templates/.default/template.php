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
<?php if($arResult["CHINA"]):?>
    <div class="main-revol__row">
    <div class="main-revol__row-title">Ближайшие сборные контейнеры из Китая</div>
<?php foreach ($arResult["CHINA"] as $arRow) {?>
    <?php foreach ($arRow as $col) {?>
        <?
            $arDate = explode(" ",$col);
        ?>
        <div class="main-revol__el">
            <div class="main-revol__number"><?=$arDate[0]?></div>
            <div class="main-revol__month"><?=$arDate[1]?></div>
        </div>
    <?php } ?>
<?php } ?>
    </div>
<?php endif;?>
<?php if($arResult["EUROPA"]):?>
    <div class="main-revol__row">
        <div class="main-revol__row-title">Ближайшие сборные машины из Европы</div>
        <?php foreach ($arResult["EUROPA"] as $arRow) {?>
            <?php foreach ($arRow as $col) {?>
                <?
                $arDate = explode(" ",$col);
                ?>
                <div class="main-revol__el">
                    <div class="main-revol__number"><?=$arDate[0]?></div>
                    <div class="main-revol__month"><?=$arDate[1]?></div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
<?php endif;?>

