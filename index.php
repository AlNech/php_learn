<?php
require 'vendor/query.php';

/** @var \vendor\query $row */
/** @var \vendor\query $data */
?>


<!doctype html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h3>Request record from table users</h3>
        </div>
        <div class="content">
            <strong style="font-size: 20px">records</strong>
            <?php
            echo "<br/>" . $data[0]["name"] . "<br/>";
            echo $data[1]["name"] . " is " . $data[1]["age"] . " years old <br/>";
            echo $data[2]["name"] . " is " . $data[2]["age"] . " years old and he has " . $data[2]["salary"] . " salary<br/>";
            ?>
        </div>
        <div class="content">
            <strong style="font-size: 20px">user with id 3</strong>
            <?php
            echo $user_id3["name"];
            ?>
        </div>
        <div class="content">
            <strong style="font-size: 20px">users with salary 900</strong>
            <?php

            foreach ($users_salary900 as $one) {
                echo $one["name"] . '  ';
            };
            ?>
        </div>
        <div class="content">
            <strong style="font-size: 20px">users has salary more 400 </strong>
            <?php

            foreach ($users_salary400  as $one) {
                echo $one["name"] . '  ';
            };
            ?>
        </div>


        <div class="content">
            <strong style="font-size: 20px">users has salary more or equal 500 </strong>
            <?php

            foreach ($users_salary500  as $one) {
                echo $one["name"] . '  ';
            };
            ?>
        </div>

        <div class="content">
            <strong style="font-size: 20px">users has salary not equal 500 </strong>
            <?php

            foreach ($users_salaryNOT500  as $one) {
                echo $one["name"] . '  ';
            };
            ?>
        </div>

        <div class="content">
            <strong style="font-size: 20px">users has salary equal or a few 500 </strong>
            <?php

            foreach ($users_salaryFEW500  as $one) {
                echo $one["name"] . '  ';
            };
            ?>
        </div>
    </div>
</body>
</html>