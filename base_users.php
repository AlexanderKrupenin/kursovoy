
<?php
    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `users`");
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
    <body>';
    
        echo' <div class = "" style="position:absolute; border: 4px double black; top: 10%;">';
        echo '<table><tr>
        <th>id_user</th>	
        <th>first_name</th>	
        <th>second_name</th>	
        <th>surname</th>	
        <th>role</th>	
        <th>ver</th>	
        <th>login</th>	
        <th>password</th>	
        </tr>
        ';
        
        foreach ($full_base as $row) { /*
            Полные тексты
            id_user	
            first_name	
            second_name	
            surname	
            role	
            ver	
            login	
            password*/
            echo '<tr>';
            echo '<td>' . $row["id_user"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';	
            echo '<td>' . $row["second_name"] . '</td>';	
            echo '<td>' . $row["surname"] . '</td>';	
            echo '<td>' . $row["role"] . '</td>';	
            echo '<td>' . $row["ver"] . '</td>';	
            echo '<td>' . $row["login"] . '</td>';	
            echo '<td>' . $row["password"] . '</td>';	
            echo '</tr>';
        }
        echo '</table>
       
        </div>';
        echo'
        <form method=POST action = "http://kursovoy:3006/main.php?id='.$id.'">
            <button formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
            </form><br>
        ';
?>

=======
<?php
    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `users`");
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
    <body>';
    
        echo' <div class = "" style="position:absolute; border: 4px double black; top: 10%;">';
        echo '<table><tr>
        <th>id_user</th>	
        <th>first_name</th>	
        <th>second_name</th>	
        <th>surname</th>	
        <th>role</th>	
        <th>ver</th>	
        <th>login</th>	
        <th>password</th>	
        </tr>
        ';
        
        foreach ($full_base as $row) { /*
            Полные тексты
            id_user	
            first_name	
            second_name	
            surname	
            role	
            ver	
            login	
            password*/
            echo '<tr>';
            echo '<td>' . $row["id_user"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';	
            echo '<td>' . $row["second_name"] . '</td>';	
            echo '<td>' . $row["surname"] . '</td>';	
            echo '<td>' . $row["role"] . '</td>';	
            echo '<td>' . $row["ver"] . '</td>';	
            echo '<td>' . $row["login"] . '</td>';	
            echo '<td>' . $row["password"] . '</td>';	
            echo '</tr>';
        }
        echo '</table>
       
        </div>';
        echo'
        <form method=POST action = "http://kursovoy:3006/main.php?id='.$id.'">
            <button formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
            </form><br>
        ';
?>

>>>>>>> d2339953bc932f1f6d8126ba40ef90f0a70a71e7
