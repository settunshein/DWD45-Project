<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'P@ssw0rd');
define('DB_NAME', 'php_online_car_rental_system');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (! $conn) {
    die('Connection Failed : ' . mysqli_connect_error());
}
