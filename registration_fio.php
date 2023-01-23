<?php //UPDATE `users` SET `first_name` = '$first_name', `second_name` = '$second_name', `surname` = '$surname', 
      //`role` = '$role', `ver` = '$ver', `login` = '$login', `password` = '$password' WHERE `users`.`id_user` = '$id';
    include "db.php";
    $id = $_GET['id'];
  ?>
<?php
 $surname = $_POST['surname'];
 $first_name = $_POST['first_name'];
 $second_name = $_POST['second_name'];
 $login = $_POST['login'];
 $password = md5($_POST["password"]);
 $id_user = "";
 $role = "2";
 $ver = "1";
 
 if($surname !="" && $first_name !="" && $second_name !="" && $login !="" && $password !=""){
  
      mysqli_query($mysql, "UPDATE `users` SET `first_name` = '$first_name', `second_name` = '$second_name', `surname` = '$surname', 
      `role` = '$role', `ver` = '$ver', `login` = '$login', `password` = '$password' WHERE `users`.`id_user` = '$id';");
  
}

 ?>
<?php
echo '
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Площадки.ru</title>
      <link rel="manifest" href="site.webmanifest">
      <link rel="stylesheet" href="index.css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
      <link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
      <link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">
  </head>
  <body>
    <header>
    </header>';
 echo'
 <div class="container-fluid">
 <!-- Background animtion-->
     <div class="background">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
       <div class="cube"></div>
     </div>

     <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:37%; top: -5%; width: 20%; height: 25%;" src ="img/logo2.svg"></img>

     <div class= "div_aut" style="postion:absolute; left:35%; top: 20%; height: 55%;">
    <form action="" method="post" >
    <label>Фамилия:</label><br>
    <input type="text" name="surname" /><br>
    <label>Имя:</label><br>
    <input type="text" name="first_name" /><br>
    <label>Отчество:</label><br>
    <input type="text" name="second_name" /><br>
    <label>Логин:</label><br>
    <input type="text" name="login" /><br>
    <label>Пароль:</label><br>
    <input type="password" name="password" /><br><br>
    <input class = "button_main"  type="submit" value = "Изменить"/>
   </form><br>

   <form method=POST action = "http://krupeninkursovoy.std-2008.ist.mospolytech.ru/main.php?id='.$id.'">
    <button formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
    </form><br>
    </div>';
    echo'
  </body>
  </html>';
  ?>
