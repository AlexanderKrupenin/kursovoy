<?php

echo'';
include "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE id_user = '$id'";

$result = mysqli_query($mysql, "SELECT users.role FROM users WHERE id_user = '$id'");
$role = mysqli_fetch_assoc($result);

if ($role["role"] == 1) {
    if ($result = $mysql->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк\
        include "admin.php";
        
    }
}

if ($role["role"] == 2) {
    if ($result = $mysql->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        include "verificator.php";
    }
}


if ($role["role"] == 3) {
    if ($result = $mysql->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        include "children.php";
    }
}


echo'
    </body>
    </html>';
?>