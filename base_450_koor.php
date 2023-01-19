<?php

    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `ploshchadki_v_parkah_full`");
$id = $_GET['id'];
echo '
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Площадки.ru</title>
<script src="UpdateScript.js"> </script>
<script src="update_counter.js"> </script>
<link rel="manifest" href = "site.webmanifest">
<link rel="stylesheet" href = "index.css">
<style>
body{
    background: #fde4cf;
   
}
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

</head>
<body>
<div class = "div_history_bd" style="position:absolute; border:none; top: 25%;">';
        echo '<table><tr>
	        <th>adress</th>
            <th>latitude</th>
            <th>longitude</th>
                    </tr>';
        foreach ($full_base as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $row["adress"] . '</td>';
            echo '<td>' . $row["latitude"] . '</td>';
            echo '<td>' . $row["longitude"] . '</td>';
            echo '</tr>';
        }
        echo '</table></div>';
    
        echo'<form method=POST action = "http://kursovoy:3006/main.php?id='.$id.'">
            <button formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
            </form><br>
            
            </body>
            <footer>
            <div class = "top_line head_title"  style= "position: absolute; left: 0%; top:2120%; width: 100%; height: 20%;">
            <div class = "text_footer head_title"  style= "position: absolute; left: 20%; top:20%; width: 60%; height: 20%; color: white; text-align: center;">Крупенин Александр Васильевич
            <br>
            группа 211-362
            <br>
            +7 901-744-15-74
            </div>
           </div>
            </footer>
            ';
?>
