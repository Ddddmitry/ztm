<div class="modal-calc">
    <div class="container">
        <div class="project-double"><span></span><span></span></div>
        <div class="modal-calc__title">25 лет мы доставляем грузы со всего мира в любую точку России</div>
        <form class="modal-calc__form main-calc" action="/result/" method="get" autocomplete="off">
            <div class="main-calc__type">
                <div class="main-calc__type-wp">
                    <label class="main-calc__radio">
                        <input type="radio" name="part" value="11" checked><span>из Азии</span>
                    </label>
                    <label class="main-calc__radio">
                        <input type="radio" name="part" value="12"><span>из Европы</span>
                    </label>
                    <div class="main-calc__radio-lighter"></div>
                </div>
            </div>
            <div class="main-calc__row">
                <div class="main-calc__input cityof main-calc__select">
                    <input type="text" name="from" id="mcotyof">
                    <label for="mcotyof">Город отправления</label>
                    <div class="main-calc__select-drop"></div>
                </div>
                <div class="main-calc__input cityfor main-calc__select">
                    <input type="text" name="to" id="mcotyfor" disabled>
                    <label for="mcotyfor">Город получения</label>
                    <div class="main-calc__select-drop"></div>
                </div>
                <div class="main-calc__input pallet hidden">
                    <input type="text" inputmode="numeric" disabled name="pallet" id="mpallet">
                    <label for="mpallet" data-focustext="Паллет, от 1 до 15" data-normaltext="Паллет">Паллет</label>
                </div>
                <div class="main-calc__input weight">
                    <input type="text" inputmode="numeric" disabled name="weight" id="mweight">
                    <label for="mweight" data-focustext="Вес, от 20 до 10 000 кг" data-normaltext="Вес, кг">Вес, кг</label>
                </div>
                <div class="main-calc__input volume">
                    <input type="text" inputmode="numeric" disabled name="volume" id="mvolume">
                    <label for="mvolume" data-focustext="Объём, от 1 до 15 м&lt;sup&gt;3&lt;/sup&gt;" data-normaltext="Объём, м&lt;sup&gt;3&lt;/sup&gt;">Объём, м<sup>3</sup></label>
                </div>
            </div>
            <div class="main-calc__btn">
                <button type="submit" disabled>
                    Рассчитать варианты доставки<svg width="410" height="80" viewBox="0 0 410 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5495 47.6485L1.2198 1H408.78L399.45 47.6485C395.805 65.8781 379.798 79 361.208 79H48.7921C30.2016 79 14.1954 65.8781 10.5495 47.6485Z" stroke="url(#svggradient)" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="main-modal modal-messenger modal-telegram">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-messenger__title">Telegram</div>
        <div class="modal-messenger__text">Открыть приложение <a href='https://t.me/Alexsey_ztm' target="_blank">Telegram Desktop</a></div>
        <div class="modal-messenger__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/main/qr-telegram.png" alt=""></div>
    </div>
</div>
<div class="main-modal modal-messenger modal-whatsapp">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-messenger__title">Whatsapp</div>
        <div class="modal-messenger__text">Открыть приложение <a href='https://wa.me/74951207996' target="_blank">Whatsapp Desktop</a></div>
        <div class="modal-messenger__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/main/qr-wt.png" alt=""></div>
    </div>
