<?php

$host = "db01.dbhost.dev";
$username = "user_4568aw3q9";
$password = "p4568aw3q9";
$database = "db_4568aw3q9";
$port = 5051;

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>