<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<?php
//var_dump($arResult["INFO"]);
if(isset($_REQUEST["index"])) {
    $arResult["CURRENT"] = $arResult["ITEMS"][trim($_REQUEST["index"])];
    $arResult["INPUT_PARAMS"]["index"] = trim($_REQUEST["index"]);
}
?>
<?
    $arPrice = explode(",",$arResult["CURRENT"][8]);
    $price = preg_replace("/[^0-9]/", "", $arPrice[0]);
    $arPrice = \Helpers\DataHelper::getFormatPrice($arResult["CURRENT"][8]);
?>
<div class="preview-way__left">
    <?if($arResult["CURRENT"][10] == "Самый бюджетный"):?>
        <div class="preview-way__type budget"><span>Самый бюджетный</span></div>
    <?endif;?>
    <?if($arResult["CURRENT"][11] == "Самый быстрый"):?>
        <div class="preview-way__type fast"><span>Самый быстрый</span></div>
    <?endif;?>
    <?if($arResult["CURRENT"][12] == "Оптимальный"):?>
        <div class="preview-way__type opt"><span>Оптимальный</span></div>
    <?endif;?>
    <div class="preview-way__info">
        <div class="preview-way__way">Из <?= $arResult["INPUT_PARAMS"]["FROM"] ?>
            <span>в <?= $arResult["INPUT_PARAMS"]["TO"] ?></span></div>
        <div class="preview-way__timeway">
            <svg width="24" height="24">
                <use xlink:href="#icon-clock"></use>
            </svg>
            <span>
                <?if(strpos($arResult["CURRENT"][9],"от") !== false):?>
                    <?=$arResult["CURRENT"][9]?> дней
                <?else:?>
                    <?=$arResult["CURRENT"][9]?>
                    <?=\Helpers\DataHelper::getWordForm("days",$arResult["CURRENT"][9])?>
                <?endif;?>
                <span>в пути</span>

            </span>
        </div>
    </div>
    <ul class="preview-way__subinfo">

            <? foreach ($arResult["INFO"][20] as $colIndex => $item) {
                if($arResult["CURRENT"][0] == $item){
                    for($i = 21; $i < 25;$i++):?>
                        <li><?=$arResult["INFO"][$i][$colIndex]?></li>
                    <?endfor;
                    break;
                }
            }?>
    </ul>
    <div class="result-el__mapline">
        <?for($i = 1; $i < 8; $i++):?>
            <?
            if($arResult["CURRENT"][$i] == "") continue;
            switch ($arResult["CURRENT"][$i]):
                case 'Авто':?>
                    <div class="result-el__mapline-type">
                        <span><?=$arResult["CURRENT"][$i]?></span>
                        <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/track.svg" alt=""></i>
                    </div>
                    <?break;
                case 'Морем':?>
                    <div class="result-el__mapline-type">
                        <span><?=$arResult["CURRENT"][$i]?></span>
                        <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/ship.svg" alt=""></i>
                    </div>
                    <?break;
                case 'Ж/Д':?>
                    <div class="result-el__mapline-type">
                        <span><?=$arResult["CURRENT"][$i]?></span>
                        <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/train.svg" alt=""></i>
                    </div>
                    <?break;
                case 'Авиа':?>
                    <div class="result-el__mapline-type">
                        <span><?=$arResult["CURRENT"][$i]?></span>
                        <i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/fly.svg" alt=""></i>
                    </div>
                    <?break;
                default:?>
                    <?$arCity = explode(",",$arResult["CURRENT"][$i]);?>
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
    <?
    $type = "";
    switch ($arResult["CURRENT"][0]){
        case "Сборник":
            $type = "SBORNIK";
            break;
        case "Транзит":
            $type = "TRANSIT";
            break;
        case "Авиа 1":
            $type = "AVIA1";
            break;
        case "Авиа 2":
            $type = "AVIA2";
            break;
        case "Авиа 3":
            $type = "AVIA3";
            break;
        case "Авиа 4":
            $type = "AVIA4";
            break;
        case "ЖД":
            $type = "JD";
            break;
        case "Литва":
            $type = "VILNUS";
            break;
        case "Италия":
            $type = "ITALY";
            break;
    }
    ?>
    <div class="preview-way__detailed">
        <? foreach ($arResult["GRAPH"][$type] as $arData) {?>
            <div class="preview-way__detailed-el">
                <div class="preview-way__detailed-date"><span><span><?=$arData[3]?></span>-й день</span><span><?=$arData[0]?></span></div>
                <div class="preview-way__detailed-point">
                    <svg width="24" height="32" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 14.0392 22.3164 16.2578 21.2269 18.482C20.1416 20.6979 18.6841 22.8578 17.2093 24.7628C15.7366 26.665 14.2615 28.2941 13.1536 29.4481C12.697 29.9237 12.3037 30.3177 12 30.6157C11.6963 30.3177 11.303 29.9237 10.8464 29.4481C9.73853 28.2941 8.26339 26.665 6.79072 24.7628C5.3159 22.8578 3.8584 20.6979 2.77306 18.482C1.68364 16.2578 1 14.0392 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
                              fill="white" stroke="#C3C4D4" stroke-width="2"/>
                        <circle cx="12" cy="12" r="4" fill="#C3C4D4"/>
                    </svg>
                </div>
                <div class="preview-way__detailed-info">
                    <span><?=$arData[4]?></span>
                    <?if($arData[2]):?>
                        <span><?=$arData[2]?></span>
                    <?endif;?>
                </div>
            </div>
            <?if($arData[1]):?>
                <div class="preview-way__detailed-el detailed-go">
                    <div class="preview-way__detailed-date"></div>
                    <?if($arData[1] == "Авиа"):?>
                        <div class="preview-way__detailed-point"><i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/fly.svg" alt=""/></i></div>
                        <div class="preview-way__detailed-info"><span><?=$arData[1]?></span></div>
                    <?endif;?>
                    <?if($arData[1] == "По морю"):?>
                        <div class="preview-way__detailed-point"><i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/ship.svg" alt=""/></i></div>
                        <div class="preview-way__detailed-info"><span><?=$arData[1]?></span></div>
                    <?endif;?>
                    <?if($arData[1] == "По Ж/Д"):?>
                        <div class="preview-way__detailed-point"><i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/train.svg" alt=""/></i></div>
                        <div class="preview-way__detailed-info"><span><?=$arData[1]?></span></div>
                    <?endif;?>
                    <?if($arData[1] == "Авто"):?>
                        <div class="preview-way__detailed-point"><i><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/track.svg" alt=""/></i></div>
                        <div class="preview-way__detailed-info"><span><?=$arData[1]?></span></div>
                    <?endif;?>
                </div>
            <?endif;?>
        <?}?>

    </div>
    <a class="preview-way__detailed-btn" href="#">
        <svg width="322" height="65" viewBox="0 0 322 65" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 8.65674C1 4.79075 4.13401 1.65674 8 1.65674H320.557L302.904 48.7326C299.537 57.7096 290.955 63.6567 281.368 63.6567H8C4.13401 63.6567 1 60.5227 1 56.6567V8.65674Z"
                  stroke="url(#svggradient1)" stroke-width="2"/>
        </svg>
        <i>
            <svg width="17" height="17">
                <use xlink:href="#icon-calendar"></use>
            </svg>
        </i><span>Показать подробный маршрут</span>
    </a>
    <div class="preview-way__additional">
        <div class="preview-way__additional-title">Дополнительные услуги</div>
        <div class="preview-way__additional-row">
            <div class="preview-way__additional-left">
                <label class="default-check" data-cost=<?=$arResult["PRICE"]["TAMOJNYA"]?>>
                    <input type="checkbox" name="exportdoc"/><span class="default-check__icon"><span></span></span><span
                            class="default-check__text">Оформление экспортных документов</span>
                </label>
            </div>
        </div>
        <div class="preview-way__additional-row">
            <div class="preview-way__additional-left">
                <label class="default-check" data-cost="<?=$arResult["PRICE"]["DO_MCAD"]?>">
                    <input type="checkbox" name="delivery" id="mcad"/><span
                            class="default-check__icon"><span></span></span><span class="default-check__text">Доставка в пределах МКАД</span>
                </label>
            </div>
        </div>
        <div class="preview-way__additional-row">
            <div class="preview-way__additional-left">
                <label class="default-check" data-cost="0.1">
                    <input type="checkbox" name="deliverymcad" id="outmcad"/><span
                            class="default-check__icon"><span></span></span><span class="default-check__text">Доставка за МКАД</span>
                </label>
            </div>
            <div class="preview-way__additional-right">
                <label class="additional-input">
                    <div class="additional-input__label">Расстояние от МКАД:</div>
                    <input type="text" name="mkadkm" value="0" data-mkadkm data-weight="<?=$arResult["INPUT_PARAMS"]["WEIGHT"] ?>" data-volume="<?=$arResult["INPUT_PARAMS"]["VOLUME"] ?>"/>
                    <div class="additional-input__suffix">км</div>
                    <div class="additional-input__border"></div>
                </label>
            </div>
        </div>
        <div class="preview-way__additional-row insure">
            <div class="preview-way__additional-left">
                <label class="default-check" data-cost="1">
                    <input type="checkbox" name="insur" id="insureCheckbox"/>
                    <span class="default-check__icon"><span></span></span><span
                            class="default-check__text">Страхование груза</span>
                </label>
            </div>
            <div class="preview-way__additional-right">
                <label class="additional-input">
                    <div class="additional-input__label">На сумму:</div>
                    <div class="additional-input__suffix">$</div>
                    <input type="text" name="insurcount" value="0" data-insurcount/>
                    <div class="additional-input__border"></div>
                </label>
            </div>
        </div>
        <div class="preview-way__additional-row custom">
            <div class="preview-way__additional-left">
                <label class="default-check" >
                    <input type="checkbox" name="customsdoc"/><span
                            class="default-check__icon"><span></span></span><span class="default-check__text">Таможенное оформление</span>
                </label>
            </div>
            <div class="preview-way__additional-right">
                <div class="additional-select">
                    <input type="hidden" name="customdoctype" value=""/>
                    <div class="additional-select__selected"><span>Не выбрано</span><i></i>
                        <div class="additional-select__border"></div>
                    </div>
                    <div class="additional-select__drop">
                        <?/*<a class="active additional-select__el" href="#" data-value="" data-price="0">Не выбрано</a>*/?>
                        <a class="active additional-select__el" href="#" data-value="За печатью брокера/<?=$arResult["PRICE"]["BROKER"]?>" data-price="<?=$arResult["PRICE"]["BROKER"]?>">За печатью брокера</a>
                        <a class="additional-select__el" href="#" data-value="У меня своя ЭЦП/<?=$arResult["PRICE"]["ECP"]?>" data-price="<?=$arResult["PRICE"]["ECP"]?>">У меня своя ЭЦП</a>
                        <a class="additional-select__el" href="#" data-value="Агентский Контракт/0" data-price="<?=$arResult["PRICE"]["AGENT"]?>" data-agent>Агентский Контракт</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preview-way__adv">
        <div class="preview-way__adv-el">
            <div class="preview-way__adv-title">С нами удобно</div>
            <ul class="preview-way__adv-list">
                <? foreach ($arResult["INFO"][77] as $colIndex => $item) {
                    if(strpos($arResult["CURRENT"][0], $item) !== false){
                    //if($arResult["CURRENT"][0] == $item){
                        for($i = 78; $i < 86; $i++):?>
                            <?if(trim($arResult["INFO"][$i][$colIndex]) == "" ) continue;?>
                            <li><?=$arResult["INFO"][$i][$colIndex]?></li>
                        <?endfor;
                        break;
                    }
                }?>
            </ul>
        </div>
        <div class="preview-way__adv-el">
            <div class="preview-way__adv-title">Уже включено в стоимость</div>
            <ul class="preview-way__adv-list">
                <? foreach ($arResult["INFO"][57] as $colIndex => $item) {
                    //if($arResult["CURRENT"][0] == $item){
                    if(strpos($arResult["CURRENT"][0], $item) !== false){
                            for($i = 58; $i < 66; $i++):?>
                            <?if(trim($arResult["INFO"][$i][$colIndex]) == "" ) continue;?>
                                <li><?=$arResult["INFO"][$i][$colIndex]?></li>
                            <?endfor;
                        break;
                    }
                }?>
            </ul>
        </div>
    </div>
    <div class="preview-way__faq">
        <div class="preview-way__faq-title">Часто задаваемые вопросы</div>
        <? foreach ($arResult["INFO"][30] as $colIndex => $item) {
            //if($arResult["CURRENT"][0] == $item){
            if(strpos($arResult["CURRENT"][0], $item) !== false){
                for($i = 31; $i < 54; $i+=3):?>
                    <?$k = $i;?>
                    <?if(trim($arResult["INFO"][$k][$colIndex]) == "" ) continue;?>
                    <div class="preview-way__faqel">
                        <div class="preview-way__faqel-head"><span><?=$arResult["INFO"][$k][$colIndex]?></span><i></i>
                        </div>
                        <div class="preview-way__faqel-body">
                            <p><?=$arResult["INFO"][++$k][$colIndex]?></p>
                        </div>
                    </div>
                <?endfor;
                break;
            }
        }?>

    </div>
    <div class="preview-way__mobile">
        <div class="preview-way__mobile-wp">
            <div class="preview-way__top-cap"><span></span></div>
            <div class="preview-way__mobile-content">
                <div class="preview-way__mobile-content-wp">
                    <div class="preview-way__mobile-box">
                        <div class="preview-way__maininfo">
                            <div><span>Вес:</span><span><?=$arResult["INPUT_PARAMS"]["WEIGHT"] ?> кг</span></div>
                            <div><span>Объём:</span><span><?=$arResult["INPUT_PARAMS"]["VOLUME"] ?> м3</span></div>
                        </div>
                        <div class="preview-way__text">Вес груза уточняется при взвешивании на складе ZTM в пункте
                            отгрузки
                        </div>
                        <div class="preview-way__counting">
                            <div class="preview-way__counting-el" data-cost="<?=$arPrice["CLEAR_PRICE"]?>"></div>
                        </div>
                    </div>
                    <div class="preview-way__footer">
                        <div class="preview-way__all"><span>Итого:</span><span><?=$arPrice["FORMATTED_PRICE"]?></span><a
                                    class="bell show-cost ajax-cost" href="#">
                                <svg width="16" height="20">
                                    <use xlink:href="#icon-bell"></use>
                                </svg>
                            </a></div>
                        <div class="preview-way__footer-text">
                            <p>Цена действует: <span>до <?=$arResult["CURRENT"][13]?></span></p>
                            <p>Налоговые сборы включены в стоимость</p>
                        </div>
                    </div>
                    <div class="preview-way__mobile-bottom">
                        <div class="preview-way__useraction">
                            <a href="javascript:document.getElementById('pdf_form-js').submit();" >
                                <svg width="14" height="17">
                                    <use xlink:href="#icon-download"></use>
                                </svg>
                            </a><a href="javascript:document.getElementById('pdf_form-js').submit();">
                                <svg width="18" height="17">
                                    <use xlink:href="#icon-print"></use>
                                </svg>
                            </a></div>
                        <a class="preview-way__send" href="#">Отправить расчёт</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="preview-way__right">
    <form action="/pdf/" method="post" class="pdf_form-js" target="_blank" id="pdf_form-js">
        <input type="hidden" name="from" value="<?= $arResult["INPUT_PARAMS"]["FROM"] ?>">
        <input type="hidden" name="to" value="<?= $arResult["INPUT_PARAMS"]["TO"] ?>">
        <input type="hidden" name="days" value="<?=$arResult["CURRENT"][9] ?>">
        <input type="hidden" name="delivery_price" value="<?=$arPrice["SEPARATED_PRICE"]?>">
        <input type="hidden" name="delivery_price_raw" value="<?=$arPrice["CLEAR_PRICE"]?>">
        <input type="hidden" name="until" value="<?=$arResult["CURRENT"][13]?>">
        <input type="hidden" name="sum_price" value="<?=$arPrice["SEPARATED_PRICE"]?>">
        <input type="hidden" name="sum_price_raw" value="<?=$arPrice["CLEAR_PRICE"]?>">
        <div class="preview-way__box">
            <?if($arResult["CURRENT"][10] == "Самый бюджетный"):?>
                <div class="preview-way__type budget"><span>Самый бюджетный</span></div>
            <?endif;?>
            <?if($arResult["CURRENT"][11] == "Самый быстрый"):?>
                <div class="preview-way__type fast"><span>Самый быстрый</span></div>
            <?endif;?>
            <?if($arResult["CURRENT"][12] == "Оптимальный"):?>
                <div class="preview-way__type opt"><span>Оптимальный</span></div>
            <?endif;?>
            <div class="preview-way__maininfo">
                <div><span>Вес:</span><span><?=$arResult["INPUT_PARAMS"]["WEIGHT"] ?> кг</span></div>
                <input type="hidden" name="weight" value="<?=$arResult["INPUT_PARAMS"]["WEIGHT"] ?>">
                <div><span>Объём:</span><span><?=$arResult["INPUT_PARAMS"]["VOLUME"] ?> м3</span></div>
                <input type="hidden" name="volume" value="<?=$arResult["INPUT_PARAMS"]["VOLUME"] ?>">
            </div>
            <div class="preview-way__text">Вес груза уточняется при взвешивании на складе ZTM в пункте отгрузки</div>


            <div class="preview-way__counting">
                <div class="preview-way__counting-el" data-cost="<?=$arPrice["CLEAR_PRICE"]?>"></div>
            </div>
            <div class="preview-way__footer">
                <div class="preview-way__all">
                    <span>Итого:</span><span><?=$arPrice["FORMATTED_PRICE"]?></span>
                </div>
                <div class="preview-way__footer-text">
                    <p>Цена действует: <span>до <?=$arResult["CURRENT"][13]?></span></p>
                    <p>Налоговые сборы включены в стоимость</p>
                </div>
            </div>
        </div>
        <div class="preview-way__useraction">
            <button >
                <svg width="14" height="17">
                    <use xlink:href="#icon-download"></use>
                </svg>
                <span>Сохранить в pdf</span>
            </button>
            <button >
                <svg width="18" height="17">
                    <use xlink:href="#icon-print"></use>
                </svg>
                <span>Распечатать</span>
            </button>
        </div>
    </form>

    <div class="preview-way__sendphone main-request__input">
        <input type="text" name="phoneemail" id="userphone" required/>
        <label for="userphone">Номер телефона или email</label>
        <div class="main-request__input-border"></div>
    </div>
    <a class="preview-way__send pdf_send_btn"  href="#">Отправить <span>расчёт эксперту</span></a>
    <div class="preview-way__sendinfo">
        <svg width="17" height="17">
            <use xlink:href="#icon-info"></use>
        </svg>
        <p>Эксперт подробно расскажет о деталях перевозки, оформления и оплаты груза. Проверит, можно ли еще
            оптимизировать стоимость и срок доставки, забронирует место под погрузку на нужную дату и расскажет о ваших
            дальнейших шагах.</p>
    </div>
