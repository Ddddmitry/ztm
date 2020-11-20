<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

Loader::includeModule("highloadblock");
$arCities = [
["eu","Милан","Milan"],
["eu","Вильнюс","Vilnius"],
["eu","Прато","Prato"],
["cn","Шанхай","Shanghai, China"],
["cn","Пекин","Pekin |Beijing|Beijing(Peking), China"],
["cn","Циндао","Qingdao, China"],
["cn","Гуанджоу | Гуанчжоу |Гуанжоу","Guangzhou, China"],
["cn","Фошан","Foshan, China"],
["cn","Фуджоу | Фужоу","Fuzhou, China"],
["cn","Нинбо |Нингбо","Ningbo, China"],
["cn","Шэньчжэнь |Шеньжень","Shenzhen, China"],
["cn","Гонк-Конг|Гонконг","Hong-Kong, China"],
["cn","Чанша","Changsha, China"],
["cn","Хэфэй","Hefei, China"],
["cn","Сямынь","Xiamen, China"],
["cn","Далянь","Dalian, China"],
["cn","Ксинганг","Xingang, China"],
["cn","Чанчжоу","Changzhou, China"],
["cn","Чэнду","Chengdu, China"],
["cn","Дунгуань","Dongguan, China"],
["cn","Хучжоу","Huzhou, China"],
["cn","Нанкин","Nanjing, China"],
["cn","Наньтун","Nantong, China"],
["cn","Шаньтоу","Shantou, China"],
["cn","Сучжоу","Suzhou, China"],
["cn","Тяньцзинь","Tianjin, China"],
["cn","Вэньчжоу","Wenzhou, China"],
["cn","Уси","Wuxi, China"],
["cn","Иу","Yiwu, China"],
["cn","Чжуншань","Zhongshan, China"],
["cn","Пусан","Busan, Korea"],
["cn","Цзилун","Keelung, Taiwan"],
["cn","Хошимин","HoChiMinh, Vietnam"],
["cn","Иокогама","Yokohama, Japan"],
["cn","Токио","Tokyo, Japan"],
["cn","Осака","Osaka, Japan"],
["cn","Кобе","Кobe, Japan"],
["cn","Нагоя","Nagoya, Japan"],
["cn","Тояма","Toyama, Japan"],
["cn","Симидзу","Shimizu, Japan"],
["cn","Сингапур","Singapore, Singapore"],
["cn","Манила","Manila, Philippine"],
["cn","Джакарта","Jakarta, Indonesia"],
["cn","Мумбаи","Mumbai, India"],
["cn","Нава-Шева","Nhava Sheva, India"],
["cn","Ченнаи","Chennai, India"],
["cn","Карачи","Karachi, Pakistan"],
["cn","Бангкок","Bangkok, Thailand"],
["cn","Тайчжоу","Taizhou, China"]
];
$arCities = [
    "Москва",
    "Архангельск",
    "Астрахань",
    "Белгород",
    "Брянск",
    "Великие Луки",
    "Великий Новгород",
    "Владимир",
    "Волгоград",
    "Вологда",
    "Воронеж",
    "Екатеринбург",
    "Иваново",
    "Ижевск",
    "Казань",
    "Калуга",
    "Киров",
    "Клин",
    "Ковров",
    "Коломна",
    "Кострома",
    "Красногорск",
    "Краснодар",
    "Красноярск",
    "Кузнецк",
    "Курган",
    "Курск",
    "Липецк",
    "Магнитогорск",
    "Набережные Челны",
    "Нижнекамск",
    "Нижний Новгород",
    "Новосибирск",
    "Одинцово",
    "Омск",
    "Орел",
    "Оренбург",
    "Орск",
    "Пенза",
    "Пермь",
    "Петрозаводск",
    "Псков",
    "Ростов-на-Дону",
    "Рязань",
    "Самара",
    "Санкт-Петербург",
    "Саранск",
    "Саратов",
    "Смоленск",
    "Сочи",
    "Ставрополь",
    "Старый Оскол",
    "Сыктывкар",
    "Тамбов",
    "Тверь",
    "Тольятти",
    "Тула",
    "Тюмень",
    "Ульяновск",
    "Уфа",
    "Чебоксары",
    "Ярославль"
];



$hlbl = 1; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

foreach ($arCities as $arData) {
// Массив полей для добавления
    $data = array(
        "UF_CITY"=>$arData,
        "UF_CITY_RU"=>$arData
    );

    //$result = $entity_data_class::add($data);

}
