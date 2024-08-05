<?php
$host = 'localhost'; // or your host
$username = 'harshitapc'; // your database username
$password = '505050'; // your database password
$dbname = 'sustainfood'; // our database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
