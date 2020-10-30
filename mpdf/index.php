<?
// подключение служебной части пролога для работы API Битрикса
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
include($_SERVER["DOCUMENT_ROOT"]."/mpdf/mpdf.php");

$html = '
<table
        style="width: 100%; max-width: 1240px; margin: 0 auto; padding-top: 50px; padding-left: 130px; padding-right: 130px; padding-bottom: 130px; box-sizing: border-box; font-family: sans-serif;">
    <tbody>
    <tr>
    <td>
        <table style="width: 100%; margin: 0 auto;">
                <tbody>
                <tr>
                    <td style="padding-top: 48px;">
                        <img src="logoztm.png" alt="">
                    </td>
                </tr>
                </tbody>
            </table>
        <table style="width: 100%; margin-top: 200px;">
                <thead>
                <tr>
                    <td style="border-bottom: 4px solid #2c2f49; padding-bottom: 42px;">
                        <h1 style="font-size: 66px; margin: 0px; letter-spacing: -1.5px; color: #2c2f49;">Из
                            Шанхая в Москву
                        </h1>
                        <p style="font-size: 50px; margin: 0px; margin-top: 8px; color: #878894;">34 дня в
                            пути</p>
                    </td>
                </tr>
                </thead>
            </table>
        <table style="width: 100%; padding-bottom: 10px; margin-top: 69px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Вес</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 37px; line-height: 37px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">500
                                        кг</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 18px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                        <p style="margin: 0px; font-size: 25px; line-height: 25px; color: #878894;">Вес
                            груза уточняется при
                            взвешивается
                            на
                            складе ZTM в пункте отгрузки</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 22px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Объём</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">12
                                        м<span>3</span></span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 26px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Доставка</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">$
                                        120</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 26px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Оформление
                                        экспорных документов</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">$
                                        80</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 25px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Страхование</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">$
                                        60</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; padding-bottom: 20px; margin-top: 25px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Таможенное
                                        оформление</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">$
                                        40</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table
                    style="width: 100%; padding-bottom: 20px; margin-top: 25px; border-bottom: 4px solid #2c2f49; padding-bottom: 70px;">
                <tbody style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="padding-top: 0px; padding-bottom: 0px;">
                                    <span
                                            style="display: block; white-space: nowrap; font-size: 34px; line-height: 34px; padding-right: 20px; color: #2c2f49;">Доставка
                                        за
                                        МКАД</span>
                    </td>
                    
                    <td style="padding-top: 0px; padding-bottom: 0px; text-align: right;">
                                    <span style="display: block; white-space: nowrap; font-size: 32px; line-height: 32px; text-align: right;
                                        min-width: 100px; color: #2c2f49;">$
                                        20</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="width: 100%; margin-top: 30px;">
                <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <p style="margin: 0px; font-size: 50px; padding-top: 34px; color: #2c2f49;">Итого:
                        </p>
                    </td>
                    <td style="vertical-align: top; text-align: right;">
                        <h3 style="text-align: right; margin: 0px; font-size: 86px; color: #2c2f49;"><span
                                style="font-size: 50px;">$
                                        </span>320</h3>
                        <p
                                style="text-align: right; margin: 0px; font-size: 25px; margin-top: 18px; color: #878894;">
                            Цена
                            действует: <b style="color: #2c2f49;">до
                            28 августа</b></p>
                        <p
                                style="text-align: right; margin: 0px; font-size: 25px; margin-top: 17px; color: #878894;">
                            Налоговые сборы
                            включены в стоимость</p>
                    </td>
                </tr>
                </tbody>
            </table>

</td>
</tr>
    </tbody>
</table>
';

//настройки для работы с кириллическими символами
$mpdf = new mPDF('utf-8', 'A4', '10', 'Arial');
$mpdf->charset_in = 'utf-8';

//генерируем PDF

$mpdf->WriteHTML($html);
$mpdf->Output();

// подключение служебной части эпилога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
exit;
?>