</div>
<div class="main-modal thanks">
    <div class="thanks__overlay"></div>
    <div class="thanks__content">
        <div class="thanks__content-wp">
            <div class="mobcalc__header">
                <div class="mobcalc__back"></div>
                <div class="mobcalc__logo"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></div>
                <div class="mobcalc__close"><a href="#">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.8331 0.200194C11.1 -0.0667315 11.5328 -0.0667314 11.7997 0.200194C12.0666 0.46712 12.0666 0.899892 11.7997 1.16682L6.96657 5.99993L11.7997 10.8331C12.0667 11.1 12.0667 11.5328 11.7997 11.7997C11.5328 12.0667 11.1 12.0667 10.8331 11.7997L5.99994 6.96655L1.16682 11.7997C0.899892 12.0666 0.46712 12.0666 0.200194 11.7997C-0.0667312 11.5328 -0.0667316 11.1 0.200194 10.8331L5.03332 5.99993L0.200255 1.16687C-0.0666706 0.899941 -0.0666705 0.467169 0.200255 0.200244C0.467181 -0.0666821 0.899953 -0.0666825 1.16688 0.200243L5.99994 5.03331L10.8331 0.200194Z"
                                  fill="#2C2F49"/>
                        </svg>
                    </a></div>
            </div>
            <div class="project-double"><span></span><span></span></div>
            <h4>Ваша заявка получена</h4>
            <p>Спасибо за обращение на расчет, ваша заявка принята и мы скоро свяжемся с вами и предложим хорошие
                варианты.</p>
            <div class="thanks__close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1.23077L14.7692 5.86876e-07L8 6.76923L1.23077 0L5.86876e-07 1.23077L6.76923 8L0 14.7692L1.23077 16L8 9.23077L14.7692 16L16 14.7692L9.23077 8L16 1.23077Z"
                          fill="#2C2F49"/>
                </svg>
            </div>
            <div class="thanks__mob-img">
                <svg width="121" height="120" viewBox="0 0 121 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50.926 27.5051V54.1935H54.797V27.5051C54.797 25.5871 54.2357 23.7309 53.1712 22.138L44.3338 8.87612C44.328 8.86644 44.3183 8.8587 44.3106 8.84902L43.5054 7.64128C43.2964 7.32193 43.1841 6.95612 43.1841 6.57677V5.78128C43.1841 4.72838 44.0415 3.87096 45.0944 3.87096C45.7041 3.87096 46.2828 4.16516 46.6428 4.65677L59.4944 22.3277C60.2202 23.3284 60.6035 24.5071 60.6035 25.7438V49.6857H64.4744V25.7438C64.4744 23.6864 63.8357 21.7161 62.6241 20.0535L49.7725 2.38064C48.6886 0.890322 46.939 0 45.0944 0C42.1448 0 39.7312 2.22774 39.3828 5.08645C39.3673 5.08064 39.3557 5.0729 39.3403 5.06903L25.1609 0.340645C24.4854 0.114193 23.7809 0 23.0667 0H22.7145C19.0603 0 16.0874 2.9729 16.0874 6.62902C16.0874 9.2458 17.6319 11.6226 20.0222 12.6851L32.6048 18.2787C33.6132 18.7239 34.4667 19.4458 35.0764 20.3613L40.2732 28.1555C40.9119 29.1116 41.2486 30.2245 41.2486 31.3761V36.1877L38.777 32.4793C37.337 30.3213 34.9293 29.0322 32.3357 29.0322H13.1841C7.84802 29.0322 3.50674 33.3735 3.50674 38.7096C3.50674 38.7503 3.50674 38.7909 3.50867 38.8316C1.84029 39.2612 0.603516 40.7787 0.603516 42.5806V62.1696C0.603516 63.5593 0.911257 64.9606 1.49384 66.2264L11.268 87.4025C12.0829 89.1657 13.1087 90.8283 14.3183 92.338L15.5474 93.8747C18.3906 97.4302 19.9583 101.895 19.9583 106.451H23.8293C23.8293 101.019 21.9596 95.6921 18.5687 91.4573L17.3396 89.9205C16.3254 88.6528 15.4641 87.2593 14.7829 85.7805L5.00867 64.6044C4.66029 63.8457 4.47448 63.0038 4.47448 62.1696V42.5806C8.74415 42.5806 12.2164 46.0528 12.2164 50.3225V58.0644C12.2164 59.8819 13.0835 61.6199 14.539 62.7077L18.408 65.6109C20.2409 66.9851 22.5074 67.7419 24.797 67.7419C30.6654 67.7419 35.4422 62.9651 35.4422 57.0967V49.3548C35.4422 43.4864 30.6654 38.7096 24.797 38.7096H7.3777C7.3777 35.5083 9.98286 32.9032 13.1841 32.9032H32.3357C33.6325 32.9032 34.8364 33.5477 35.5564 34.6277L40.5964 42.1896C41.0241 42.8303 41.2486 43.5735 41.2486 44.338V54.1935H45.1196V44.338V31.3761C45.1196 29.458 44.5583 27.6019 43.4938 26.009L38.297 18.2148C37.279 16.6877 35.8525 15.4858 34.1744 14.7406L21.5938 9.14709C20.6009 8.7058 19.9583 7.71677 19.9583 6.62902C19.9583 5.10774 21.1951 3.87096 22.7164 3.87096H23.0687C23.3648 3.87096 23.6609 3.91741 23.9396 4.01032L38.117 8.73676C39.3325 9.14128 40.3932 9.95031 41.1054 11.0148L47.3802 20.4271L49.9506 24.2826C50.5893 25.2406 50.926 26.3535 50.926 27.5051ZM24.797 42.5806C28.5325 42.5806 31.5712 45.6193 31.5712 49.3548V57.0967C31.5712 60.8322 28.5325 63.8709 24.797 63.8709C23.3396 63.8709 21.8977 63.389 20.7306 62.5161L16.8596 59.6128C16.3758 59.249 16.0874 58.6703 16.0874 58.0644V50.3225C16.0874 47.3516 14.9648 44.6361 13.1241 42.5806H24.797Z"
                          fill="url(#paint0_linear)"/>
                    <path d="M52.7737 93.8901C51.5485 96.8282 50.9272 99.9365 50.9272 103.122V106.451H54.7982V103.122C54.7982 100.449 55.3208 97.8424 56.3466 95.3785L61.7834 82.3333L58.2105 80.843L52.7737 93.8901Z"
                          fill="url(#paint1_linear)"/>
                    <path d="M58.668 120H16.0874V104.516H58.668V120Z" fill="url(#paint2_linear)"/>
                    <path d="M87.6996 100.645C69.5564 100.645 54.7964 85.8855 54.7964 67.7423C54.7964 49.5991 69.5564 34.8391 87.6996 34.8391C105.843 34.8391 120.603 49.5991 120.603 67.7423C120.603 85.8855 105.843 100.645 87.6996 100.645ZM87.6996 44.5165C74.8925 44.5165 64.4738 54.9352 64.4738 67.7423C64.4738 80.5494 74.8925 90.9681 87.6996 90.9681C100.507 90.9681 110.925 80.5494 110.925 67.7423C110.925 54.9352 100.507 44.5165 87.6996 44.5165Z"
                          fill="url(#paint3_linear)"/>
                    <path d="M99.8804 54.761L79.9585 74.6829L75.5205 70.2448L72.7837 72.9816L79.9585 80.1565L102.617 57.4978L99.8804 54.761Z"
                          fill="url(#paint4_linear)"/>
                    <path d="M87.6994 89.0326C75.9607 89.0326 66.4091 79.481 66.4091 67.7423C66.4091 62.7198 68.1994 57.8424 71.449 54.0043L68.4974 51.5017C64.6555 56.0385 62.5381 61.8062 62.5381 67.7423C62.5381 81.6159 73.8258 92.9036 87.6994 92.9036C93.6355 92.9036 99.4032 90.7862 103.94 86.9443L101.437 83.9926C97.5993 87.2423 92.7219 89.0326 87.6994 89.0326Z"
                          fill="url(#paint5_linear)"/>
                    <path d="M87.6996 42.5809C81.7635 42.5809 75.9958 44.6984 71.459 48.5403L73.9616 51.4919C77.7996 48.2422 82.677 46.4519 87.6996 46.4519C99.4383 46.4519 108.99 56.0035 108.99 67.7422C108.99 72.7648 107.2 77.6422 103.95 81.4802L106.902 83.9828C110.743 79.446 112.861 73.6783 112.861 67.7422C112.861 53.8687 101.573 42.5809 87.6996 42.5809Z"
                          fill="url(#paint6_linear)"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="0.603516" y1="0" x2="94.5313" y2="56.3567"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.0238214" stop-color="#4F5062"/>
                            <stop offset="0.67038" stop-color="#3A3A4A"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear" x1="50.9272" y1="80.843" x2="69.3319" y2="88.6453"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.0238214" stop-color="#4F5062"/>
                            <stop offset="0.67038" stop-color="#3A3A4A"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear" x1="16.0874" y1="120" x2="56.8434" y2="120"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.151042" stop-color="#F39324"/>
                            <stop offset="1" stop-color="#EC663B"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear" x1="54.7964" y1="100.645" x2="117.783" y2="100.645"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.151042" stop-color="#F39324"/>
                            <stop offset="1" stop-color="#EC663B"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear" x1="72.7837" y1="54.761" x2="97.8533" y2="84.2117"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.0238214" stop-color="#4F5062"/>
                            <stop offset="0.67038" stop-color="#3A3A4A"/>
                        </linearGradient>
                        <linearGradient id="paint5_linear" x1="62.5381" y1="51.5017" x2="103.94" y2="92.9036"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.0238214" stop-color="#4F5062"/>
                            <stop offset="0.67038" stop-color="#3A3A4A"/>
                        </linearGradient>
                        <linearGradient id="paint6_linear" x1="71.459" y1="42.5809" x2="112.861" y2="83.9828"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0.0238214" stop-color="#4F5062"/>
                            <stop offset="0.67038" stop-color="#3A3A4A"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="mob-order">
    <div class="mob-order__overlay"></div>
    <div class="mob-order__content">
        <div class="mob-order__content-wp">
            <div class="mobcalc__header">
                <div class="mobcalc__back mob-order__back"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/arrow.svg" alt=""></a></div>
                <div class="mobcalc__logo"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></div>
                <div class="mobcalc__close"></div>
            </div>
            <h4>Отправить расчёт эксперту</h4>
            <p>Эксперт подробно расскажет о деталях перевозки, оформления и оплаты груза. Проверит, можно ли еще
                оптимизировать стоимость и срок доставки, забронирует место под погрузку на нужную дату и расскажет
                о ваших дальнейших шагах.</p>
            <form class="mob-order__form" action="/" method="POST">
                <div class="preview-way__sendphone main-request__input">
                    <input type="text" name="phoneemail" id="userphone1" autocomplete="off">
                    <label for="userphone1">Номер телефона или email</label>
                    <div class="main-request__input-border"></div>
                </div>
                <button class="mobile-menu__btn" type="submit">Отправить</button>
            </form>
            <div class="mob-order__close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1.23077L14.7692 5.86876e-07L8 6.76923L1.23077 0L5.86876e-07 1.23077L6.76923 8L0 14.7692L1.23077 16L8 9.23077L14.7692 16L16 14.7692L9.23077 8L16 1.23077Z"
                          fill="#2C2F49"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="main-modal modal-oops">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="modal-cost__mobileheader"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></a></div>
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-oops__title">Упс...</div>
        <div class="modal-oops__text">
            <?$APPLICATION->IncludeComponent("custom:static.info","",["IBLOCK_ID" => "7","ELEMENT_ID" => "29"]);?>
        </div>
        <?$APPLICATION->IncludeComponent(
            "custom:form.result.new",
            "order",
            array(
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "N",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "EDIT_URL" => "",
                "IGNORE_CUSTOM_TEMPLATE" => "Y",
                "LIST_URL" => "",
                "SEF_MODE" => "N",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "Y",
                "VARIABLE_ALIASES" => [],
                "WEB_FORM_ID" => 3,
            )
        );?>


    </div>
