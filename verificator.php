<?php
$result_login_name = mysqli_query($mysql, "SELECT login FROM `users` WHERE id_user='$id'");
echo '
    <!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>

    <style>
    body {
        height: 1000px;
        background: linear-gradient(to right, #90dbf4, #cfbaf0, #fde4cf);
    }
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
  </header>

    <body>
    <div class = "div_history" style= "position: absolute; left: 8%;top:30%; width: 80%; height: 20%;">
    <p>Вы авторизовались под логином: ';  
    foreach ($result_login_name as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
        echo '<td>' . $row["login"] . '</td>';
    }
    echo'</p>';
        echo '<table><tr><th>first_name</th><th>second_name</th><th>surname</th><th>role</th><th>login</th></tr>';
        foreach ($result as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["second_name"] . '</td>';
            echo '<td>' . $row["surname"] . '</td>';
            echo '<td>' . 'Пользователь' . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        echo'</div>';
        ?>