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
<section class="main-formula">
    <div class="container">
        <div class="main-formula__title">
            <div class="project-double"><span></span><span></span></div>
            <span>Мы нашли свою формулу успеха - быть гибкими в ценах, решать задачи клиента, объяснять, что происходит.</span>
        </div>
        <div class="main-formula__box">
        <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
            <?
                $pic = "";
                if($arItem["PROPERTIES"]["FILE"]["VALUE"]):
                    $pic = CFile::GetPath($arItem["PROPERTIES"]["FILE"]["VALUE"]);
                elseif($arItem["PREVIEW_PICTURE"]["SRC"]):
                    $pic = $arItem["PREVIEW_PICTURE"]["SRC"];
                endif;
            ?>
            <div class="main-formula__el">
                <img src="<?=$pic?>" alt="<?=$arItem["NAME"]?>">
                <span><?=$arItem["NAME"]?></span>
            </div>

        <?endforeach;?>
        </div>
    </div>
</section>

<?endif;?>