</div>
<div class="main-modal modal-ty">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="modal-cost__mobileheader"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></a></div>
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-ty__title">Ваша заявка получена</div>
        <div class="modal-ty__text">Спасибо за обращение на расчет, ваша заявка принята и мы скоро свяжемся с вами и предложим хорошие варианты.</div>
        <div class="modal-ty__img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/result/ty-img.svg"></div>
    </div>
</div>
<div class="mobcalc step1">
    <div class="mobcalc__overlay"></div>
    <div class="mobcalc__content">
        <div class="mobcalc__content-wp">
            <div class="mobcalc__header">
                <div class="mobcalc__back"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/arrow.svg" alt=""></a></div>
                <div class="mobcalc__logo"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></div>
                <div class="mobcalc__close"><a href="#">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.8331 0.200194C11.1 -0.0667315 11.5328 -0.0667314 11.7997 0.200194C12.0666 0.46712 12.0666 0.899892 11.7997 1.16682L6.96657 5.99993L11.7997 10.8331C12.0667 11.1 12.0667 11.5328 11.7997 11.7997C11.5328 12.0667 11.1 12.0667 10.8331 11.7997L5.99994 6.96655L1.16682 11.7997C0.899892 12.0666 0.46712 12.0666 0.200194 11.7997C-0.0667312 11.5328 -0.0667316 11.1 0.200194 10.8331L5.03332 5.99993L0.200255 1.16687C-0.0666706 0.899941 -0.0666705 0.467169 0.200255 0.200244C0.467181 -0.0666821 0.899953 -0.0666825 1.16688 0.200243L5.99994 5.03331L10.8331 0.200194Z"
                                  fill="#2C2F49"/>
                        </svg>
                    </a></div>
            </div>
            <form class="main-calc mobcalc__form" action="/result/" method="GET" autocomplete="off">
                <div class="mobcalc__step step1 active">
                    <div class="mobcalc__step-num">01</div>
                    <div class="mobcalc__step-title">Выберите регион отправления груза</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__type">
                            <div class="main-calc__type-wp">
                                <label class="main-calc__radio">
                                    <input type="radio" name="part" value="11" checked><span>из Азии</span>
                                </label>
                                <label class="main-calc__radio">
                                    <input type="radio" name="part" value="12"><span>из Европы</span>
                                </label>
                                <div class="main-calc__radio-lighter"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn"><a class="footer__recall-btn mobcalc__btn  mobcalc__btn-js" href="#">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" stroke-width="2"/>
                            </svg>
                            <span>Далее</span></a></div>
                </div>
                <div class="mobcalc__step step2">
                    <div class="mobcalc__step-num">02</div>
                    <div class="mobcalc__step-title">Выберите город отправления</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__row">
                            <div class="main-calc__input cityof main-calc__select">
                                <div class="input-group input-group--bg-sh suggest-group">
                                    <input type="text" name="from" autocomplete="off" placeholder="Например Wenzhou, China" id="cityfor">
                                    <div class="suggest-drop"></div>
                                    <div class="main-request__input-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn"><a class="footer__recall-btn mobcalc__btn mobcalc__btn-js disabled" href="#">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" stroke-width="2"/>
                            </svg>
                            <span>Далее</span></a></div>
                </div>
                <div class="mobcalc__step step3">
                    <div class="mobcalc__step-num">03</div>
                    <div class="mobcalc__step-title">Выберите город получения</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__row">
                            <div class="main-calc__input cityfor main-calc__select">
                                <div class="input-group input-group--bg-sh suggest-group">
                                    <input type="text" name="to" autocomplete="off"
                                           placeholder="Например Москва" id="cityto">
                                    <div class="suggest-drop"></div>
                                    <div class="main-request__input-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn"><a class="footer__recall-btn mobcalc__btn mobcalc__btn-js disabled" href="#">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" stroke-width="2"/>
                            </svg>
                            <span>Далее</span></a></div>
                </div>
                <div class="mobcalc__step step4 hiddens">
                    <div class="mobcalc__step-num">04</div>
                    <div class="mobcalc__step-title">Количество паллет</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__input pallet">
                            <input type="text" inputmode="numeric" class="pallet" name="pallet" placeholder="0">
                            <div class="main-request__input-border"></div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn"><a class="footer__recall-btn mobcalc__btn disabled" href="#">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" stroke-width="2"/>
                            </svg>
                            <span>Далее</span></a></div>
                </div>
                <div class="mobcalc__step step5">
                    <div class="mobcalc__step-num">04</div>
                    <div class="mobcalc__step-title">Укажите вес</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__input weight">
                            <input type="text" inputmode="numeric" class="weight" name="weight" placeholder="0, кг">
                            <div class="main-request__input-border"></div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn"><a class="footer__recall-btn mobcalc__btn mobcalc__btn-js disabled" href="#">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" stroke-width="2"/>
                            </svg>
                            <span>Далее</span></a></div>
                </div>
                <div class="mobcalc__step step6">
                    <div class="mobcalc__step-num">05</div>
                    <div class="mobcalc__step-title">Укажите объём</div>
                    <div class="mobcalc__step-content">
                        <div class="main-calc__input volume">
                            <input type="text" inputmode="numeric" class="volume" name="volume" placeholder="100, м3">
                            <div class="main-request__input-border"></div>
                        </div>
                    </div>
                    <div class="mobcalc__step-btn">

                        <button class="footer__recall-btn mobcalc__btn disabled" type="submit">
                            <svg width="240" height="48" viewBox="0 0 240 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8C1 4.13401 4.13401 1 8 1H238.614L228.574 31.246C225.452 40.6518 216.656 47 206.745 47H8C4.13401 47 1 43.866 1 40V8Z"
                                      stroke="url(#grdient-to-right)" fill="url(#grdient-to-right)"
                                      stroke-width="2"/>
                            </svg>
                            <span>Рассчитать</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="preview-way">
    <div class="preview-way__overlay"></div>
    <div class="preview-way__content">
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
    </div>
