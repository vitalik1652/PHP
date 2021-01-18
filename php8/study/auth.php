<?php
$login = filter_var(trim($_GET['login']));
$pass = filter_var(trim($_GET['pass']));

$pass = md5($pass);
$mysql = new mysqli('localhost','root','','patient');

$result = $mysql->query("SELECT * FROM `users` WHERE 
`login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if($user == false) {
    echo "we don't find you";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");




$mysql->close();


header('Location:/study/patient.php');

