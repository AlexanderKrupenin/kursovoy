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

    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    
    </head>
    <body>

    <header>

    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST action = "http://kursovoy:3006/index.php">
        <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Выйти</button>
        </form><br>
        
        <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
        
  </header>

    <div class = "div_history" style= "position: absolute; left: 8%;top:30%; width: 80%; height: 20%; ">
    <p>Вы авторизовались под логином: ';  
    foreach ($result_login_name as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
        echo '<td>' . $row["login"] . '</td>';
    }
    echo'</p>';
        echo '<table><tr><th>ID</th><th>ФАМИЛИЯ</th><th>ИМЯ</th><th>ОТЧЕСТВО</th><th>РОЛЬ</th><th>ЛОГИН</th><th>ПАРОЛЬ</th></tr>';
        foreach ($result as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $row["surname"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["second_name"] . '</td>';
            echo '<td>' . 'Администратор' . '</td>';
            echo '<td>' . $row["login"] . '</td>';
            echo '<td>' . $row["password"] . '</td>'; 
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        echo'</div>
        <div class = "div_history" style="position: absolute; left: 8%; top:60%; width: 35%; height: 40%;">
        
            <form method=POST>
            <button formmethod=POST name=button_base_450_full'.$id.' value=1 class = "button_main" style="width: 100%;">База данных площадок в парках</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_base_2000_full'.$id.' value=1 class = "button_main" style="width: 100%;">База данных спортплощадок</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_base_koor'.$id.' value=1 class = "button_main" style="width: 100%;">Координаты площадок</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_yandex_map'.$id.' value=1 class = "button_main" style="width: 100%;">Яндекс карта</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_base_users'.$id.' value=1 class = "button_main" style="width: 100%;">База данных пользователей</button>
            </form><br>

            </div>';

        echo'

            <div class = "div_history" style="position: absolute; left: 53%; top:60%; width: 35%; height: 40%;">
            <form method=POST>
                <button formmethod=POST name=button_search_sport_ploshchadki_full_base_2000_full'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск спортплощадок</button>
                </form><br>
            

            <form method=POST>
            <button formmethod=POST name=button_search_ploshchadki_v_parkah_full_base_450_full'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск площадок в парках</button>
            </form><br>
          
            </div>

            <div class = "div_history" style="position: absolute; left: 8%; top:110%; width: 80%; height: 80%;">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HxsBpqUSHGdieR_FqkXfEYd3_XmfPr4&ehbc=2E312F" width="1220" height="600"></iframe>
            </div>

            </div>
            
            ';
          
 ?>
<?php
if ($_POST['button_base_450_full'.$id.'']) {
    Header("Location:base_450_full.php?id=$id");
}
if ($_POST['button_base_2000_full'.$id.'']) {
    Header("Location:base_2000_full.php?id=$id");
}
if ($_POST['button_base_koor'.$id.'']) {
    Header("Location:base_koor.php?id=$id");
}
if ($_POST['button_yandex_map'.$id.'']) {
    Header("Location:object_manager.php?id=$id");
}
if ($_POST['button_base_users'.$id.'']) {
    Header("Location:base_users.php?id=$id");
}
if ($_POST['button_search_sport_ploshchadki_full_base_2000_full'.$id.'']) {
    Header("Location:search_sport_ploshchadki_full.php?id=$id");
}
if ($_POST['button_search_ploshchadki_v_parkah_full_base_450_full'.$id.'']) {
    Header("Location:search_ploshchadki_v_parkah_full.php?id=$id");
}

?>
