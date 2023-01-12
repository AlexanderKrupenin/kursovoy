<?php

         
$result_login_name = mysqli_query($mysql, "SELECT login FROM `users` WHERE id_user='$id'");

echo '
    <!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>
    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    </head>
    <body>
    <div class = "div_history" style="position:absolute; left:20%; top: 20%; width: 55%;">
    <p>Вы авторизовались под логином: ';  
    foreach ($result_login_name as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
        echo '<td>' . $row["login"] . '</td>';
    }
    echo'</p>';
        echo '<table><tr><th>id_user</th><th>first_name</th><th>second_name</th><th>surname</th><th>role</th><th>login</th><th>password</th></tr>';
        foreach ($result as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["second_name"] . '</td>';
            echo '<td>' . $row["surname"] . '</td>';
            echo '<td>' . 'Админитсратор' . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        echo'<form method=POST action = "http://kursovoy:3006/base_450_full.php">
            <button  formmethod=POST name=1 value=1 class = "button_main"">База данных площадок в парках</button>
            </form><br>';

        echo'<form method=POST action = "http://kursovoy:3006/index.php">
            <button  formmethod=POST name=1 value=1 class = "button_main"">Выйти</button>
            </form><br></div>';
?>