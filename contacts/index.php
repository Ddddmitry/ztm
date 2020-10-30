<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <section class="contacts">
        <div class="container">
            <div class="contacts__wp">
                <div class="contacts__msk">
                    <div class="contacts__map">
                        <div id="contactmap" data-xkor="55.756822" data-ykor="37.621759"></div>
                    </div>
                    <div class="contacts__all">
                        <div class="contacts__item">
                            <div class="contacts__item-ico"><svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 24C9 24 18 15.75 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 15.75 9 24 9 24ZM9 12C10.6569 12 12 10.6569 12 9C12 7.34315 10.6569 6 9 6C7.34315 6 6 7.34315 6 9C6 10.6569 7.34315 12 9 12Z" fill="#2C2F49"/>
                                </svg>
                            </div><span>
                                <?$APPLICATION->IncludeFile(SITE_DIR."include/address.php");?>
                            </span>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__item-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 18.6171 5.38286 24 12 24C18.6171 24 24 18.6171 24 12C24 5.38286 18.6171 0 12 0C5.38286 0 0 5.38286 0 12ZM11.9987 12.9991H15.5203C16.0738 12.9991 16.5195 12.5534 16.5195 11.9999C16.5195 11.4465 16.0738 11.0007 15.5203 11.0007H12.9979V5.52482C12.9979 4.97135 12.5522 4.52563 11.9987 4.52563C11.4452 4.52563 10.9995 4.97135 10.9995 5.52482V11.9999C10.9995 12.5534 11.4452 12.9991 11.9987 12.9991Z" fill="#2C2F49"/>
                                </svg>
                            </div><span>
                                <?$APPLICATION->IncludeFile(SITE_DIR."include/schedule.php");?>
                            </span>
                        </div>
                        <div class="contacts__mess"><a class="contacts__item" href="tel:<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?>">
                                <div class="contacts__item-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.0742 15.7533C20.6049 15.7533 19.1621 15.5234 17.7949 15.0716C17.125 14.8431 16.3014 15.0528 15.8926 15.4727L13.194 17.5098C10.0644 15.8393 8.13669 13.9121 6.48894 10.8061L8.46612 8.17781C8.97981 7.66481 9.16406 6.91544 8.94331 6.21231C8.48956 4.83794 8.25906 3.39587 8.25906 1.92587C8.25913 0.863937 7.39519 0 6.33331 0H1.92581C0.863937 0 0 0.863937 0 1.92581C0 14.0977 9.90237 24 22.0742 24C23.1361 24 24.0001 23.1361 24.0001 22.0742V17.679C24 16.6172 23.1361 15.7533 22.0742 15.7533Z" fill="#2C2F49"/>
                                    </svg>
                                </div><span><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php");?></span></a>
                            <a class="contacts__item" href="mailto:<?$APPLICATION->IncludeFile(SITE_DIR."include/email.php");?>">
                                <div class="contacts__item-ico"><svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6942 11.8725C12.4675 12.0142 12.2125 12.0709 11.9858 12.0709C11.7591 12.0709 11.5041 12.0142 11.2774 11.8725L0 4.98706V14.1394C0 16.0945 1.58678 17.6813 3.54191 17.6813H20.4581C22.4132 17.6813 24 16.0945 24 14.1394V4.98706L12.6942 11.8725Z" fill="#2C2F49"/>
                                        <path d="M20.4561 0H3.5399C1.86812 0 0.451352 1.19008 0.111328 2.77686L12.0122 10.0307L23.8846 2.77686C23.5446 1.19008 22.1279 0 20.4561 0Z" fill="#2C2F49"/>
                                    </svg>
                                </div><span><?$APPLICATION->IncludeFile(SITE_DIR."include/email.php");?></span>
                            </a>
                            <a class="contacts__item" href="https://wa.me/74951207996">
                                <div class="contacts__item-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z" fill="#2C2F49"/>
                                    </svg>
                                </div><span>WhatsApp</span></a><a class="contacts__item" href="https://t.me/Alexsey_ztm">
                                <div class="contacts__item-ico"><svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3006 15.8176L10.8242 22.5184C11.5058 22.5184 11.801 22.2256 12.155 21.874L15.3505 18.82L21.9721 23.6692C23.1865 24.346 24.0421 23.9896 24.3697 22.552L28.7161 2.18568L28.7173 2.18448C29.1025 0.389285 28.0681 -0.312712 26.8849 0.127686L1.33701 9.90884C-0.406584 10.5856 -0.380185 11.5576 1.04061 11.998L7.57217 14.0296L22.7437 4.53646C23.4577 4.06367 24.1069 4.32526 23.5729 4.79806L11.3006 15.8176Z" fill="#2C2F49"/>
                                    </svg>
                                </div><span>Telegram</span></a></div>
                    </div>
                </div>
                <div class="contacts__other">
                    <div class="contacts__other-left">
                        <?$APPLICATION->IncludeComponent("custom:static.info","",["IBLOCK_ID" => "7","ELEMENT_ID" => "31"]);?>
                    </div>
                    <div class="contacts__other-right">
                        <div class="contacts__other-title">Реквизиты компании</div>
                        <div class="contacts__other-rek">
                            <?$APPLICATION->IncludeComponent("custom:static.info","",["IBLOCK_ID" => "7","ELEMENT_ID" => "32"]);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-request">
            <div class="container">
                <div class="main-request__title">Напишите нам</div>
                <div class="main-request__subtitle">Мы ответим на все интересующие вас вопросы. </div>
                <?$APPLICATION->IncludeComponent(
                    "custom:form.result.new",
                    "writeus",
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
                        "WEB_FORM_ID" => 2,
                    )
                );?>

            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>