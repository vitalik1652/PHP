<?php

$login = filter_var(trim($_GET['login']));
$pass = filter_var(trim($_GET['pass']));
$name = filter_var(trim($_GET['name']));


if(mb_strlen($login) < 2 || mb_strlen($login) > 20){
    echo "wrong size for login";
    exit();}
    if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10){
    echo "wrong size for password, min 2 and max 10 symbols";
    exit();}
    if(mb_strlen($name) ==0 || mb_strlen($name) > 20){
    echo "wrong size for name";
    exit();}


    $pass = md5($pass);

    $mysql = new mysqli('localhost','root','','patient');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login','$pass','$name')");
    $mysql->close();

header('Location:/study/authorization.html');




