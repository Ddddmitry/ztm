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
<div class="main-menu">
    <?php
        $current = array_shift($arResult["ITEMS"]);
        $pic = "";
        if($current["PROPERTIES"]["FILE"]["VALUE"]):
            $pic = CFile::GetPath($current["PROPERTIES"]["FILE"]["VALUE"]);
        elseif($current["PREVIEW_PICTURE"]["SRC"]):
            $pic = $current["PREVIEW_PICTURE"]["SRC"];
        endif;
    ?>
    <a class="main-menu__item" href="<?=$current["DETAIL_PAGE_URL"]?>">
        <div class="main-menu__number">01</div>
        <div class="main-menu__icon">
            <?=$current["PROPERTIES"]["SVG2"]["~VALUE"]?>
        </div>
        <div class="main-menu__text"><?=$current["NAME"]?></div>
    </a>
    <div></div>
    <? foreach ($arResult["ITEMS"] as $index => $arItem) {?>
        <a class="main-menu__item" href="/services/">
            <div class="main-menu__number">0<?=($index+2)?></div>
            <div class="main-menu__icon">
                <?=$arItem["PROPERTIES"]["SVG2"]["~VALUE"]?>
            </div>
            <div class="main-menu__text"><?=$arItem["NAME"]?></div>
        </a>
        <?if((($index+1) % 3 == 0) && $index > 0):?> <div></div><?endif;?>
    <?}?>
</div>
<?endif;?>

