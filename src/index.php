<?php

include "framework/framework.php";

$a = new \PDO("mysql:dname=default;host=sw-mysql", "default", "123");

$navbarItems = [
    "item1" => "Шкафы купе",
    "item2" => "Тороговая мебель",
    "item3" => "Кухни",
    "item4" => "Контакты",
];
$kitchenTypeItems = ["Линейные","Угловые","Островные"];

$kitchenTypeText = [
    "Такой вид кухни подойдёт в случае, если вам необходимо сэкономить место в помещении",
    "Угловая кухня позволит увеличить количество отсеков для посуды",
    "Остров сочетает в себе систему хранения  принадлежностей и обеденную зон"
];

$kitchenStyleItems = ["Хайтек","Классика","Неоклассика"];

$kitchenStyleText = [
    "Данный стиль кухни придаст вашей квартире современный вид",
    "Классический стиль подойдёт ценителям непревзойдённой мебели прошлых эпох",
    "Исполнение в стиле неоклассики — смешение античной и современной архитектуры"
];

$descriptionItems = [
    "Наша компания изготавливает кухни по индивидуальному проекту, что позволит самостоятельно выбрать стиль и цвет каждого изделия.",
    "У нас вы найдете более 1000 цветов фартуков с фотопечатью и более 100 вариантов дверных ручек, разновидностей фурнитуры, цветов столешниц, фасадов и стеновых изделий"
];

$deliveryItems = [
    "Мы организуем транспортировку вашего заказа, и, при необходимости, наши сотрудники смогут сразу же произвести сборку и установку оборудования.",
    "Вы можете быть уверены в том, что все изделия будут перевезены в точном соответствии с установленными правилами перевозки."
];

$productionItems = [
    "Компания “МЕБЕЛЬ” создана в апреле 2011 года инженером-технологом Дмитрием Николаевичем Важинским, имеет собственное производство и профессиональное оборудование.",
    "Вы можете посетить нас (Тюмень, ул.Калинина, 22/1) в любое удобное для вас время, предварительно записавшись к директору компании через сайт, либо по телефону +7 345 00-00-00."
];

$footerMenuItems = ["Шкафы купе","Кухни","Торговое оборудование", "О компании", "Контакты"];

$footerContactItems = ["info@mebel.ru", "г.Тюмень, ул. Калинина, 22/1", "+7 (3452) 00-00-00"];

$footerBottomItems = ["2024 “Мебель.ру” Все права защищены.", "Политика конфиденциальности", "Разработка сайта интернет компания “SunWeb”"];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мебель</title>
</head>
<body>
    <?php $APPLICATION->includeComponent("header", ".default", [ "logo" => "МЕБЕЛЬ",
    "desk" => "Центр мебельных технологий",
    "navbar" => $navbarItems,
    "number" => "+7 3452 00-00-00",
    "header_button" => "Оставить заявку",
    ]);?>

    <?php $APPLICATION->includeComponent("main", ".default", ["main_title" => "ЗАКАЗЫВАЙТЕ КУХНЮ ОТ ПРОИЗВОДИТЕЛЯ",
    "main_info" => "Высокое качество, профессиональный подход и креативные решения",
    "main_place" => "Работаем по Тюмени и Тюменской области",
    "main_button" => "Оставить заявку",
    ]);?>

    <?php $APPLICATION->includeComponent("kitchen", ".default", ["kitchen_type" => "Виды кухонь",
    "title_type" => $kitchenTypeItems,
    "text_type" => $kitchenTypeText,
    "kitchen_style" => "Стили кухонь",
    "title_style" => $kitchenStyleItems,
    "text_style" => $kitchenStyleText,
    ]);?>

    <?php $APPLICATION->includeComponent("application", ".default", ["application_title" => "Оставьте заявку",
    "application_text" => "Наши специалисты свяжутся с вами в течение одного часа",
    "application_button" => "Отправить",
    ]);?>

    <?php $APPLICATION->includeComponent("kitchen", ".default", ["kitchen_type" => "Виды кухонь",
    "title_type" => $kitchenTypeItems,
    "text_type" => $kitchenTypeText,
    "kitchen_style" => "Стили кухонь",
    "title_style" => $kitchenStyleItems,
    "text_style" => $kitchenStyleText,
    ]);?>

    <?php $APPLICATION->includeComponent("description", ".default", ["description_title" => "О кухнях",
    "description_subtitle" => $descriptionItems,
    "description_button" => "Заказать",
    "delivery_title" => "Доставка",
    "delivery_subtitle" => $deliveryItems,
    "description_button" => "Заказать",
    "production_title" => "У нас своё производство",
    "production_subtitle" => $productionItems,
    "description_button" => "ЗАПИСАТЬСЯ",
    ]);?>
    
    <?php $APPLICATION->includeComponent("offers", ".default", [/*"delivery_title" => "Доставка",
    "delivery_subtitle" => $kitchenDeliveryItems,*/
    ]);?>

    <?php $APPLICATION->includeComponent("footer", ".default", ["foot_title" => "МЕБЕЛЬ",
    "foot_subtitle" => "Центр мебельных технологий",
    "foot_button" => "Авторизоваться",
    "menu_name" => "Меню",
    "contact_name" => "Контакты",
    "menu" => $footerMenuItems,
    "contact" => $footerContactItems,
    "bottom" => $footerBottomItems,
    ]);?>
</body>
</html>
