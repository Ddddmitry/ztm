<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
if (strlen($_POST['web_form_submit']) && $_POST['web_form_submit'] == "Y" && $_POST["web_form_type"] == "delivery-form") {
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

<?$arResult["FORM_HEADER"] = str_replace('DELIVERY"','DELIVERY"  class="modal-oops__form delivery-form" autocomplete="off" ',$arResult["FORM_HEADER"]);?>



<?=$arResult["FORM_HEADER"]?>

<?
foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
    if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
        echo $arQuestion["HTML_CODE"];
    }
}
?>
    <input type="hidden" name="form_radio_FROM" id="m2from" value="">
    <input type="hidden" name="form_text_13" id="m2cityfrom" value="">
    <input type="hidden" name="form_text_14" id="m2cityto" value="">
    <input type="hidden" name="form_text_15" id="m2weight" value="">
    <input type="hidden" name="form_text_16" id="m2volume" value="">
    <input type="hidden" name="form_text_17" id="m2pallet" value="">
    <div class="main-request__input">
        <input type="text" name="form_text_18" id="oops-name">
        <label for="oops-name">Ваше имя</label>
        <div class="main-request__input-border"></div>
    </div>
    <div class="main-request__input">
        <input type="tel" name="form_text_19" id="oops-tel">
        <label for="oops-tel">Ваш телефон</label>
        <div class="main-request__input-border"></div>
    </div>
    <input type="hidden" name="web_form_submit" value="Y" />
    <input type="hidden" name="web_form_type" value="delivery-form" />
    <button class="modal-oops__send result-form__btn" type="submit">Отправить</button>


<?=$arResult["FORM_FOOTER"]?>

<script>
	$(document).on('submit', 'form.delivery-form', function(){
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
            }
            else {
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
                closeModal("modal-oops");
                openModal("thanks");
                $form.find("input").not(':input[type=button], :input[type=submit], :input[type=hidden]').val('');
                $form.find("textarea").val('');

            }
	    }, 'json');
	    return false;
	});
</script>