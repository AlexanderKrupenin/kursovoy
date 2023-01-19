<?php
include "db.php";   
$id = $_GET['id'];
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
    <form method=POST action = "http://kursovoy:3006/main.php?id='.$id.'">
        <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Выйти</button>
        </form><br>
  </header>

    <body>
    </div>

    <div class = "div_history_bd" style= "position: absolute; left: 35%;top:20%; width: 20%; border:none;">
    <table style= "position: absolute; left: -10%;top:50%; boreder: ">
        <tr>
        
            <th style=" padding: 10px;  background: #606060; color: #fff;"></th>
            <th style=" padding: 10px;  background: #606060; color: #fff;">Имя</th>
            <th style=" padding: 10px;  background: #606060; color: #fff;">Отчество</th>
            <th style=" padding: 10px;  background: #606060; color: #fff;">Фамилия</th>
            <th style=" padding: 10px;  background: #606060; color: #fff;">Логин</th>
            
        </tr>
       ';
    
            $products = mysqli_query($mysql, "SELECT * FROM `users` WHERE ver ='$id'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td style=" background: #b5b5b5; padding: 10px;"> Ребенок:';?>
                        <?php
                        echo'</td>
                        <td style=" background: #b5b5b5; padding: 10px;">';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td style=" background: #b5b5b5; padding: 10px;">';?>
                        <?= $product[2]; ?><?php
                        echo'</td>
                        <td style=" background: #b5b5b5; padding: 10px;">';?>
                        <?= $product[3]; ?><?php
                        echo'</td>
                        <td style=" background: #b5b5b5; padding: 10px;">';?>
                        <?= $product[6]; ?><?php
                        echo'</td>
                        ';?><?php
                        echo'
                    
                    </tr>';
            }
        
        ';
        </table>';
       
        echo'
        </div>  
        ';
        ?>