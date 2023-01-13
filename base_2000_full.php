<?php
    include "db.php";   
$full_base = mysqli_query($mysql, "SELECT * FROM `sport_ploshchadki_full`");
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
	        <th>global_id</th>
            <th>ObjectName</th>
            <th>NameWinter</th>
            <th>PhotoWinter</th>
            <th>AdmArea</th>
            <th>District</th>
            <th>Address1</th>
            <th>Email</th>
            <th>WebSite</th>
            <th>HelpPhone</th>
            <th>HelpPhoneExtension</th>
            <th>WorkingHoursWinter</th>
            <th>мClarificationOfWorkingHoursWinter</th>	
            <th>HasEquipmentRental</th>
            <th>EquipmentRentalComments</th>
            <th>HasTechService</th>
            <th>TechServiceComments</th>
            <th>HasDressingRoom</th>
            <th>HasEatery</th>
            <th>HasToilet</th>
            <th>HasWifi</th>
            <th>HasCashMachine</th>
            <th>HasFirstAidPost</th>
            <th>HasMusic</th>
            <th>UsagePeriodWinter</th>
            <th>DimensionsWinter</th>
            <th>Lighting</th>
            <th>SurfaceTypeWinter</th>
            <th>Seats</th>
            <th>Paid</th>
            <th>PaidComments</th>
            <th>DisabilityFriendly</th>
            <th>ServicesWinter</th>
            <th>adress</th>
            <th>latitude</th>
            <th>longitude</th>
        </tr>';
        foreach ($full_base as $row) { //id_user`, `first_name`, `second_name`, `surname`, `role`, `login`, `password`
            echo '<tr>';
            echo '<td>' . $row["global_id"] . '</td>';
            echo '<td>' . $row["ObjectName"] . '</td>';
            echo '<td>' . $row["NameWinter"] . '</td>';
            echo '<td>' . $row["PhotoWinter"] . '</td>';
            echo '<td>' . $row["AdmArea"] . '</td>';
            echo '<td>' . $row["District"] . '</td>';
            echo '<td>' . $row["Address1"] . '</td>';
            echo '<td>' . $row["Email"] . '</td>';
            echo '<td>' . $row["WebSite"] . '</td>';
            echo '<td>' . $row["HelpPhone"] . '</td>';
            echo '<td>' . $row["HelpPhoneExtension"] . '</td>';
            echo '<td>' . $row["WorkingHoursWinter"] . '</td>';
            echo '<td>' . $row["мClarificationOfWorkingHoursWinter"] . '</td>';	
            echo '<td>' . $row["HasEquipmentRental"] . '</td>';
            echo '<td>' . $row["EquipmentRentalComments"] . '</td>';
            echo '<td>' . $row["HasTechService"] . '</td>';
            echo '<td>' . $row["TechServiceComments"] . '</td>';
            echo '<td>' . $row["HasDressingRoom"] . '</td>';
            echo '<td>' . $row["HasEatery"] . '</td>';
            echo '<td>' . $row["HasToilet"] . '</td>';
            echo '<td>' . $row["HasWifi"] . '</td>';
            echo '<td>' . $row["HasCashMachine"] . '</td>';
            echo '<td>' . $row["HasFirstAidPost"] . '</td>';
            echo '<td>' . $row["HasMusic"] . '</td>';
            echo '<td>' . $row["UsagePeriodWinter"] . '</td>';
            echo '<td>' . $row["DimensionsWinter"] . '</td>';
            echo '<td>' . $row["Lighting"] . '</td>';
            echo '<td>' . $row["SurfaceTypeWinter"] . '</td>';
            echo '<td>' . $row["Seats"] . '</td>';
            echo '<td>' . $row["Paid"] . '</td>';
            echo '<td>' . $row["PaidComments"] . '</td>';
            echo '<td>' . $row["DisabilityFriendly"] . '</td>';
            echo '<td>' . $row["ServicesWinter"] . '</td>';
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
