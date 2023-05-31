<meta charset="utf-8">

<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'test';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = 'SELECT * FROM users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);


$row = mysqli_fetch_assoc($res);
var_dump($row);
?>
