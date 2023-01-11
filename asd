<?php
include "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE id_user = '$id'";
?>
<?php
 $sql_user = mysqli_query($mysql, "SELECT id_user FROM `users` WHERE id_user = '$id'");
        if($name = mysqli_fetch_assoc($sql_user)){
           ?>
<?php   $name['USER_ID'];
$sql_id_user = $name['USER_ID']?>
<?php
}
 ?><?php

if($result = $mysql->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
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
    <div class = "div_history">
    <p>Получено объектов: '.$rowsCount.'</p>';
    echo '<table><tr><th>id_user</th><th>first_name</th><th>second_name</th><th>surname</th><th>login</th><th>password</th></tr>';
    foreach($result as $row){//id_user`, `first_name`, `second_name`, `surname`, `rank`, `login`, `password`
        echo '<tr>';
            echo '<td>' . $row["id_user"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["second_name"] . '</td>';
            echo '<td>' . $row["rank"] . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    $result->free();
}
echo'<form method=POST action = "http://kursovoy:3006/index.php">
<button formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
</form><br></div>';
echo'
    </body>
    </html>';
?>