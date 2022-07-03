<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "delivery_website";


$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Please Check your database connection" .mysqli_error());
}
