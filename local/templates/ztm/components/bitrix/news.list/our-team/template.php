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

        <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
            <?if($index % 2 == 0):?>
                <div class="about__row about__row_revers">
                    <div class="about__row-left about__row-wide">
                        <div class="about__row-wp">
                            <div class="about__img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></div>
                        </div>
                    </div>
                    <div class="about__row-right about__row-text">
                        <div class="about__row-wp">
                            <noindex><h5><?=$arItem["NAME"]?></h5></noindex>
                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        </div>
                    </div>
                </div>
            <?else:?>
                <div class="about__row">
                    <div class="about__row-left about__row-text">
                        <div class="about__row-wp">
                            <h5><?=$arItem["NAME"]?></h5>
                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        </div>
                    </div>
                    <div class="about__row-right">
                        <div class="about__row-wp">
                            <div class="about__img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></div>
                        </div>
                    </div>
                </div>
            <?endif;?>
        <?endforeach;?>


<?endif;?>


