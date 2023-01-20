<?php
echo'
<!DOCTYPE html>
<html>
<head>
    <title>Площадки.ru</title>
    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <script src="object_manager.js" type="text/javascript"></script>
	<style>
         #map {
            width: 96%; height: 98%; padding: 0; margin: 0;position:absolute; left: 2%; ;
        }
        a {
            color: #04b; /* Цвет ссылки */
            text-decoration: none; /* Убираем подчеркивание у ссылок */
        }
        a:visited {
            color: #04b; /* Цвет посещённой ссылки */
        }
        a:hover {
            color: #f50000; /* Цвет ссылки при наведении на нее курсора мыши */
        }
    </style>
</head>
<body>
<div class = "div_history" style="position: absolute; left: 8%; top:210%; width: 80%; height: 80%;">
<div id="map"></div>
</div>
</body>
</html>';
?>