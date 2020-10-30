<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Application;
use Bitrix\Main\Loader;
Loader::includeModule("iblock");
Loader::includeModule("form");
// ID веб-формы
$FORM_ID = 4;
$request = Application::getInstance()->getContext()->getRequest();
$responce = Application::getInstance()->getContext()->getResponse();
$arData = $request->getPostList()->toArray();
$arFile = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"] . "/pdf/".$arData["filename"]);

// массив значений ответов
$arValues = array(
    "form_text_20" => $arData["phoneemail"],
    "form_file_21" => $arFile
);

// создадим новый результат
if ($RESULT_ID = CFormResult::Add($FORM_ID, $arValues)) {
    echo "ok";
} else {
    global $strError;
    echo $strError;
}
