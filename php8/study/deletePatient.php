<?php
$deletePatient = $_GET['deletePatient'];
$mysql = new mysqli('localhost','root','','patient');
$result = $mysql->query("DELETE FROM `users` WHERE `name` = '$deletePatient'");
$result1 = $mysql->query("DELETE FROM `problems` WHERE `patient` = '$deletePatient'");
$result2 = $mysql->query("DELETE FROM `meeting` WHERE `patientName` = '$deletePatient'");
$mysql->close();
//print_r($result);
header('Location:/study/adminScreen.php');

