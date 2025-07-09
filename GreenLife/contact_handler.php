<?php
include 'DatabaseConnection.php';
session_start();

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];

$stmt = $conn->prepare("INSERT INTO inquiry (fullname, email, contact, comment) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $contact, $comment);

if ($stmt->execute()) {
        // ✅ Output alert using JS and redirect after it
        echo "<script>
                alert('Inquiry form sucessfull submitted!');
                window.location.href = 'contact.php';
              </script>";
        exit;
    } else {
        echo "<script>
        alert('Failed to send message. Please try again.');
        window.location.href = 'services.php';
        </script>";
    }

    $stmt->close();
    $conn->close();
?>
