<?php
include_once 'DatabaseConnection.php';


// DB Connection
$servername = "localhost";
$username = "root";       // default XAMPP username
$password = "";           // default XAMPP password is empty
$database = "greenlife";



// Fetch data
$sql = "SELECT * FROM staff ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Staf accounts</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    table {
      width: 60%;
      border-collapse: collapse;
      margin: 20px auto;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #1e293b;
      color: white;
    }
  </style>
</head>
<body>

  <h2 style="text-align: center;">staff account Information</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>username</th>
      <th>password</th>
      <th>user type</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["username"]) . "</td>
                    <td>" . htmlspecialchars($row["password"]) . "</td>
                    <td>" . htmlspecialchars($row["user_type"]) . "</td>
                    
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No staff details found</td></tr>";
    }
    $conn->close();
    ?>
  </table>

</body>
</html>





  <!---->
