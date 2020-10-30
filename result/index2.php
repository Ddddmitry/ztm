<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты подбора");
?>
<?php
use Helpers;
echo \Helpers\DataHelper::getWordForm("days","4");

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>