<?php
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

echo'<form method=POST action = "http://kursovoy:3006/index.php">
<button  formmethod=POST name=1 value=1 class = "button_main"">Назад</button>
</form><br></div>';
echo'
    </body>
    </html>';
?>