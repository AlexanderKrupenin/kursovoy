<?php
include "db.php";   
$id = $_GET['id'];
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
    <link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
    <link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
    <link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">
    
    </head>
    <body>

    <header>
    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
    <div class = "info_up head_title" style= "position: fixed; left: 39%;top:14%;">Google карта</div>
    <h1 class = "text_up head_title" style= "position: fixed; left: 35%;top:0%; width: 20%;height: 5%;">Площадки.ru</h1>
    <form method=POST action = "http://krupeninkursovoy.std-2008.ist.mospolytech.ru/main.php?id='.$id.'">
        <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Назад</button>
        </form><br>
        <img class= " head_title" style="postion:fixed; border: none; backgroung-color: none; left:65%; top: -5%; width: 20%; height: 25%;" src ="img/logo.svg"></img>
  </header>

    <body>
    <div class = "div_history" style="position: absolute; left: 8%; top:25%; width: 80%; height: 80%;">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HxsBpqUSHGdieR_FqkXfEYd3_XmfPr4&ehbc=2E312F" width="1200" height="600"></iframe>
        </div>
    </body>
            <footer>
            <div class = "top_line"  style= "position: absolute; left: 0%; top:120%; width: 100%; height: 20%;">
            <div class = "text_footer"  style= "position: absolute; left: 20%; top:20%; width: 60%; height: 20%; color: white; text-align: center;">Крупенин Александр Васильевич
            <br>
            группа 211-362
            <br>
            +7 901-744-15-74
            </div>
           </div>
            </footer>
     ';
        ?>