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

if($arResult["SECTIONS"]):?>
    <section class="section py-0 plr2rem">
        <div class="container-fluid p-md-4">
            <div class="row mt-4 pt-1">
    <?foreach ($arResult["SECTIONS"] as $arSection):?>

                        <div class="col-md-6 mb-6 mb-md-2 mb-xs-1 ">
                            <a href="<?=$arSection["SECTION_PAGE_URL"]?>">
                                <div class="image-frame  image-frame-style-1 image-frame-effect-1 image-frame-style-5 b-radius">
                                    <div class="image-frame-wrapper image-frame-wrapper-justify-left image-frame-wrapper-align-end">
                                        <img src="<?=$arSection["PICTURE"]["SRC"]?>" class="img-fluid" alt="">
                                        <div class="image-frame-info image-frame-info-show flex-column p-4 text-left">
                                            <div class="overflow-hidden mb-2">
                                                <h3 class="text-color-light text-8 mb-0 appear-animation" data-appear-animation="maskUp"><?=$arSection["NAME"]?></h3>
                                            </div>
                                            <div class="overflow-hidden mb-2">
                                                <h2 class="text-color-light font-weight-regular text-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><?=$arSection["DESCRIPTION"]?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


    <?endforeach;?>
            </div>
        </div>
    </section>
<?endif;?>

