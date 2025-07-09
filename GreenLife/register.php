<?php
include 'DatabaseConnection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$gender = $_POST['gender'];

if ($password !== $cpassword) {
    die("Passwords do not match!");
}

$sql = "INSERT INTO users (first_name, last_name, username, password, gender)
        VALUES ('$fname', '$lname', '$username', '$password', '$gender')";

if ($conn->query($sql) === TRUE) 
{
    header("Location:success.html");
    exit; 
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>