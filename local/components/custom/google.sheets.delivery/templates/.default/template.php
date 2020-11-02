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


<section class="result-main">
    <div class="container">
        <div class="result-box">
            <? foreach ($arResult["ITEMS"] as $index => $arItem) {
                if($arItem[1] == "") continue;
                ?>
                <?$arCity = explode(",",$arItem[1]);?>
                <div class="result-el">
                    <div class="result-el__head">
                        <div class="result-el__info">
                            <div class="result-el__way">Из <?=$arCity[0]?> <span>в г.<?=$arResult["INPUT_PARAMS"]["TO"]?></span></div>
                            <div class="result-el__timeway">
                                <svg width="24" height="24">
                                    <use xlink:href="#icon-clock"></use>
                                </svg>
                                <span>
                                    <?if(strpos($arItem[9],"от") !== false):?>
                                        <?=$arItem[9]?> дней
                                    <?else:?>
                                        <?=$arItem[9]?>
                                        <?=\Helpers\DataHelper::getWordForm("days",$arItem[9])?>
                                    <?endif;?>
                                    <span>в пути</span>
                                </span>
                            </div>
                        </div>
                        <div class="result-el__tools">
                            <?if($arItem[10] == "Самый бюджетный"):?>
                                <div class="result-el__type budget"><span>Самый бюджетный</span></div>
                            <?endif;?>
                            <?if($arItem[11] == "Самый быстрый"):?>
                                <div class="result-el__type fast"><span>Самый быстрый</span></div>
                            <?endif;?>
                            <?if($arItem[12] == "Оптимальный"):?>
                                <div class="result-el__type opt"><span>Оптимальный</span></div>
                            <?endif;?>
                            <?$arPrice = explode(",",$arItem[8]);?>
                            <div class="result-el__cost"><span><sub>$</sub> <?=str_replace("$","",$arPrice[0])?></span>
                                <a class="bell show-cost" href="#"
                                data-from="<?= $arResult["INPUT_PARAMS"]["FROM"] ?>"
                                data-to="<?= $arResult["INPUT_PARAMS"]["TO"] ?>"
                                data-days="<?=$arItem[9] ?>"
                                data-delivery_price="<?=str_replace("$","",$arPrice[0])?>"
                                data-sum_price="<?=str_replace("$","",$arPrice[0])?>"
                                data-until="<?=$arItem[13]?>"
                                data-weight="<?= $arResult["INPUT_PARAMS"]["WEIGHT"] ?>"
                                data-volume="<?= $arResult["INPUT_PARAMS"]["VOLUME"] ?>"
                                >
                                    <svg width="20" height="24">
                                        <use xlink:href="#icon-bell"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="result-el__bottom">
                        <div class="result-el__mapline">
                            <?for($i = 1; $i < 8; $i++):?>
                                <?
                                    if($arItem[$i] == "") continue;
                                    switch ($arItem[$i]):
                                        case 'Авто':?>
                                            <div class="result-el__mapline-type">
                                                <span><?=$arItem[$i]?></span>
                                                <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/track.svg" alt=""></i>
                                            </div>
                                            <?break;
                                        case 'Морем':?>
                                            <div class="result-el__mapline-type">
                                                <span><?=$arItem[$i]?></span>
                                                <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/ship.svg" alt=""></i>
                                            </div>
                                            <?break;
                                        case 'Ж/Д':?>
                                            <div class="result-el__mapline-type">
                                                <span><?=$arItem[$i]?></span>
                                                <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/train.svg" alt=""></i>
                                            </div>
                                            <?break;
                                        case 'Авиа':?>
                                            <div class="result-el__mapline-type">
                                                <span><?=$arItem[$i]?></span>
                                                <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/fly.svg" alt=""></i>
                                            </div>
                                            <?break;
                                        default:?>
                                            <?$arCity = explode(",",$arItem[$i]);?>
                                            <div class="result-el__mapline-city">
                                                <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M23 12C23 14.0392 22.3164 16.2578 21.2269 18.482C20.1416 20.6979 18.6841 22.8578 17.2093 24.7628C15.7366 26.665 14.2615 28.2941 13.1536 29.4481C12.697 29.9237 12.3037 30.3177 12 30.6157C11.6963 30.3177 11.303 29.9237 10.8464 29.4481C9.73853 28.2941 8.26339 26.665 6.79072 24.7628C5.3159 22.8578 3.8584 20.6979 2.77306 18.482C1.68364 16.2578 1 14.0392 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
                                                          fill="white" stroke="#C3C4D4" stroke-width="2"/>
                                                    <circle cx="12" cy="12" r="4" fill="#C3C4D4"/>
                                                </svg>
                                                <span><?=$arCity[0]?></span>
                                            </div>
                                            <?break;
                                    endswitch;
                                ?>
                            <?endfor;?>

                        </div>
                        <div class="result-el__right">
                            <div class="result-el__subinfo">
                                <p>Действует: <span>до <?=$arItem[13]?></span></p>
                                <p>Налоговые сборы включены в стоимость</p>
                            </div>
                            <div class="result-el__btn">
                                <a href="<?=$APPLICATION->GetCurUri("index=".$index)?>" data-index="<?=$index?>">
                                    Подробнее
                                    <svg width="197" height="48" viewBox="0 0 197 48" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M196 8C196 4.13401 192.866 1 189 1H1.38742L11.4785 31.2732C14.6091 40.6651 23.3983 47 33.2982 47H189C192.866 47 196 43.866 196 40V8Z"
                                              stroke="url(#svggradient1)" stroke-width="2"/>
                                        <defs>
                                            <linearGradient id="svggradient1" x1="197" y1="48" x2="8.44147" y2="48"
                                                            gradientUnits="userSpaceOnUse">
                                                <stop offset="0.151042" stop-color="#F39324"/>
                                                <stop offset="1" stop-color="#EC663B"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?}?>

        </div>
        <aside class="result-aside">
            <div class="project-double"><span></span><span></span></div>
            <div class="result-aside__title">Для всех вариантов доставки</div>
            <div class="result-aside__el">
                <div class="result-aside__icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/aside1.svg" alt=""></div>
                <div class="result-aside__text">Бесплатное слежение через <a href='tg://resolve?domain=v13k22' class="open-telegram">Telegram</a> и <a
                        href='https://wa.me/79162751554' class="open-whatsapp">Whatsapp</a>

                </div>
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
