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
        </div>
    </div>
</section>
<?endif;?>