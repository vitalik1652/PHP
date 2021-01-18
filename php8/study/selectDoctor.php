<?php

$problem = $_GET['problem'];
$chooseDoctor = $_GET['chooseDoctor'];
$name = $_COOKIE['user'];

if(mb_strlen($problem) == 0 ){
    echo "empty in symptom";
    exit();}

$mysql = @new Mysqli('localhost', 'root', '', 'patient');
if ($mysql->connect_errno) exit('connect error');
$mysql->query("INSERT INTO `problems` (`problem`, `doctor`,`patient`)
    VALUES('$problem','$chooseDoctor','$name')");
$mysql->close();



header('Location:/study/patient.php');


