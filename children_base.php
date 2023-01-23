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
    <div class = "info_up head_title" style= "position: fixed; left: 40%;top:14%;">Мои дети</div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST class = "head_title" action = "http://krupeninkursovoy.std-2008.ist.mospolytech.ru/main.php?id='.$id.'">
        <button formmethod=POST name=1 value=1 class = "button_main" style= "position: fixed; left: 5%;top:12%;">Назад</button>
        </form><br>
        <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
  </header>

<body>
<div class = "div_history_bd" style= "position: absolute; left: 8%;top:30%; width: 80%; border:none;">
        <table style= "position: absolute; left: 25%;top:-5%;">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Логин</th>
        </tr>
        ';
        ?>
        <?php
        
        $content1 = "
        
        <form method=\"POST\">
        <div class = 'div_history_bd' style= 'position: absolute; left: -10%;top:0%; width: 80%; border:none;'>
        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:-10%; width:15%;border:none;'>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"surname\" placeholder='Фамилия'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"first_name\" placeholder='Имя'>
        </div>
        
        <div><br>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"second_name\" placeholder='Отчество'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"role\" placeholder='Роль'>
        </div>
        
        <div><br>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"ver\" placeholder='Верефикатор'>
        </div><br>
        
        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"login\" placeholder='Логин'>
        </div><br>
        </div> 

        <div class = 'div_history_bd' style= 'position: absolute; left: 10%;top:170%; width:10%; border:none;'>
        <div>
        <button class = 'button_main' type=\"submit\ \">Поиск</button>
        </div>

        </div>
        </div>
        </form>


        <form method=\"POST\">
        <div class = 'div_history_bd' style= 'position: absolute; left: -10%;top:100%; width: 80%; border:none;'>
        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:-10%; width:15%;border:none;'>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"id_up\" placeholder='ID'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"surname_up\" placeholder='Фамилия'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"first_name_up\" placeholder='Имя'>
        </div>
        
        <div><br>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"second_name_up\" placeholder='Отчество'>
        </div><br>

        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"login_up\" placeholder='Логин'>
        </div><br>
        </div>

        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:135%; width:10%; border:none;'>
        <div>
        <button class = 'button_main' type=\"submit\ \">Изменить</button>
        </div>

        </div>
        </div>
        </form>

        <form method=\"POST\">
        <div class = 'div_history_bd' style= 'position: absolute; left: -10%;top:175%; width: 80%; height: 10%; border:none;'>
        <div class = 'div_history_bd' style= 'position: absolute; left: 8%;top:80%; width:15%;border:none;'>
        <div>
        <input style='background: linear-gradient(132deg, #90dbf4, #cfbaf0, #fde4cf);' type=\"text\" name=\"login_user_del\" placeholder='Логин'>
        </div><br>

        <div class = 'div_history_bd' style= 'position: absolute; left: 4%;top:155%; width:10%; border:none;'>
        <div>
        <button class = 'button_main' type=\"submit\ \">Удалить</button>
        </div>

        </div>
        </div>
        </form>
        "; 
        require("visual.php");

        $first_name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $surname = $_POST['surname'];
        $role = $_POST['role'];
        $ver = $_POST['ver'];
        $login = $_POST['login'];

        $id_up = $_POST['id_up'];
        $first_name_up = $_POST['first_name_up'];
        $second_name_up = $_POST['second_name_up'];
        $surname_up = $_POST['surname_up'];
        $login_up = $_POST['login_up'];

        $login_user_del = $_POST['login_user_del'];
        
            if($id_user_del !=""){
            $delete_users = mysqli_query($mysql, "DELETE FROM users WHERE login='$login_user_del' AND ver='$id'");
            }

            if($id_up !="" && $first_name_up!="" && $second_name_up!="" && $surname_up!=""
            && $login_up!=""){
            $update_users = mysqli_query($mysql, "UPDATE `users` SET
             `first_name` = '$first_name_up', `second_name` = '$second_name_up', 
            `surname` = '$surname_up', `role` = '3', `ver` = '$id', `login` = '$login_up' WHERE `users`.`id_user` = '$id_up'");
            }

            $products = mysqli_query($mysql, "SELECT * FROM `users` WHERE ver LIKE '$id'  
            AND first_name LIKE '%$first_name%' AND second_name LIKE '%$second_name%' AND surname LIKE '%$surname%' AND role LIKE '%$role%'
            AND ver LIKE '%$ver%' AND login LIKE '%$login%'");

            
        if ($products != "") {
            $products = mysqli_query($mysql, "SELECT * FROM `users` WHERE ver LIKE '$id'  
            AND first_name LIKE '%$first_name%' AND second_name LIKE '%$second_name%' AND surname LIKE '%$surname%' AND role LIKE '%$role%'
            AND ver LIKE '%$ver%' AND login LIKE '%$login%'");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                echo '
        <tr>
            <td>'; ?>
            <?= $product[0]; ?><?php
              echo '</td>
            <td>'; ?>
            <?= $product[1]; ?><?php
              echo '</td>
            <td>'; ?>
            <?= $product[2]; ?><?php
              echo '</td>
            <td>'; ?>
            <?= $product[3]; ?><?php
              echo '</td>
            
            <td>'; ?>
            <?= $product[6]; ?><?php
              echo '</td>
            
            ';?><?php
        echo '
        </tr>';
            }
        }
        
echo '
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