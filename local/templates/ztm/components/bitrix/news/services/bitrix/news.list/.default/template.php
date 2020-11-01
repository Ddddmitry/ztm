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
    ?>
    <section class="services__base">    
        <div class="services__base-wp">
            <div class="services__base-num">01</div>
            <div class="services__base-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/services/img.png" alt=""></div>
            <div class="services__base-info">
                <div class="services__base-info-top">
                    <?=$current["PROPERTIES"]["SVG"]["~VALUE"]?>
                    <div class="services__base-info-title"><?=$current["NAME"]?></div>
                </div>
                <div class="services__base-text"><?=$current["PREVIEW_TEXT"]?></div>
                <div class="main-revol__btn"><a href="<?=$current["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
            </div>
            <div class="services__base-line">
                <div class="services__base-line-el">Сюрвейерский отчет</div>
                <div class="services__base-line-el">Фотоотчеты</div>
                <div class="services__base-line-el">Взвешивание товара</div>
                <div class="services__base-line-el">Маркировка товара</div>
                <div class="services__base-line-el">Затаможка на экспорт</div>
            </div>
            <div class="services__base-descr">
                <p>За 25 лет работы мы запустили и настроили регулярные сборные сервисы из всех стран Европы, Азии и Северной Америки. Под регулярным сервисом мы понимаем, что контейнер или машина с грузами разных получателей отправляется не реже одного раза в неделю и еженедельно.</p>
                <p>Например, из Китая у нас выходит 5 консолидированных контейнеров в неделю, а из Европы мы еженедельно отправляем 3 сборные машины. У клиентов есть возможность выбрать срочную доставку или бюджетную, но менее срочную.</p>
            </div>
        </div>
    </section>


<section class="services__terms">
    <div class="container">
        <div class="services__terms-wp">
            <?foreach ($arResult["ITEMS"] as $index => $arItem):?>
                <div class="services__terms-el">
                    <div class="services__base-num">0<?=($index+2)?></div>
                    <?=$arItem["PROPERTIES"]["SVG"]["~VALUE"]?>
                    <div class="services__terms-el-title"><?=$arItem["NAME"]?></div>
                    <div class="services__terms-el-text"><?=$arItem["PREVIEW_TEXT"]?></div>
                </div>
            <?endforeach;?>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none">

                <defs>
                    <linearGradient id="paint0_linear" x1="34" y1="81" x2="84.2504" y2="81" gradientUnits="userSpaceOnUse">
                        <stop offset="0.151042" stop-color="#F39324"/>
                        <stop offset="1" stop-color="#EC663B"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="10.2852" y1="36.536" x2="24.4654" y2="36.536" gradientUnits="userSpaceOnUse">
                        <stop offset="0.151042" stop-color="#F39324"/>
                        <stop offset="1" stop-color="#EC663B"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="28.6016" y1="31.3181" x2="31.0846" y2="40.9745" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0238214" stop-color="#4F5062"/>
                        <stop offset="0.67038" stop-color="#3A3A4A"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="10.0762" y1="41.9939" x2="11.4269" y2="52.1084" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0238214" stop-color="#4F5062"/>
                        <stop offset="0.67038" stop-color="#3A3A4A"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="10.2852" y1="66.0394" x2="24.4654" y2="66.0394" gradientUnits="userSpaceOnUse">
                        <stop offset="0.151042" stop-color="#F39324"/>
                        <stop offset="1" stop-color="#EC663B"/>
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="28.6016" y1="60.8123" x2="31.0846" y2="70.4686" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0238214" stop-color="#4F5062"/>
                        <stop offset="0.67038" stop-color="#3A3A4A"/>
                    </linearGradient>
                    <linearGradient id="paint6_linear" x1="10.0762" y1="71.3352" x2="11.4269" y2="81.4497" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0238214" stop-color="#4F5062"/>
                        <stop offset="0.67038" stop-color="#3A3A4A"/>
                    </linearGradient>
                    <linearGradient id="paint7_linear" x1="0" y1="0" x2="88" y2="87.9138" gradientUnits="userSpaceOnUse">
                        <stop offset="0.0238214" stop-color="#4F5062"/>
                        <stop offset="0.67038" stop-color="#3A3A4A"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
</section>
<?endif;?>
