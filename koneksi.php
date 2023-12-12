<?php
$hostname       = "localhost";
$username       = "root";
$password       = "";
$database       = "elmuna";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Database tidak terkoneksi<br>" . $conn->connect_error);
}
