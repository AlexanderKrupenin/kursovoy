<?php
include "db.php";
?>
<!doctype html>
<html lang="en">
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

<body>
    <table>
        <tr>
            <th>Название заведения</th>
            <th>Номер телефона</th>
            <th>Количество посадочных мест</th>
            <th>Адрес</th>
        </tr>
        <p><a href="auto.php">К входу</a></p>
        <?php
        
        $content1 = "
        <form method=\"POST\">
            <div>
                <label>Адрес</label>
                <input type=\"text\" name=\"adress\">
            </div>

            <div>
                <button type=\"submit\ \">Поиск</button>
            </div>
        </form>";
        require("visual.php");
      
        if ( $_POST['adress'] <> NULL){
            $adress = $_POST['adress'];
            $products = mysqli_query($mysql, "SELECT * FROM `sport_ploshchadki` WHERE adress LIKE '%$adress%'");   
            
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                
                echo'
                    <tr>
                        <td>';?><?= $product[0] ?><?php
                        echo'</td>
                       
                    </tr>';
               

            }
        }

echo '
    </table>
   
</body>
</html>';

?>