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

      .bookingFormDiv label{
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
      .bookingFormDiv textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
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
      <h1>Message therapist</h1>
    </div>


    <div class="bookingFormDiv">
        <h2>Drop message</h2>

     <form action="message_handler.php" method="post">
        <label for="service">Mesage to:</label>
        <select id="service" name="service" required>
            <option value="">Please choose your service</option>
            <option value="ayurweda">Ayurweda Therapy (Mr.example)</option>
            <option value="yoga">Yoya class (Mr.example)</option>
            <option value="massage">Massage therapy (Mr.example)</option>
            <option value="nutrition">Nutrition Consultation v</option>
            <option value="meditation">Meditation Sessions (Mr.example)</option>
            <option value="physiotherapy">Physiotherapy v</option>
        </select>

      <label for="whatsapp">WhatsApp Number:</label>
      <input type="tel" id="whatsapp" name="whatsapp" placeholder="+94XXXXXXXXX" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="example@email.com" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit" id="submit">Send</button>
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