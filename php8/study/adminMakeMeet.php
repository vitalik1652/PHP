<?php
$doctorName = $_GET['doctorName'];
$patientName = $_GET['patientName'];
$date = $_GET['date'];



$mysql = new mysqli('localhost','root','','patient');
$mysql->query("INSERT INTO `meeting` (`doctorName`, `patientName`, `dateMeet`)
    VALUES('$doctorName','$patientName','$date')");
$result = $mysql->query("DELETE FROM `problems` WHERE `patient` = '$patientName'");
$mysql->close();

header('Location:/study/adminScreen.php');