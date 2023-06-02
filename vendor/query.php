<?php
require_once 'connection.php';
/** @var \php_intern\vendor $link */

$query = 'SELECT * FROM users';
$res = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_assoc($res);


