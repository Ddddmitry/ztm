
document.addEventListener("DOMContentLoaded", function(event) {

});
$(document).ready(function () {
    let $body = $("body");
    $body.on("submit","[data-show-price-form]",function (e) {
        e.preventDefault();
        let $form = $(this),
            $amout = $form.find(".amount").val(),
            $mail = $form.find(".mail").val();

        $.post("/pdf/makePdf.php", $form.serialize(), function(data){
            $fileName = data;
            $.post("/ajax/priceLessForm.php", {"mail":$mail,"price": $amout, "filename":$fileName}, function(data2){
                if(data2 == "ok"){
                    $('.modal-ty').addClass('active');
                }
            });
        });
    });
});