</div>
<div class="main-modal modal-cost">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="modal-cost__mobileheader"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></a></div>
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-cost__title">Уведомить о снижении цены</div>
        <div class="modal-cost__text">Выберите интересующую вас стоимость и мы сообщим если цена станет ниже
        </div>
        <form class="modal-cost__form modal-cost__form-js" data-show-price-form action="/">
            <div class="modal-cost__slider">
                <div class="modal-cost__slider-label">+</div>
                <div class="modal-cost__slider-wp">
                    <div class="modal-cost__slider-dots">
                        <span></span><span></span><span></span><span></span><span></span></div>
                    <div class="modal-cost__slider-slider"></div>
                </div>
                <div class="modal-cost__slider-label">-</div>
            </div>
            <div class="modal-cost__inputs">
                <div class="cost-result__input">
                    <label class="cost-result"><i>$</i>
                        <input type="text" name="amount" autocomplete="off" required value="320" class="amount">
                    </label>
                    <div class="main-request__input-border"></div>
                </div>
                <div class="main-request__input">
                    <input type="text" name="mail" autocomplete="off" id="cost-mail" class="mail" required>
                    <label for="cost-mail">Ваш телефон или email</label>
                    <div class="main-request__input-border"></div>
                </div>
                <button class="result-form__btn" type="submit">Отправить</button>
            </div>
        </form>
    </div>
