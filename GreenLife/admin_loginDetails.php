<?php
include_once 'DatabaseConnection.php';
// Fetch data
$sql = "SELECT * FROM users ";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM staff ";
$result2 = $conn->query($sql2);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="table_style.css">
     <link rel="icon" type="image/x-icon" href="greenlifeFavIcon.jpg">
     <style>
        body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Header Styles */
    .main-header {
      background-color: #1e293b;
      color: white;
      padding: 20px 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      
    }

    .main-header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 0px;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #ffffff;
    }

    .nav {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    .nav-links a {
      text-decoration: none;
      color: #ffffff;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #38bdf8;
    }

    .logout-btn {
      background-color: #ef4444;
      color: #fff;
      border: none;
      padding: 8px 14px;
      font-weight: 500;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: #dc2626;
    }





    .pageNameSection{
      background-color:#5b8ee0; /* Light blue background */
    padding: 18px;
    margin: 0px auto;
    border-radius: 0px;
    width: 100%;
    font-family: Arial, sans-serif;
    }
    .pageNameSection h1{
      text-align: center;
    }
    




   

/* Footer Styles */
    .main-footer {
      background-color: #1e293b;
      color: #ffffff;
      text-align: center;
      padding: 15px 0;
      font-size: 0.95rem;
      margin-top: 40px;
    }

    .main-footer .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      text-align: center;
    }

     </style>
</head>
<body>
     <!-- Header Section -->
    <header class="main-header">
      <div class="container">
        <h1 class="logo">GreenLife</h1>
        <nav class="nav">
          <ul class="nav-links">
            <li><a href="adminHomepage.php">Home</a></li>
            <li><a href="admin_clientDetails.php">Client details</a></li>
            <li><a href="admin_inquiryDetails.php">Inquiry details</a></li>
            <li><a href="">Login details</a></li>
          </ul>
          <button class="logout-btn" onclick="location.href='portal.html'">Logout</button>
        </nav>
      </div>
    </header>



    <div class="pageNameSection">
      <h1>Loging details</h1>
    </div>

    <h2 style="text-align: center;">Login details of clients</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Gender</th>
      <th>Create Time</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["first_name"]) . "</td>
                    <td>" . htmlspecialchars($row["last_name"]) . "</td>
                    <td>" . htmlspecialchars($row["username"]) . "</td>
                    <td>" . htmlspecialchars($row["password"]) . "</td>
                    <td>" . htmlspecialchars($row["gender"]) . "</td>
                    <td>" . htmlspecialchars($row["created_at"]) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No Booking records are found details found</td></tr>";
    }
    
    ?>
  </table>

    <hr>

    <h2 style="text-align: center;">Login details of clients</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Staff username</th>
      <th>Staff password</th>
      <th>Account type</th>
    </tr>
    <?php
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["username"]) . "</td>
                    <td>" . htmlspecialchars($row["password"]) . "</td>
                    <td>" . htmlspecialchars($row["user_type"]) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No messages are found  </td></tr>";
    }
    $conn->close();
    ?>
  </table>


    



    <!-- Footer Section -->
    <footer class="main-footer">
      <div class="container">
        <p>&copy; 2025 GreenLife Pvt Ltd. All rights reserved.</p>
      </div>
    </footer>
</body>
</html>