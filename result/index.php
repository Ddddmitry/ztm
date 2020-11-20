<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты подбора");
?>

<h1 id="asd32">
<?=var_dump($_REQUEST["part"]);?>
</h1>
    <section class="result-form">
        <form class="container result-calc" action="/result/" method="get" autocomplete="off">
            <div class="result-form__types">
                <div class="result-form__types-wp">
                    <label class="result-form__radio">
                        <input type="radio" name="part" value="11" <?if($_REQUEST["part"] == 11):?>checked<?endif;?> <?if(is_null($_REQUEST["part"])):?>checked<?endif;?>><span>из Азии</span>
                    </label>
                    <label class="result-form__radio">
                        <input type="radio" name="part" value="12" <?if($_REQUEST["part"] == 12):?>checked<?endif;?>><span>из Европы</span>
                    </label>
                    <div class="result-form__radio-lighter"></div>
                </div>
            </div>
            <div class="result-form__inputs">
                <div class="main-calc__input result-form__input cityof main-calc__select <?if($_REQUEST["from"]):?>cont<?endif;?>">
                    <input type="text" name="from" id="cotyof" <?if($_REQUEST["from"]):?>value="<?=$_REQUEST["from"]?>" <?endif;?>>
                    <label for="cotyof">Город отправления</label>
                    <div class="main-calc__select-drop"></div>

                  <!--  <select name="from" id="cotyof" <?/*if($_REQUEST["from"]):*/?>class="cont" <?/*endif;*/?>>
                        <option value="" selected></option>
                        <?/* foreach (CITIES_FROM["cn"] as $item) {*/?>
                            <option data-country="cn" value="<?/*=$item*/?>" <?/*if($_REQUEST["from"] == $item):*/?>selected<?/*endif;*/?>><?/*=$item*/?></option>
                        <?/*}*/?>
                        <?/* foreach (CITIES_FROM["eu"] as $item) {*/?>
                            <option data-country="eu" value="<?/*=$item*/?>" <?/*if($_REQUEST["from"] == $item):*/?>selected<?/*endif;*/?> disabled><?/*=$item*/?></option>
                        <?/*}*/?>

                    </select>
                    <label for="cotyof">Город отправления</label>-->
                </div>
                <div class="main-calc__input result-form__input cityfor main-calc__select <?if($_REQUEST["to"]):?>cont<?endif;?>">
                    <input type="text" name="to" id="cotyfor" <?if($_REQUEST["to"]):?>value="<?=$_REQUEST["to"]?>" <?else:?>disabled<?endif;?>>
                    <label for="cotyfor">Город получения</label>
                    <div class="main-calc__select-drop"></div>

                    <!--<select name="to" id="cotyfor" <?/*if($_REQUEST["to"]):*/?>class="cont" <?/*else:*/?>disabled<?/*endif;*/?>>
                        <option value="" <?/*if($_REQUEST["to"] == ""):*/?>selected<?/*endif;*/?>></option>
                        <?/* foreach (CITIES_TO as $item) {*/?>
                            <option value="<?/*=$item*/?>" <?/*if($_REQUEST["to"] == $item):*/?>selected<?/*endif;*/?>><?/*=$item*/?></option>
                        <?/*}*/?>
                    </select>
                    <label for="cityfor">Город получения</label>-->
                </div>
                <div class="result-form__input pallet hidden <?if($_REQUEST["pallet"]):?>cont<?endif;?>">
                    <input type="text" inputmode="number" name="pallet" id="pallet" <?if($_REQUEST["pallet"]):?>value="<?=$_REQUEST["pallet"]?>" <?else:?>disabled<?endif;?>>
                    <label for="pallet" data-focustext="Паллет, от 1 до 15" data-normaltext="Паллет">Паллет</label>
                </div>
                <div class="result-form__input weight <?if($_REQUEST["weight"]):?>cont<?endif;?>">
                    <input type="text" inputmode="number" name="weight" id="weight" <?if($_REQUEST["weight"]):?>value="<?=$_REQUEST["weight"]?>" <?else:?>disabled<?endif;?>>
                    <label for="weight" data-focustext="Вес, от 20 до 10 000 кг" data-normaltext="Вес, кг">Вес, кг</label>
                </div>
                <div class="result-form__input volume <?if($_REQUEST["volume"]):?>cont<?endif;?>">
                    <input type="text" inputmode="number" name="volume" id="volume" <?if($_REQUEST["volume"]):?>value="<?=$_REQUEST["volume"]?>" <?else:?>disabled<?endif;?>>
                    <label for="volume" data-focustext="Объём, от 1 до 15 м&lt;sup&gt;3&lt;/sup&gt;" data-normaltext="Объём, м&lt;sup&gt;3&lt;/sup&gt;">Объём, м<sup>3</sup></label>
                </div>
            </div>
            <button class="result-form__btn" type="submit" <?if(!$_REQUEST["volume"]):?>disabled<?endif;?>>Рассчитать</button>
            <div class="result-form__attemp">
                <svg width="16" height="16">
                    <use xlink:href="#icon-attemp"></use>
                </svg>
                <span>Расчёт сделан для не опасных, габаритных, не режимных грузов</span>
            </div>
            <!--<label class="result-form__neighbors default-check">
                <input type="checkbox" name="neighbors"><span class="default-check__icon"><span></span></span><span
                    class="default-check__text">Показывать варианты из соседних городов</span>
            </label>-->
        </form>
        <div class="result-form__mob">
            <div class="container">
                <div class="result-form__mob-info">
                    <div class="result-form__mob-params">
                        Из
                        <?if($_REQUEST["part"] == "asia" || $_REQUEST["part"] == "11"):?>Азии<?else:?>Европы<?endif;?>
                        - <?=$_REQUEST["from"]?> - <?=$_REQUEST["to"]?> - <?=($_REQUEST["pallet"]) ?? $_REQUEST["pallet"]." паллет - "?> <?=$_REQUEST["weight"]?> кг - <?=$_REQUEST["volume"]?> м<sup>3</sup></div>
                    <button class="result-form__open-filter">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M9.9126 9.375C9.9126 8.85722 9.49288 8.4375 8.9751 8.4375H5.2251C4.70732 8.4375 4.2876 8.85722 4.2876 9.375V11.0568H0.209473V12.9318H4.2876V14.5312C4.2876 15.049 4.70732 15.4688 5.2251 15.4688H8.9751C9.49288 15.4688 9.9126 15.049 9.9126 14.5312V12.9318H24.2095V11.0568H9.9126V9.375ZM8.0376 13.5938H6.1626V10.3125H8.0376V13.5938Z"
                                      fill="white"/>
                                <path d="M20.4126 17.9062C20.4126 17.3885 19.9929 16.9688 19.4751 16.9688H15.7251C15.2073 16.9688 14.7876 17.3885 14.7876 17.9062V19.5469H0.209473V21.4219H14.7876V23.0625C14.7876 23.5803 15.2073 24 15.7251 24H19.4751C19.9929 24 20.4126 23.5803 20.4126 23.0625V21.4219H24.2095V19.5469H20.4126V17.9062ZM18.5376 22.125H16.6626V18.8438H18.5376V22.125Z"
                                      fill="white"/>
                                <path d="M20.5063 2.625V0.9375C20.5063 0.419719 20.0866 0 19.5688 0H15.8188C15.3011 0 14.8813 0.419719 14.8813 0.9375V2.625H0.209473V4.5H14.8813V6.09375C14.8813 6.61153 15.3011 7.03125 15.8188 7.03125H19.5688C20.0866 7.03125 20.5063 6.61153 20.5063 6.09375V4.5H24.2095V2.625H20.5063ZM18.6313 5.15625H16.7563V1.875H18.6313V5.15625Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(0.209473)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <div class="result-form__attemp-wp">
                    <div class="result-form__attemp">
                        <svg width="16" height="16">
                            <use xlink:href="#icon-attemp"></use>
                        </svg>
                        <span>Расчёт сделан для не опасных, габаритных, не режимных грузов</span>
                    </div>
                    <button class="result-form__attemp-close">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.8331 0.200259C11.1 -0.0666668 11.5328 -0.0666668 11.7997 0.200259C12.0666 0.467185 12.0666 0.899956 11.7997 1.16688L6.96657 6L11.7997 10.8332C12.0667 11.1001 12.0667 11.5329 11.7997 11.7998C11.5328 12.0667 11.1 12.0667 10.8331 11.7998L5.99994 6.96662L1.16682 11.7997C0.899895 12.0667 0.467122 12.0667 0.200197 11.7997C-0.066729 11.5328 -0.0667294 11.1 0.200196 10.8331L5.03332 6L0.200257 1.16693C-0.0666678 0.900007 -0.0666683 0.467234 0.200257 0.200308C0.467183 -0.0666175 0.899955 -0.0666182 1.16688 0.200308L5.99994 5.03337L10.8331 0.200259Z"
                                  fill="white"/>
                        </svg>
                    </button>
                </div>
                <!--<form class="result-form__mob-check" action="/" type="POST">
                    <label class="result-form__neighbors default-check">
                        <input type="checkbox" name="neighbors"><span
                            class="default-check__icon"><span></span></span><span class="default-check__text">Показывать варианты из соседних городов</span>
                    </label>
                </form>-->
            </div>
        </div>
    </section>
    <section class="result-main">
        <div class="container">
            <div data-result-ajax>
                <div class="preview-preloader">
                    <div class="preview-preloader__wp">
                        <div class="preview-preloader__mask top">
                            <div class="plane"></div>
                        </div>
                        <div class="preview-preloader__mask middle">
                            <div class="plane"></div>
                        </div>
                        <div class="preview-preloader__mask bottom">
                            <div class="plane"></div>
                        </div>
                        <div class="preview-preloader__text">LOADING...</div>
                    </div>
                </div>
                <?php
                $arData = array_merge(["main"=>"Y"],$_GET);
                ?>
                <script>
                    let params = <?=json_encode($arData);?>;
                    $.post("/ajax/ajaxResult.php",params).done(function (data) {
                        $('[data-result-ajax]').html(data);
                    });
                </script>
            </div>
            <aside class="result-aside">
                <div class="project-double"><span></span><span></span></div>
                <div class="result-aside__title">Для всех вариантов доставки</div>
                <div class="result-aside__el">
                    <div class="result-aside__icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/aside1.svg" alt=""></div>
                    <div class="result-aside__text">Бесплатное слежение через <a href='#' class="open-telegram">Telegram</a> и <a
                                href='#' class="open-whatsapp">Whatsapp</a></div>
                </div>
                <div class="result-aside__el">
                    <div class="result-aside__icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/aside2.svg" alt=""></div>
                    <div class="result-aside__text">Условный выпуск на таможне</div>
                </div>
                <div class="result-aside__el">
                    <div class="result-aside__icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/aside3.svg" alt=""></div>
                    <div class="result-aside__text">Полный пакет закрывающих документов для бухгалтерии</div>
                </div>
                <div class="result-aside__el">
                    <div class="result-aside__icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/aside4.svg" alt=""></div>
                    <div class="result-aside__text">Подача ДТ со своим таможенным представителем</div>
                </div>
            </aside>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
