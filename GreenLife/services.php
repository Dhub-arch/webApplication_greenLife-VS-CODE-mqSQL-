<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Service Page Mockup</title>
  
   <link rel="stylesheet" href="servicesStyle.css">

  <style>
    

body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
    /* Header Styles */
    .main-header {
      background-color: #003220;
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
      color: #9bff04;
    }

    .logout-btn {
      background-color: #ffffff;
      color: rgb(0, 0, 0);
      border: none;
      padding: 8px 14px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: #ff0000;
      color: white;
      font-weight: bold;
    }
    

   .pageNameSection{
      background-color:#5be071; /* Light blue background */
    padding: 18px;
    margin: 0px auto;
    border-radius: 0px;
    width: 100%;
    font-family: Arial, sans-serif;
    }
    .pageNameSection h1{
      text-align: center;
    }

    .card:hover{
       background-color: rgb(238, 255, 232);
    }


    /* Footer Styles */
     .main-footer {
      background-color: #003220;
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
            <li><a href="homepage.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="wellnesspractices.html">Wellness Practices</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <button class="logout-btn" onclick="location.href='getStarted.html'">Logout</button>
        </nav>
      </div>
    </header>



    
    <div class="pageNameSection">
      <h1>GreenLife services</h1>
    </div>


  <div class="container">

    <!-- Service Card 1 -->
    <div class="card">
      <div class="card-text">
        <h3>Ayurvedic Therapy</h3>
        <p>Traditional healing system using herbal oils and techniques to restore balance and harmony.</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="Ayurveda.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

    <!-- Service Card 2 -->
    <div class="card">
      <div class="card-text">
        <h3>Yoga Classes</h3>
        <p>mprove flexibility, strength and mental clarity with our expert instructors.</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="yoga.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

    <!-- Service Card 3 -->
    <div class="card">
      <div class="card-text">
        <h3>Massage Therapy</h3>
        <p>Relieve muscle tension and promote relaxation with our therapeutic massage techniques..</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="therapy.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

    <!-- Service Card 4 -->
    <div class="card">
      <div class="card-text">
        <h3>Nutrition Consultation</h3>
        <p>Personalized dietary plans to improve your health and achieve your wellness goals.</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="Nutrition.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

    <!-- Service Card 5 -->
    <div class="card">
      <div class="card-text">
        <h3>Meditation Sessions</h3>
        <p>Learn techniques to reduce stress and improve mental focus and clarity.</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="Meditation.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

    <!-- Service Card 6 -->
    <div class="card">
      <div class="card-text">
        <h3>Physiotherapy</h3>
        <p>Professional treatment to restore movement and function when affected by injury.</p>
        <div class="card-buttons">
          <button onclick="location.href='bookappointment.php'">Book now</button>
          <button onclick="location.href='message.php'">Message</button>
        </div>
      </div>
      <div class="card-image">
        <img src="Physiotherapy.jpg" alt="Service Image">
        <div class="card-info">
          <span>🕒 30min-40min</span>
          <span><strong>LKR 5200</strong></span>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer Section -->
    <footer class="main-footer">
      <div class="container">
        <p>&copy; 2025 GreenLife Pvt Ltd. All rights reserved.</p>
      </div>
    </footer>
