<?php
include 'DatabaseConnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST["service"];
    $whatsapp = $_POST["whatsapp"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO messages (service, whatsapp, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $service, $whatsapp, $email, $message);

    if ($stmt->execute()) {
        // ✅ Output alert using JS and redirect after it
        echo "<script>
                alert('Message sent successfully!');
                window.location.href = 'services.php';
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
}
?>
