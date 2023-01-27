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
    <div class = "info_up head_title" style= "position: fixed; left: 36%;top:14%;">Панель администратора</div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST action = "http://krupeninkursovoy.std-2008.ist.mospolytech.ru/index.php">
    <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Выйти</button>
        </form><br>
    <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
        
  </header>
        <body>
        ';
    echo'<div class = "info_up head_title" style= "position: fixed; left: 5%;top:2%; width: 10%; height: 5%;">
    <p>Логин: ';  
    foreach ($result_login_name as $row) { 
        echo '<td>' . $row["login"] . '</td>';
    }
    echo'
    </div>';
    echo'
    <div class = "div_history" style= "position: absolute; left: 25%;top:30%; width: 45%; height: 45%; ">
    ';
    echo'</p>';
        echo '<table style= "position: absolute; left: 38%;">';
        foreach ($result as $row) { 
            echo '<tr>';
            echo '<td> ID<br>' . $id . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td> ФАМИЛИЯ<br>' . $row["surname"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td> ИМЯ<br>' . $row["first_name"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td> ОТЧЕСТВО<br>' . $row["second_name"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td> РОЛЬ<br>' . 'Администратор' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        echo'</div>
        <div class = "div_history" style="position: absolute; left: 8%; top:95%; width: 35%; height: 40%;">

            <form method=POST>
            <button formmethod=POST name=button_base_koor'.$id.' value=1 class = "button_main" style="width: 100%;">Координаты площадок</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_base_users'.$id.' value=1 class = "button_main" style="width: 100%;">Работа с базой пользователей</button>
            </form><br>

            </div>';

        echo'

            <div class = "div_history" style="position: absolute; left: 53%; top:95%; width: 35%; height: 40%;">
            <form method=POST>
                <button formmethod=POST name=button_search_sport_ploshchadki_full_base_2000_full'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск спортплощадок</button>
                </form><br>
            

            <form method=POST>
            <button formmethod=POST name=button_search_ploshchadki_v_parkah_full_base_450_full'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск игровых площадок в парках</button>
            </form><br>
          
            <form method=POST>
            <button formmethod=POST name=button_yandex_map'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск по Яндекс картам</button>
            </form><br>

            <form method=POST>
            <button formmethod=POST name=button_map_google'.$id.' value=1 class = "button_main" style="width: 100%;">Поиск по Google картам</button>
            </form><br>

            </div>

            </div>
            </body>
            
            
            ';
          
 ?>
<?php

if ($_POST['button_map_google'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/map_google.php?id=$id");
}
if ($_POST['button_base_koor'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/base_koor.php?id=$id");
}
if ($_POST['button_yandex_map'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/object_manager.php?id=$id");
}
if ($_POST['button_base_users'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/base_users.php?id=$id");
}
if ($_POST['button_search_sport_ploshchadki_full_base_2000_full'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/search_sport_ploshchadki_full.php?id=$id");
}
if ($_POST['button_search_ploshchadki_v_parkah_full_base_450_full'.$id.'']) {
    Header("Location:http://krupeninkursovoy.std-2008.ist.mospolytech.ru/search_ploshchadki_v_parkah_full.php?id=$id");
}

?>