</div>

<div class="main-modal modal-cost-mobile">
    <div class="main-modal__overlay"></div>
    <div class="main-modal__content">
        <div class="modal-cost__mobileheader"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt=""></a></div>
        <div class="project-double"><span></span><span></span></div>
        <div class="main-modal__close"><span></span></div>
        <div class="modal-cost__title">Уведомить о снижении цены</div>
        <div class="modal-cost__text">Выберите интересующую вас стоимость и мы сообщим если цена станет ниже</div>
        <form class="modal-cost__form modal-cost__form-m-js" data-show-price-form action="/">
            <div class="cost-result__input">
                <label class="cost-result"><i>$</i>
                    <input type="text" name="amount" autocomplete="off" required value="320">
                </label>
                <div class="main-request__input-border"></div>
            </div>
            <div class="modal-cost__slider">
                <div class="modal-cost__slider-label">+</div>
                <div class="modal-cost__slider-wp">
                    <div class="modal-cost__slider-dots"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="modal-cost__slider-slider"></div>
                </div>
                <div class="modal-cost__slider-label">-</div>
            </div>
            <div class="modal-cost__inputs">
                <div class="main-request__input">
                    <input type="text" name="mail" id="cost-mail-m" autocomplete="off" required>
                    <label for="cost-mail-m">Ваш телефон или email</label>
                    <div class="main-request__input-border"></div>
                </div>
                <button class="result-form__btn" type="submit">Отправить</button>
            </div>
        </form>
    </div>
</div>
