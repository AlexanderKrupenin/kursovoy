
<?php
    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `sport_ploshchadki`");
$id = $_GET['id'];
echo '
    <!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>
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
    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    </head>
    <body>
    <div class = "" style="position:absolute; border: 4px solid black; top: 10%">';
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
            </form><br>';
?>
=======
<?php
    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `sport_ploshchadki`");
$id = $_GET['id'];
echo '
    <!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>
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
    <script src="UpdateScript.js"> </script>
    <script src="update_counter.js"> </script>
    <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "index.css">
    </head>
    <body>
    <div class = "" style="position:absolute; border: 4px solid black; top: 10%">';
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
            </form><br>';
?>

