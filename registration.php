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
 if(!empty($_POST)){
    $result = mysqli_query($mysql, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");

    if(mysqli_num_rows($result) == 0){
        mysqli_query($mysql, "INSERT INTO `users` (`id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`) VALUES (NULL,'$first_name', '$second_name', '$surname', '$role', '$login', '$password')");
    }
    
}

 ?>
<?php
echo '
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Krupenin</title>
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <header>
    </header>';
 echo'
    <div class= "div_aut">
    <form action="http://kursovoy:3006/registration.php" method="post" >
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
    <input class = "button_main"  type="submit" value = "Зарегестрироваться"/>
   </form><br>

   <form action="http://kursovoy:3006/index.php" method="post" >
    <input class = "button_main"  type="submit" value = "Назад"/>
   </form>
    </div>';
    echo'
  </body>
  </html>';
  ?>