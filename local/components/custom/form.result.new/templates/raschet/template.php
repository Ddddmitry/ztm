<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
if (strlen($_POST['web_form_submit']) && $_POST['web_form_submit'] == "Y" && $_POST["web_form_type"] == "raschet-form") {
	$APPLICATION->RestartBuffer();
	if (!defined('PUBLIC_AJAX_MODE')) {
		define('PUBLIC_AJAX_MODE', true);
	}
	header('Content-type: application/json');
	if ($arResult['FORM_ERRORS_TEXT']) {
		echo json_encode([
			'type' => 'error',
			'message' => $arResult['FORM_ERRORS_TEXT'],
		]);
	} else {
		echo json_encode([
			'type' => 'ok',
			'message' => 'Ваше заявка успешно принята!'
		]);
	}
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php');
	die();
}
?>

<?$arResult["FORM_HEADER"] = str_replace('RASCHET"','RASCHET"  class="main-request__form raschet-form" autocomplete="off" ',$arResult["FORM_HEADER"]);?>


<?=$arResult["FORM_HEADER"]?>

<?
foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
    if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
        echo $arQuestion["HTML_CODE"];
    }
}
?>
    <div class="main-request__input">
        <input type="text" name="form_text_1" id="request-name">
        <label for="request-name">Ваше имя</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input">
        <input type="text" name="form_text_2" id="request-telem">
        <label for="request-telem">Номер телефона или email</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input">
        <input type="text" name="form_text_3" id="request-from">
        <label for="request-from">Город отправления</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input">
        <input type="text" name="form_text_4" id="request-to">
        <label for="request-to">Город получения</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input full-width">
        <textarea name="form_textarea_5" id="request-add"></textarea>
        <label for="request-add">Дополнительная информация о грузе</label>
        <div class="main-request__input-border"></div>
    </div>
    <div class="main-request__btn">
        <input type="hidden" name="web_form_submit" value="Y" />
        <input type="hidden" name="web_form_type" value="raschet-form" />
        <button type="submit">Отправить заявку на расчёт</button>
    </div>
<?=$arResult["FORM_FOOTER"]?>

<script>
	$(document).on('submit', 'form.raschet-form', function(){
	    var $form = $(this);
	    $.post($form.attr('action'), $form.serialize(), function(data){
	        $('input', $form).removeAttr('disabled');

	        if (data.type == 'error') {

                $form.find('.main-request__input').each(function () {
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
	        } else {
                $form.find('.main-request__input').each(function () {
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

                openModal("thanks");
                $form.find("input").not(':input[type=button], :input[type=submit], :input[type=hidden]').val('');
                $form.find("textarea").val('');

            }
	    }, 'json');
	    return false;
	});
</script>