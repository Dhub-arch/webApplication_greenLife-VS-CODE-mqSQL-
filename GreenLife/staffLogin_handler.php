<?php
session_start();
include 'DatabaseConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM staff WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Now it's safely defined

        if ($row["user_type"] == "admin") {
            //echo 'admin homepage';
            header("Location: adminHomepage.php");
            exit();
            exit();
        } elseif ($row["user_type"] == "therapist") {
            //echo 'staff homepage';
            header("Location:therapistHomepage.php");
            exit();
        } 
    } else {
         echo "<script>
        alert('Failed to send message. Please try again.');
        window.location.href = 'staffLogin.php';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
