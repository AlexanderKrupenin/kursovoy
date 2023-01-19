<?php
$result_login_name = mysqli_query($mysql, "SELECT login FROM `users` WHERE id_user='$id'");

echo '
    <!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Площадки.ru</title>
    <style>
    body {
        height: 1000px;
        background: linear-gradient(to right, #90dbf4, #cfbaf0, #fde4cf);
    }


</style>


    </style>

    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    
    </head>
    <body background=rgb(45,45,45)>

    <header>
    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST action = "http://kursovoy:3006/index.php">
        <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Выйти</button>
        </form><br>
        <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
  </header>

    <body>



    <div class = "div_history" style= "position: absolute; left: 8%;top:30%; width: 80%; height: 20%;">
    <p>Вы авторизовались под логином: ';  
    foreach ($result_login_name as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
        echo '<td>' . $row["login"] . '</td>';
    }
    echo'</p>';
        echo '<table><tr><th>ФАМИЛИЯ</th><th>ИМЯ</th><th>ОТЧЕСТВО</th><th>РОЛЬ</th><th>ЛОГИН</th></tr>';
        foreach ($result as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $row["surname"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["second_name"] . '</td>';
            echo '<td>' . 'Родитель' . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        echo'
        </div>
      

        <div class = "div_history" style="position: absolute; left: 53%; top:60%; width: 35%; height: 40%;">
        
        </div>

        <div class = "div_history" style="position: absolute; left: 53%; top:60%; width: 35%; height: 40%;">
        <form method=POST>
            <button formmethod=POST name=button_registration_children'.$id.' value=1 class = "button_main" style="width: 100%;">Зарегестрировать ребенка</button>
            </form><br>

        <form method=POST>
            <button formmethod=POST name=button_map_google'.$id.' value=1 class = "button_main" style="width: 100%;">Google карта</button>
            </form><br>

        <form method=POST>
        <button formmethod=POST name=button_children_base'.$id.' value=1 class = "button_main" style="width: 100%;">Дети</button>
        </form><br>
        </div>
        
        
        ';echo'';

        echo'
            ';
        ?>
        <?php
if ($_POST['button_registration_children'.$id.'']) {
    Header("Location:registration_children.php?id=$id");
}
if ($_POST['button_children_base'.$id.'']) {
    Header("Location:children_base.php?id=$id");
}
if ($_POST['button_map_google'.$id.'']) {
    Header("Location:map_google.php?id=$id");
}


?>