<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
if (strlen($_POST['web_form_submit']) && $_POST['web_form_submit'] == "Y" && $_POST["web_form_type"] == "writeus-form") {
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

<?$arResult["FORM_HEADER"] = str_replace('WRITE_US"','WRITE_US"  class="main-request__form writeus-form" autocomplete="off" ',$arResult["FORM_HEADER"]);?>


<?=$arResult["FORM_HEADER"]?>

<?
foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
    if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
        echo $arQuestion["HTML_CODE"];
    }
}
?>
    <div class="main-request__input">
        <input type="text" name="form_text_6" id="request-name">
        <label for="request-name">Ваше имя</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input">
        <input type="text" name="form_text_7" id="request-telem">
        <label for="request-telem">Телефон или email</label>
        <div class="main-request__input-border"></div>
        <div class="error-text"></div>
    </div>
    <div class="main-request__input full-width">
        <textarea type="text" name="form_textarea_10" id="request-add"></textarea>
        <label for="request-add">Ваше сообщение</label>
        <div class="main-request__input-border"></div>
    </div>
    <div class="main-request__btn">
        <input type="hidden" name="web_form_submit" value="Y" />
        <input type="hidden" name="web_form_type" value="writeus-form" />
        <button type="submit">Отправить</button>
    </div>



<?=$arResult["FORM_FOOTER"]?>

<script>
	$(document).on('submit', 'form.writeus-form', function(){
	    var $form = $(this);
	    $.post($form.attr('action'), $form.serialize(), function(data){
	        console.log("gggggggg");
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