</div>
<div class="preview-way__cl"><span></span></div>
<script>
    function debounce(f, t) {
        return function (args) {
            let previousCall = this.lastCall;
            this.lastCall = Date.now();
            if (previousCall && ((this.lastCall - previousCall) <= t)) {
                clearTimeout(this.lastCallTimer);
            }
            this.lastCallTimer = setTimeout(() => f(args), t);
        }
    }
    $(document).ready(function () {
        $('.pdf_send_btn').on('click',function (e) {
            e.preventDefault();
            let $form = $('.pdf_form-js'),
                $phoneemail = $("#userphone").val(),
                $fileName;
            if($phoneemail.length > 0){
                $.post("/pdf/makePdf.php", $form.serialize(), function(data){
                    $fileName = data;
                }).done(function () {
                    $.post("/ajax/sendRaschet.php", {"phoneemail":$phoneemail,"filename":$fileName}, function(data){
                        if(data == "ok"){
                            $('.modal-ty').addClass('active');
                        }
                    });
                });
            }else{
                $("#userphone").focus();
            }

        });

        let $mkadkm = $('[data-mkadkm]');
        if ($mkadkm.length) {
            $mkadkm.on('keyup', function (e) {
                e.preventDefault();
                debounce(function () {
                    let kmValue = $(e.target).val();
                    let weight = $(e.target).data("weight");
                    let volume = $(e.target).data("volume");
                    let data = {
                        km: kmValue,
                        weight: weight,
                        volume: volume
                    };
                    $.post('/ajax/ajaxMkad.php', data, function(data){
                        $(".preview-way__counting-el[data-name='deliverymcad']").attr("data-cost",data);
                        $(".preview-way__counting-el[data-name='deliverymcad']").find("div:nth-of-type(2) span").html('<sub>$</sub> ' + number_format(data, 0, '.', ' '));
                        $("input[name='deliverymcad']").val(data);
                        countTotalPrice();
                    }, 'json');

                },500)();
            });
        }

        let $insurcount = $('[data-insurcount]');
        if ($insurcount.length) {
            $insurcount.on('keyup', function (e) {
                e.preventDefault();
                debounce(function () {

                    let data = {
                        insurcount: $(e.target).val(),
                    };
                    $.post('/ajax/ajaxInsurcount.php', data, function(data){
                        $(".preview-way__counting-el[data-name='insure']").attr("data-cost",data);
                        $(".preview-way__counting-el[data-name='insur']").find("div:nth-of-type(2) span").html('<sub>$</sub> ' + number_format(data, 0, '.', ' '));

                        $("input[name='insur']").val(data);
                        countTotalPrice();
                    }, 'json');

                },500)();
            });
        }

        let $agent = $('[data-agent]');
        if ($agent.length) {
            $agent.on('click', function (e) {
                setTimeout(function () {

                    let sumPriceRaw = $("input[name='sum_price_raw']").val();
                    let deliveryPriceRaw = $("input[name='delivery_price_raw']").val();
                    let agentPrice = (sumPriceRaw - deliveryPriceRaw) * $agent.attr('data-price');

                    $(".preview-way__counting-el[data-name='customdoctype']").attr("data-cost",agentPrice);
                    $(".preview-way__counting-el[data-name='customdoctype']").find("div:nth-of-type(2) span").html('<sub>$</sub> ' + number_format(agentPrice, 0, '.', ' '));
                    $("input[name='customdoctype']").val("Агентский Контракт/"+agentPrice);
                    console.log(agentPrice);
                    countTotalPrice();
                },500);

            });
        }
    });
</script>
