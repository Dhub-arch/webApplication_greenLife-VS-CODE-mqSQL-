<?php
include_once 'DatabaseConnection.php';
// Fetch data
$sql = "SELECT * FROM booking WHERE service = 'nutrition'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM messages WHERE service = 'nutrition'";
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
           <li><a href="therapistHomepage.php">Home</a></li><!--ayurweda yoga massage nutrition meditation physiotherapy-->
            <li><a href="therapist_ayurwedaPage.php">ayurweda</a></li>
            <li><a href="therapist_yogaPage.php">yoga</a></li>
            <li><a href="therapist_massagePage.php">massage</a></li>
            <li><a href="therapist_nutritionPage.php">nutrition</a></li>
            <li><a href="therapist_meditationPage.php">meditation</a></li>
            <li><a href="therapist_physiotherapyPage.php">physiotherapy</a></li>
          </ul>
          <button class="logout-btn" onclick="location.href='portal.html'">Logout</button>
        </nav>
      </div>
    </header>



    <div class="pageNameSection">
      <h1>Client activity in nutrition</h1>
    </div>

    <h2 style="text-align: center;">Booking details of clients for nutrition consultion</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Contacts</th>
      <th>Service</th>
      <th>Date</th>
      <th>Time</th>
      <th>No. of People</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["firstName"]) . "</td>
                    <td>" . htmlspecialchars($row["lastName"]) . "</td>
                    <td>" . htmlspecialchars($row["contact"]) . "</td>
                    <td>" . htmlspecialchars($row["service"]) . "</td>
                    <td>" . htmlspecialchars($row["date"]) . "</td>
                    <td>" . htmlspecialchars($row["time"]) . "</td>
                    <td>" . htmlspecialchars($row["people"]) . "</td>
                    
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No Booking records are found details found</td></tr>";
    }
    
    ?>
  </table>

    <hr>

    <h2 style="text-align: center;">Message details of clients from nutrition consultation</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Type of service</th>
      <th>Whatsapp number</th>
      <th>Email</th>
      <th>Message</th>
      <th>sent time</th>
    </tr>
    <?php
    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["service"]) . "</td>
                    <td>" . htmlspecialchars($row["whatsapp"]) . "</td>
                    <td>" . htmlspecialchars($row["email"]) . "</td>
                    <td>" . htmlspecialchars($row["message"]) . "</td>
                    <td>" . htmlspecialchars($row["sent_at"]) . "</td>
            
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