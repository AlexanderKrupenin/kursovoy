<?php
include "db.php";
$id = $_GET['id'];
echo '
<!doctype html>
<html lang="ru">
<head>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Площадки.ru</title>
<script src="UpdateScript.js"> </script>
<script src="update_counter.js"> </script>
<link rel="manifest" href = "site.webmanifest">
<link rel="stylesheet" href = "index.css">
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>

<header>
    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST class = "head_title" action = "http://kursovoy:3006/main.php?id='.$id.'">
        <button formmethod=POST name=1 value=1 class = "button_main" style= "position: fixed; left: 5%;top:12%;">Назад</button>
    </form><br>
    <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
  </header>

<body>
<div class = "div_history_bd" style= "position: absolute; left: 2%;top:30%; width: 74%; border:none;">
    <table style= "position: absolute; left: 0%;top:50%;">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Роль</th>
            <th>Верификатор</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>';
        ?>
        <?php
        
        $content1 = "
        
        <form method=\"POST\">
        
        <div class = 'div_history_bd' style= 'position: absolute; left: 0%;top:10%; width:15%;border:none;'>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"id1\" placeholder='ID'>
        <br>
        
        

        <div class = 'div_history_bd' style= 'position: absolute; left: 0%;top:20%; width:10%; border:none;'>
        <button class = 'button_main' type=\"submit\ \">Поиск</button>
        </div>

        </div>
        </form>
        </div> 
            ";
        
        require("visual.php");

        $id1 = $_POST['id1'];

        echo'
        <div class = "div_history_bd" style= "position: absolute; left: 2%;top:30%; width: 74%; border:none;">
        <form method=POST>

        <div class = "div_history_bd" style= "position: absolute; left: 0%;top:10%; width:15%;border:none;">
        <input style="background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);" type=\"text\" name=\"id1\" placeholder="ID">

            <button formmethod=POST name=button_base_2000_koor'.$id.' value=1 class = "button_main" style="width: 100%;">База данных спортплощадок сокращенная</button>
            </form>
            </div>
        <br>
        ';

        if ($_POST['id1'] <> NULL){
            $products = mysqli_query($mysql, "SELECT * FROM `users` WHERE id_user='$id1'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[0]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[2]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[3]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[6]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[7]; ?><?php
                        echo'</td>
                        ';?><?php
                        echo'
                    
                    </tr>';
            }
        }
       
echo '
    </table>

    <div class = "div_history_bd" style= "position: absolute; left: 60%;top:29%; width: 20%; border:none;">
    <table style= "position: absolute; left: 0%;top:50%;">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Роль</th>
            <th>Верификатор</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
       ';
    
            $products = mysqli_query($mysql, "SELECT * FROM `users`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[0]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[2]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[3]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[6]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[7]; ?><?php
                        echo'</td>
                        ';?><?php
                        echo'
                    
                    </tr>';
            }
        
        ';
        </table>
    </div> 
</body>
</html>';

?>
<?php
if ($_POST['button_delete'.$id1.'']) {
    $products = mysqli_query($mysql, "DELETE FROM `users` WHERE `id_user` = '$id1'");
}

?>
