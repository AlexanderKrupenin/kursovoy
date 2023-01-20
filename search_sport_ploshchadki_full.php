<?php
include "db.php";
$id = $_GET['id'];
echo '
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Площадки.ru</title>
    <link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
    <link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
    <link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">
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
<div class = "div_history_bd" style= "position: absolute; left: 8%;top:30%; width: 80%; border:none;">
    <table style= "position: absolute; left: 0%;top:50%;">
        <tr>
            <th>Адресс</th>
            <th>Тип</th>
            <th>Покрытие</th>
            <th>Тип физической подготовки</th>
            <th>Освещение</th>
            <th>Время пользования</th>
            <th>Район</th>
            <th>Округ</th>
            <th>Специализация</th>
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
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"District\" placeholder='Район'>
        </div>
        
        <div><br>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"AdmArea\" placeholder='Округ'>
        </div><br>
        
        </div><br>

         </div>
         <div class = 'div_history_bd' style= 'position: absolute; left: 30%;top:-10%; width: 15%; border:none;'><br>

        <label class='input-group-text' for='inputGroupSelect01'>Тип покрытия</label>
        <select name='SurfaceTypeWinter' style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' class='select-css' id='inputGroupSelect01; '>
           
            <option value='1' selected='selected' >Выбрать любое значение из всех категорий списка</option>
            <option value='2'  >специальное покрытие</option>
            <option value='3'  >грунтовое покрытие</option>
            <option value='4'  >отсыпное покрытие</option>
            <option value='5'  >газонное покрытие (натуральное)</option>
            <option value='6'  >заливное покрытие</option>
            <option value='7'  >асфальтовое, бетонное покрытие</option>
            <option value='8'  >рулонное покрытие</option>
            <option value='9'  >газонное покрытие (искусственное)</option>
        </select>
        </div><br>

        <div class = 'div_history_bd' style= 'position: absolute; left: 30%;top:8%; width: 15%; border:none;'><br>
        <label class='input-group-text' for='inputGroupSelect01'>Специализация групп здоровья</label>
        <select name='DisabilityFriendly' style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' class='select-css' id='inputGroupSelect01'>
           
            <option value='1' selected='selected' >Выбрать любое значение из всех категорий списка</option>
            <option value='2'  >частично приспособлен</option>
            <option value='3'  >приспособлен для всех групп инвалидов</option>
            <option value='4'  >приспособлен для лиц с нарушением ОДА</option>
            <option value='5'  >без специализации</option>
            <option value='6'  >не приспособлен</option>
        </select>
        </div></div><br>


        <div class = 'div_history_bd' style= 'position: absolute; left: 30%;top:26%; width: 15%; border:none;'><br>
        <label class='input-group-text' for='inputGroupSelect01'>Тип освещения</label>
        <select name='Lighting' style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' class='select-css' id='inputGroupSelect01'>
           
            <option value='1' selected='selected' >Выбрать любое значение из всех категорий списка</option>
            <option value='2'  >без дополнительного освещения</option>
            <option value='3'  >смешанное освещение</option>
            <option value='4'  >освещение лампами накаливания</option>
            <option value='5'  >освещение газоразрядными лампами</option>
            <option value='6'  >освещение светодиодными лампами</option>
        </select>
        </div></div><br>

        <div class = 'div_history_bd' style= 'position: absolute; left: 15%;top:30%; width:10%; border:none;'>
        <div>
        <button class = 'button_main' type=\"submit\ \">Поиск</button>
        </div>

</div>
        
        </div>
        </form>";
        require("visual.php");
        $select;
        $select_d;
        $select_l;
        $adress = $_POST['adress'];
        $ObjectName = $_POST['objectname'];
        $District = $_POST['District'];
        $AdmArea = $_POST['AdmArea'];

        if (isset($_POST['SurfaceTypeWinter']) || isset($_POST['DisabilityFriendly'])){
            $SurfaceTypeWinter = $_POST['SurfaceTypeWinter'];
            $DisabilityFriendly = $_POST['DisabilityFriendly'];
            $Lighting = $_POST['Lighting'];


            if($Lighting == 1){
                $select_l = '';
            }
            if($Lighting == 2){
                $select_l = 'без дополнительного освещения';
            }
            if($Lighting == 3){
                $select_l = 'смешанное освещение';
            }
            if($Lighting == 4){
                $select_l = 'освещение лампами накаливания';
            }
            if($Lighting == 5){
                $select_l = 'освещение газоразрядными лампами';
            }
            if($Lighting == 6){
                $select_l = 'освещение светодиодными лампами';
            }


            if($DisabilityFriendly == 1){
                $select_d = '';
            }
            if($DisabilityFriendly == 2){
                $select_d = 'частично приспособлен';
            }
            if($DisabilityFriendly == 3){
                $select_d = 'приспособлен для всех групп инвалидов';
            }
            if($DisabilityFriendly == 4){
                $select_d = 'приспособлен для лиц с нарушением ОДА';
            }
            if($DisabilityFriendly == 5){
                $select_d = 'без специализации';
            }
            if($DisabilityFriendly == 6){
                $select_d = 'не приспособлен';
            }


            if($SurfaceTypeWinter == 1){
                $select = '';
            }
            if($SurfaceTypeWinter == 2){
                $select = 'специальное';
            }
            if($SurfaceTypeWinter == 3){
                $select = 'грунтовое';
            }
            if($SurfaceTypeWinter == 4){
                $select = 'отсыпное';
            }
            if($SurfaceTypeWinter == 5){
                $select = 'газонное';
            }
            if($SurfaceTypeWinter == 6){
                $select = 'заливное';
            }
            if($SurfaceTypeWinter == 7){
                $select = 'асфальтовое, бетонное покрытие';
            }
            if($SurfaceTypeWinter == 8){
                $select = 'рулонное покрытие';
            }
            if($SurfaceTypeWinter == 9){
                $select = 'газонное покрытие (искусственное)';
            }
            $products = mysqli_query($mysql, "SELECT * FROM `sport_ploshchadki_full` WHERE SurfaceTypeWinter LIKE '%$select%' 
            AND DisabilityFriendly LIKE '%$select_d%' AND Lighting LIKE '%$select_l%' AND adress LIKE '%$adress%' AND ObjectName LIKE '%$ObjectName%'
            AND District LIKE '%$District%' AND AdmArea LIKE '%$AdmArea%'");

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
                        <?= $product[31]; ?><?php
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