<?php
 include "db.php";   
 $id = $_GET['id'];
echo'
< <!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Площадки.ru</title>
<link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
<link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
<link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">

<style>
body {
    height: 1000px;
    background: linear-gradient(to right, #90dbf4, #cfbaf0, #fde4cf);
}
th, td {
    padding: 10px;
}

th {
    background: #606060;
    color: #fff;
}

td {
    background: #b5b5b5;
}
</style>

<header>
<div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
<h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
<form method=POST class = "head_title" action = "http://kursovoy:3006/main.php?id='.$id.'">
    <button formmethod=POST name=1 value=1 class = "button_main" style= "position: fixed; left: 5%;top:12%;">Назад</button>
    </form><br>
    <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
</header>

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
<div class = "div_history" style="position: absolute; left: 8%; top:30%; width: 80%; height: 80%;">
<div id="map"></div>
</div>
</body>

<footer>
            <div class = "top_line head_title"  style= "position: absolute; left: 0%; top:120%; width: 100%; height: 20%;">
            <div class = "text_footer head_title"  style= "position: absolute; left: 20%; top:20%; width: 60%; height: 20%; color: white; text-align: center;">Крупенин Александр Васильевич
            <br>
            группа 211-362
            <br>
            +7 901-744-15-74
            </div>
           </div>
            </footer>
</html>';
?>