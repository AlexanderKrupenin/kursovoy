<?php
    define('DB_HOST', 'std-mysql'); //Адрес
    define('DB_USER', 'std_2008_kursovoy'); //Имя пользователя
    define('DB_PASSWORD', '12345678'); //Пароль
    define('DB_NAME', 'std_2008_kursovoy'); //Имя БД
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>