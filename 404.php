<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
?>
<section class="page-404">
    <div class="container">
        <div class="page-404__wp">
            <div class="page-404__img">
                <div class="page-404__img-wp"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/404.png" alt=""></div>
            </div>
            <p>Приносим извинения, но такой страницы не существует либо она не доступна на данный момент</p>
            <div class="main-calc__btn"><a href="/">
                    Вернуться на главную<svg width="366" height="85" viewBox="0 0 366 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 1H1.7802L2.01942 2.19612L11.5923 50.0606C15.4234 69.2159 32.2367 83.008 51.7713 83.0199L314.171 83.1788C333.732 83.1907 350.576 69.383 354.404 50.2005L363.981 2.19565L364.219 1H363H3Z" stroke="url(#paint0_linear)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="3.00001" y1="82.1987" x2="347.574" y2="82.1987" gradientUnits="userSpaceOnUse">
                                <stop offset="0.151042" stop-color="#F39324"/>
                                <stop offset="1" stop-color="#EC663B"/>
                            </linearGradient>
                        </defs>
                    </svg></a></div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

