<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="homepageStyle.css">
     <link rel="stylesheet" href="headerFooter.css">
     <link rel="icon" type="image/x-icon" href="greenlifeFavIcon.jpg">

     <style>
      body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

      /*Below here are (styles for Booking form)*/

      .bookingFormDiv{
        background: #fff;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            
            
      }
      .bookingFormDiv h2{
        margin-bottom:20px;
      }

      .bookingFormDiv lable{
        display:block;
        margin-bottom:6px;
        margin-top: 15px;
      }
      .bookingFormDiv input{
            width: 100%;
            padding: 8px;
            margin-bottom:5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
      }
      .bookingFormDiv select{
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
      }

      .bookingFormDiv button{
        margin-top:20px;
        padding:10px 15px;
        background-color:black;
        color:white;
        border-radius:8px;
        cursor:pointer;
        border:none;
        width:100%;
      }

      .bookingFormDiv button:hover{
        background-color:limegreen;
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
          <button class="logout-btn" onclick="location.href='homepage.html'">BACK</button>
        </nav>
      </div>
    </header>

    <div class="pageNameSection">
      <h1>Booking Appointment</h1>
    </div>


    <div class="bookingFormDiv">
        <h2>Booking Form</h2>

     <form action="bookappointment_handler.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required>

        <label for="service">Select Service:</label>
        <select id="service" name="service" required>
            <option value="">Please choose your service</option>
            <option value="ayurweda">Ayurweda Therapy</option>
            <option value="yoga">Yoya class</option>
            <option value="massage">Massage therapy</option>
            <option value="nutrition">Nutrition Consultation</option>
            <option value="meditation">Meditation Sessions</option>
            <option value="physiotherapy">Physiotherapy</option>
        </select>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="people">Number of People:</label>
        <input type="number" id="people" name="people" min="1" required>

        <button type="submit">Book Now</button>
    </form>
    </div>


    

    <!-- Footer Section -->
    <footer class="main-footer">
      <div class="container">
        <p>&copy; 2025 GreenLife Pvt Ltd. All rights reserved.</p>
      </div>
    </footer>
</body>
</html>