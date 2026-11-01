<?php

$host = "localhost";
$user = "kemboi";
$password = "Kipngeno@1536";
$database = "FurnitureShop";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}