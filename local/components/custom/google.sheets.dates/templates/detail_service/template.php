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

<section class="service-page__close">
    <div class="container">
        <div class="service-page__close-wp">
            <div class="service-page__close-timer">
                <?php if($arResult["CHINA"]):?>
                    <div class="service-page__close-timer-left">
                        <div class="service-page__close-title">Ближайшие сборные контейнеры из Китая</div>
                        <div class="service-page__close-timer-wp">
                            <?php foreach ($arResult["CHINA"] as $arRow) {?>
                                <?php foreach ($arRow as $col) {?>
                                    <?
                                    $arDate = explode(" ",$col);
                                    ?>
                                    <div class="service-page__close-timer-el">
                                        <div class="service-page__close-timer-num"><?=$arDate[0]?></div>
                                        <div class="service-page__close-timer-mnth"><?=$arDate[1]?></div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                <?endif;?>
                <?php if($arResult["EUROPA"]):?>
                <div class="service-page__close-timer-right">
                    <div class="service-page__close-title">Ближайшие сборные машины из Европы</div>
                    <div class="service-page__close-timer-wp">
                        <?php foreach ($arResult["EUROPA"] as $arRow) {?>
                            <?php foreach ($arRow as $col) {?>
                                <?
                                $arDate = explode(" ",$col);
                                ?>
                                <div class="service-page__close-timer-el">
                                    <div class="service-page__close-timer-num"><?=$arDate[0]?></div>
                                    <div class="service-page__close-timer-mnth"><?=$arDate[1]?></div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
</section>
