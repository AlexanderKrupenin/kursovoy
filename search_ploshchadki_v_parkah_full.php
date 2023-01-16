<?php
include "db.php";
$id = $_GET['id'];
echo '
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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
  </header>

<body>
<div class = "div_history_bd" style= "position: absolute; left: 8%;top:30%; width: 80%; border:none;">
    <table style= "position: absolute; left: 0%;top:50%;">
        <tr>
            <th>Адресс</th>
            <th>Тип</th>
            <th>Покрытие</th>
            <th>Тип физической подготовки</th>
            <th>Освещение</th>
            <th>Время пользования 24</th>
            <th>Район</th>
            <th>Округ</th>
            <th>Цена</th>
        </tr>';
        ?>
        <?php
        
        $content1 = "
        
        <form method=\"POST\">
        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:0%; width: 80%; border:none;'>
        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:-10%; width:15%;border:none;'>
        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"adress\" placeholder='Адрес'>
        </div><br>
    
        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"objectname\" placeholder='Тип'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"Dicttrict\" placeholder='Район'>
        </div>
        
        <div><br>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"AdmArea\" placeholder='Округ'>
        </div><br>
        
        </div><br>


        <div class = 'div_history_bd' style= 'position: absolute; left: -8%;top:-10%; width:10%; border:none;'>
        <div>
        <button class = 'button_main' type=\"submit\ \">Поиск</button>
        </div>

</div>
        
        </div>
        </form>";
        require("visual.php");
      
        if ($_POST['adress'] <> NULL){
            $adress = $_POST['adress'];
            $products = mysqli_query($mysql, "SELECT * FROM `ploshchadki_v_parkah_full` WHERE adress LIKE '%$adress%'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[33]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[27]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[32]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[26]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[24]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[29]; ?><?php
                        echo'</td>
                    </tr>';
            }
        }

        if ($_POST['objectname'] <> NULL){
            $adress = $_POST['objectname'];
            $products = mysqli_query($mysql, "SELECT * FROM `ploshchadki_v_parkah_full` WHERE objectname LIKE '%$objectname%'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[33]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[27]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[32]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[26]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[24]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[29]; ?><?php
                        echo'</td>
                    </tr>';
            }
        }

        if ($_POST['Dicttrict'] <> NULL){
            $Dicttrict = $_POST['Dicttrict'];
            $products = mysqli_query($mysql, "SELECT * FROM `ploshchadki_v_parkah_full` WHERE Dicttrict LIKE '%$Dicttrict%'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[33]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[27]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[32]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[26]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[24]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[29]; ?><?php
                        echo'</td>
                    </tr>';
            }
        }


        if ($_POST['AdmArea'] <> NULL){
            $AdmArea = $_POST['AdmArea'];
            $products = mysqli_query($mysql, "SELECT * FROM `ploshchadki_v_parkah_full` WHERE AdmArea LIKE '%$AdmArea%'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo'
                    <tr>
                        <td>';?>
                        <?= $product[33]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[1]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[27]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[32]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[26]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[24]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[5]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[4]; ?><?php
                        echo'</td>
                        <td>';?>
                        <?= $product[29]; ?><?php
                        echo'</td>
                    </tr>';
            }
        }
        
echo '
    </table>
    </div> 
</body>
</html>';

?>