<section class="main-request">
    <div class="container">
        <div class="main-request__title">Заявка на расчёт</div>
        <div class="main-request__subtitle">Требуется доставить сборный груз или контейнер в Россию? <br/>
            Вышлите нам информацию по грузу и мы предложим Вам лучшие условия по доставке!
        </div>
        <?$APPLICATION->IncludeComponent(
            "custom:form.result.new",
            "raschet",
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
                "WEB_FORM_ID" => 1,
            )
        );?>
    </div>
</section>