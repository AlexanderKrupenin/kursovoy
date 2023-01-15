<?php
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
    <form method=POST action = "http://kursovoy:3006/index.php">
        <button  formmethod=POST name=1 value=1 class = "head_title button_main" style= "position: fixed; left: 5%;top:12%;">Выйти</button>
        </form><br>
        
  </header>

    <body>
    <div class = "div_history" style="position: absolute; left: 8%; top:25%; width: 80%; height: 80%;">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HxsBpqUSHGdieR_FqkXfEYd3_XmfPr4&ehbc=2E312F" width="1200" height="600"></iframe>
            </div>
            </body>
     <footer>
     <div class = "top_line"  style= "position: absolute; left: 0%; top:120%; width: 100%; height: 20%;"> </div>
     </footer>
     ';
        ?>