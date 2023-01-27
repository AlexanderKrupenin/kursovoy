<?php
    include "db.php";
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
    
    <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:37%; top: -5%; width: 20%; height: 25%;" src ="img/logo2.svg"></img>

    <div class= "div_aut" style="postion:absolute; left:35%; top: 20%; height: 45%;">
    <form action="http://krupeninkursovoy.std-2008.ist.mospolytech.ru/index.php" method="post">
      <label>Логин:</label><br>
      <input type="text" name="login" /><br>
      <label>Пароль:</label><br>
      <input type="password" name="password" /><br><br>
      <input class = "button_main"  type="submit" value = "  Авторизоваться  "/>
   </form><br>
   <form action="http://krupeninkursovoy.std-2008.ist.mospolytech.ru/registration.php" method="post">
    <input class = "button_main"  type="submit" value = "     Регистрация     "/>
 </form><br>

 <form action="http://krupeninkursovoy.std-2008.ist.mospolytech.ru/guest.php" method="post">
  <input class = "button_main"  type="submit" value = "Посмотреть карту"/>
</form>
    </div>';
    echo'
  </body>
  </html>';
  ?>
<?php
 $login = $_POST['login'];
 $password = md5($_POST['password']);
 $result = mysqli_query($mysql, "SELECT id_user FROM `users` WHERE login ='$login' AND password = '$password'");
        if($login = mysqli_fetch_assoc($result)){
        $login['id_user'];
        $id = $login['id_user'];
        Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/main.php?id=$id");
}
 ?>