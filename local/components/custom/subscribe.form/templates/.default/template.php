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
?>
<div class="footer__recall"  id="subscribe-form">
<?
$frame = $this->createFrame("subscribe-form", false)->begin();
?>
	<form action="<?=$arParams["FORM_ACTION"]?>" name="SUBSCRIBE_<?=$arParams["RUB_ID"]?>">
        <input type="hidden" name="RUB_ID" value="<?=$arParams["RUB_ID"]?>">
        <?=bitrix_sessid_post();?>
        <div class="main-request__input">
            <input type="email" name="sf_EMAIL" id="footer-recall">
            <label for="footer-recall">Ваш email</label>
            <div class="main-request__input-border"></div>
            <div class="error-text"></div>
        </div>
        <button class="footer__recall-btn" type="submit" id="SUBSCRIBE_<?=$arParams["RUB_ID"]?>">
            <svg width="360" height="64" viewBox="0 0 360 64" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8C1 4.13401 4.13401 1 8 1H358.719L350.604 33.4589C346.264 50.8204 330.665 63 312.769 63H8C4.13401 63 1 59.866 1 56V8Z"
                      stroke="url(#grdient-to-right)" stroke-width="2"/>
            </svg>
            <svg width="246" height="52" viewBox="0 0 246 52" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M243.949 2.31623L244.387 1H243H10C5.02944 1 1 5.02944 1 10V42C1 46.9706 5.02943 51 10 51H209.702C220.463 51 230.016 44.1142 233.419 33.9057L243.949 2.31623Z"
                      stroke="url(#grdient-to-right)" stroke-width="2"/>
            </svg>
            <span>Подписаться на новости</span>
        </button>


	</form>
<?
$frame->beginStub();
?>
	<form action="<?=$arParams["FORM_ACTION"]?>" name="SUBSCRIBE_<?=$arParams["RUB_ID"]?>">
        <input type="hidden" name="RUB_ID" value="<?=$arParams["RUB_ID"]?>">
        <?=bitrix_sessid_post();?>
        <div class="main-request__input">
            <input type="email" name="sf_EMAIL" id="footer-recall">
            <label for="footer-recall">Ваш email</label>
            <div class="main-request__input-border"></div>
            <div class="error-text"></div>
        </div>
        <button class="footer__recall-btn" type="submit" id="SUBSCRIBE_<?=$arParams["RUB_ID"]?>">
            <svg width="360" height="64" viewBox="0 0 360 64" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M1 8C1 4.13401 4.13401 1 8 1H358.719L350.604 33.4589C346.264 50.8204 330.665 63 312.769 63H8C4.13401 63 1 59.866 1 56V8Z"
                      stroke="url(#grdient-to-right)" stroke-width="2"/>
            </svg>
            <svg width="246" height="52" viewBox="0 0 246 52" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M243.949 2.31623L244.387 1H243H10C5.02944 1 1 5.02944 1 10V42C1 46.9706 5.02943 51 10 51H209.702C220.463 51 230.016 44.1142 233.419 33.9057L243.949 2.31623Z"
                      stroke="url(#grdient-to-right)" stroke-width="2"/>
            </svg>
            <span>Подписаться на новости</span>
        </button>

	</form>
<?
$frame->end();
?>
    <script>
        $(document).on("click", "#SUBSCRIBE_1", function() {
            let form = $("form[name='SUBSCRIBE_1']");

            $.post(form.attr('action'), form.serialize(), function(data) {
                $('input', form).removeAttr('disabled');
                if (data.type == 'N') {
                    $("#form_subscribe_hide").html(data.message);
                    form.find('.main-request__input').each(function () {
                        let $nThis = $(this),
                            $input = $nThis.find('input');

                        if($input.length){
                            if($input.val().trim().length === 0) {
                                $nThis.addClass('error-input')
                                    .find('.error-text').text('Для продолжения вам необходимо заполнить это поле');
                            }else{
                                $nThis.removeClass('error-input');
                                $nThis.find('.error-text').text('');
                            }
                        }
                    });

                } else if (data.type = "Y") {
                    form.find('.main-request__input').each(function () {
                        let $nThis = $(this),
                            $input = $nThis.find('input');

                        if($input.length){
                            if($input.val().trim().length === 0) {
                                $nThis.addClass('error-input')
                                    .find('.error-text').text('Для продолжения вам необходимо заполнить это поле');
                            }else{
                                $nThis.addClass('error-input');
                                $nThis.find('.error-text').addClass('success').text('Вы успешно подисаны на рассылку');
                            }
                        }
                    });
                }
            }, 'json');
            return false;
        });
    </script>
    <style>
        .main-request__input .error-text.success{
            background: #159e12;
        }
        .main-request__input .error-text.success:after{
            background: #159e12;
        }
    </style>
</div>


