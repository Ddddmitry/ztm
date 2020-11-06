<?php
namespace Helpers;

class DataHelper
{
    public static function getFormattedDate($date) {
        $arMonth = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];
        $obDateTime = new \DateTime($date);
        $formattedDate = (int)$obDateTime->format("d") . " " . $arMonth[(int)$obDateTime->format("m") - 1] . strtolower($obDateTime->format(" Y"));

        return $formattedDate;
    }

    public static function getFormattedDateSingle($timestamp,$format = "d m Y") {
        $obDateTime = new \DateTime($timestamp);
        return $obDateTime->format($format);
    }

    public static function getMonth($number) {
        $arMonths = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];

        return $arMonths[$number];
    }

    public static function getWordForm($type, $number) {
        $wordForm = "";
        $lastDigit = substr($number, -1);
        if ($number > 10) $prevDigit = substr($number, -2, 1);
        switch ($type) {

            case "time":

                switch ($lastDigit) {
                    case "1":
                        $wordForm = "минута";
                        break;
                    case "2":
                    case "3":
                    case "4":
                        $wordForm = "минуты";
                        break;
                    default:
                        $wordForm = "минут";
                        break;
                }
                break;
            case "days":
                if ($prevDigit == 1) return "дней";
                switch ($lastDigit) {
                    case "1":
                        $wordForm = "день";
                        break;
                    case "2":
                    case "3":
                    case "4":
                        $wordForm = "дня";
                        break;
                    default:
                        $wordForm = "дней";
                        break;
                }
                break;
            case "days_from":
                if ($prevDigit == 1) return "дней";
                switch ($lastDigit) {
                    case "1":
                        $wordForm = "дня";
                        break;
                    case "2":
                    case "3":
                    case "4":
                        $wordForm = "дней";
                        break;
                    default:
                        $wordForm = "дней";
                        break;
                }
                break;

        }

        return $wordForm;
    }

    public static function getFormatPrice($inputPrice){
        $arTmp = explode(",",$inputPrice);
        $price = $arTmp[0];
        if(strpos($price,"$") !== false){ //В долларах
            $pTmp = str_replace("$","",$price);
            $arReturn["FORMATTED_PRICE"] = "<sub>$</sub> ".$pTmp;
            $arReturn["CLEAR_PRICE"] = preg_replace( "/[^0-9]/", '', $pTmp );
            $arReturn["SEPARATED_PRICE"] = $pTmp;
        }else{ // В евро
            $pTmp = str_replace("€","",$price);
            $arReturn["FORMATTED_PRICE"] = "<sub>€</sub> ".$pTmp;
            $arReturn["CLEAR_PRICE"] = preg_replace( "/[^0-9]/", '', $pTmp );
            $arReturn["SEPARATED_PRICE"] = $pTmp;
        }
        return $arReturn;
    }
}
