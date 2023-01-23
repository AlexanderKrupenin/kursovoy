<?php
    include "db.php";

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
 //$surname !="" && $first_name !="" && $second_name !="" &&
 if($login !="" && $password !=""){
  $result = mysqli_query($mysql, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");
  if(mysqli_num_rows($result) == 0){
      mysqli_query($mysql, "INSERT INTO `users` (`id_user`, `first_name`, `second_name`, `surname`, `role`, `ver`, `login`, `password`) 
      VALUES (NULL,'$first_name', '$second_name', '$surname', '$role', '$ver', '$login', '$password')");
  }

}

 ?>
<?php
echo '
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Площадки.ru</title>
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
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

     <img class = " head_title" style="postion:fixed; border: none; backgroung-color: none; left:37%; top: -5%; width: 20%; height: 25%;" src ="img/logo2.svg"></img>

     <div class= "div_aut" style="postion:absolute; left:35%; top: 20%; height: 45%;">
    <form action="http://krupeninkursovoy.std-2008.ist.mospolytech.ru/registration.php" method="post" >
    <label>Регистрация</label><br><br>
    <label>Логин:</label><br>
    <input type="text" name="login" /><br>
    <label>Пароль:</label><br>
    <input type="password" name="password" /><br><br>
    <input class = "button_main"  type="submit" value = "Зарегистрироваться"/>
   </form><br>

   <form action="http://krupeninkursovoy.std-2008.ist.mospolytech.ru/index.php" method="post" >
    <input class = "button_main"  type="submit" value = "Назад"/>
   </form>
    </div>';
    echo'
  </body>
  </html>';
  ?>