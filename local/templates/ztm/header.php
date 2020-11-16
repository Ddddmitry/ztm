<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <!--Start of Social Graph Protocol Meta Data--><meta property="og:locale" content="ru-Ru">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ZTM">
    <meta property="og:description" content="ZTM">
    <!--End of Social Graph Protocol Meta Data-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <!--<meta name="msapplication-config" content="favicon/browserconfig.xml">--><meta name="theme-color" content="#ffffff">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/libs.min.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/styles.min.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom.css");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/libs.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/scripts.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/custom.js");?>
    <?Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=ru_RU");?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W86R5LN');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<div class="wrapper">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <?include_once('defines.php');?>
    <header class="header <?=($isIndex)? "black" : "white"?> ">
        <a class="header__services" href="#"><span><span></span><span></span><span></span><span></span><span></span><span></span></span></a>
        <a class="header__logo" href="/">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="">
            <div class="header__logo-text">Единый логистический оператор</div>
        </a>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "",
                "COMPONENT_TEMPLATE" => "top",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600000",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "N",
                "CACHE_SELECTED_ITEMS" => "N",

                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>

        <a class="header__tel" href="tel:<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?>">
            <svg width="16" height="16">
                <use xlink:href="#icon-phone"></use>
            </svg>
            <span><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?></span></a>
        <a class="header__calc" href="#"><span>Рассчет стоимости</span>
            <svg width="18" height="24">
                <use xlink:href="#icon-calc"></use>
            </svg>
        </a>
        <div class="header__left"><a class="header__left-mail" href="mailto:<?$APPLICATION->IncludeFile(SITE_DIR."include/email.php");?>"><?$APPLICATION->IncludeFile(SITE_DIR."include/email.php");?></a>
            <div class="header__left-social">
                <a class="open-whatsapp" href="https://wa.me/79162751554">WhatsApp</a>
                <a class="open-telegram" href="tg://resolve?domain=v13k22">Telegram</a>
            </div>
        </div>
        <div class="header__showmobile"><span></span><span></span></div>
    </header>

    <?$APPLICATION->IncludeComponent("bitrix:news.list","main-menu",Array(
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "10",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("ID","NAME","PREVIEW_PICTURE","PREVIEW_TEXT"),
        "PROPERTY_CODE" => Array("FILE","SVG2"),
        "CHECK_DATES" => "N",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    ));?>

    <?$APPLICATION->IncludeFile(SITE_DIR."include/modals.php");?>
    <div class="mobile-menu">
        <div class="mobile-menu__overlay"></div>
        <div class="mobile-menu__content">
            <div class="mobile-menu__top"><a class="mobile-menu__logo" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></a>
                <div class="mobile-menu__close"><span></span><span></span></div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "mobile",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "COMPONENT_TEMPLATE" => "top",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "CACHE_SELECTED_ITEMS" => "N",

                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>

            <div class="mobile-menu__contact">
                <a class="mobile-menu__contact-el" href="tel:<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?>"><i>
                        <svg width="20" height="20">
                            <use xlink:href="#icon-phone"></use>
                        </svg>
                    </i><span><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?></span></a><a class="mobile-menu__contact-el" href="#"><i>
                        <svg width="25" height="19">
                            <use xlink:href="#icon-mail"></use>
                        </svg>
                    </i><span><?$APPLICATION->IncludeFile(SITE_DIR."include/email.php");?></span></a>
                <a class="mobile-menu__contact-el" href="https://wa.me/79162751554">
                    <i>
                        <svg width="25" height="25">
                            <use xlink:href="#icon-whatsapp"></use>
                        </svg>
                    </i>
                    <span>WhatsApp</span></a>
                <a class="mobile-menu__contact-el" href="tg://resolve?domain=v13k22"><i>
                        <svg width="25" height="21">
                            <use xlink:href="#icon-telegram"></use>
                        </svg>
                    </i><span>Telegram</span></a></div>
            <a class="mobile-menu__btn" href="#"><i>
                    <svg width="16" height="16">
                        <use xlink:href="#icon-calc"></use>
                    </svg>
                </i><span>Рассчитать варианты доставки</span></a>
        </div>
    </div>



    <main>
        <?if(!$isIndex && !$is404 && !$APPLICATION->GetDirProperty("HIDE_H1") == "Y"):?>
            <section class="services__hero <?=$APPLICATION->GetDirProperty("ADD_CLASS")?>">
                <div class="services__hero-title">
                    <div class="project-double white"><span></span><span></span></div>
                    <h1><?$APPLICATION->ShowTitle(false)?></h1>
                </div>

                <?$APPLICATION->ShowViewContent("SUBTITLE")?>

            </section>
            <section class="services__top">
                <div class="container">
                    <div class="services__top-line <?=$APPLICATION->GetDirProperty("BREAD_CLASS")?>">
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                                "START_FROM" => "0",
                                "PATH" => "",
                                "SITE_ID" => "s1"
                            )
                        );?>
                        <?$APPLICATION->ShowViewContent("ADD_BREAD")?>
                    </div>

                </div>
            </section>
        <?endif;?>
