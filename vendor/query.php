<?php
require_once 'connection.php';
/** @var \php_intern\vendor $link */

$query = 'SELECT * FROM users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));

//query id = 3
$user_id3 = mysqli_fetch_assoc(mysqli_query($link, 'SELECT * FROM users WHERE id=3'));

//query users where salary=900
$quer_users_900 = mysqli_query($link, 'SELECT * FROM users WHERE salary=900');
for ($users_salary900 = []; $row = mysqli_fetch_assoc($quer_users_900); $users_salary900[] = $row) ;

//query users age=23
$quer_users_age23 = mysqli_query($link, 'SELECT * FROM users WHERE age=23');
for ($users_age23 = []; $row = mysqli_fetch_assoc($quer_users_age23); $users_age23[] = $row) ;

//query users salary>400
$quer_users_salary400 = mysqli_query($link, 'SELECT * FROM users WHERE salary>400');
for ($users_salary400 = []; $row = mysqli_fetch_assoc($quer_users_salary400); $users_salary400[] = $row) ;


//query users salary>=500
$quer_users_salary500 = mysqli_query($link, 'SELECT * FROM users WHERE salary>=500');
for ($users_salary500 = []; $row = mysqli_fetch_assoc($quer_users_salary500); $users_salary500[] = $row) ;

//query users salary!=500
$quer_users_salaryNOT500 = mysqli_query($link, 'SELECT * FROM users WHERE salary!=500');
for ($users_salaryNOT500 = []; $row = mysqli_fetch_assoc($quer_users_salaryNOT500); $users_salaryNOT500[] = $row) ;

//query users salary<=500
$quer_users_salaryFEW500 = mysqli_query($link, 'SELECT * FROM users WHERE salary<=500');
for ($users_salaryFEW500 = []; $row = mysqli_fetch_assoc($quer_users_salaryFEW500); $users_salaryFEW500[] = $row) ;



for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) ;


