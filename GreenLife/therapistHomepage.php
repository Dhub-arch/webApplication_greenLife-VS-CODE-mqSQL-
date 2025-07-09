<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
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
    



    .inside-image {
      background-image: url('bg2.png'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      position: relative;
      z-index: 0;
      margin-top: 0px;
    }

    .inside-image h1{
        font-size: 50;
    }

   
    /* Welcome Content */
    .content {
      position: relative;
      z-index: 1;
      color: rgb(228, 228, 228);
      text-align: left;
      padding-top: 200px;
      margin-left: 40px;
    }

    .content h1{
      font-family:Arial, Helvetica, sans-serif;
      font-weight: bolder;
      font-size: 90px;
    }

    .content p{
      font-size: 25px;

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


    <div class="inside-image">
        <!-- Welcome Section -->
    <div class="content">
      <h1>Welcome To Therapist page</h1>
      <p>Renowned health and lifestyle organization based in Colombo,
        dedicated to holistic wellness...
      </p>
      
    </div>
    </div>


    <!-- Footer Section -->
    <footer class="main-footer">
      <div class="container">
        <p>&copy; 2025 GreenLife Pvt Ltd. All rights reserved.</p>
      </div>
    </footer>
</body>
</html>