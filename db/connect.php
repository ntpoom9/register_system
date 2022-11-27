<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "register_system";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

try {
    $con = new PDO($dsn, $username, $password);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}

require_once "db/controller.php";
require_once "db/auth.php";
$controller = new Controller($con);
$auth = new Auth($con);