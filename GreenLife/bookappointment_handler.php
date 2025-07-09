<?php
include 'DatabaseConnection.php';
session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];

$stmt = $conn->prepare("INSERT INTO booking (firstName, lastName, email, contact, service, date, time, people ) VALUES (?, ?, ?, ? ,? ,?, ? ,?)");
$stmt->bind_param("sssssssi", $firstName, $lastName, $email, $contact, $service, $date, $time, $people);

if ($stmt->execute()) {
    //$_SESSION['success_message'] = "Inquiry form successfully submitted!";
    header("Location: success_booking.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>