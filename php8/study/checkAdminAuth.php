<?php
$loginAdmin = filter_var(trim($_GET['loginAdmin']));
$passAdmin = filter_var(trim($_GET['passAdmin']));


$mysqlAdmin = new mysqli('localhost','root','','patient');

$resultAdmin = $mysqlAdmin->query("SELECT * FROM `admin` WHERE 
`login` = '$loginAdmin' AND `pass` = '$passAdmin'");

$admin = $resultAdmin->fetch_assoc();

if($admin == false) {
    echo "we don't find you";
    exit();
}

setcookie('user', $admin['name'], time() + 600, "/");




$mysqlAdmin->close();


header('Location:/study/adminScreen.php');