<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $donation = $_POST['donation'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $sql = "INSERT INTO donations (name, mobile, donation, address, message) VALUES ('$name', '$mobile', '$donation', '$address', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Donation submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
