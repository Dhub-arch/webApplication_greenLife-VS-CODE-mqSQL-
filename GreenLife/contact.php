<?php

?>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="icon" type="image/x-icon" href="greenlifeFavIcon.jpg">
   <!-- <link rel="stylesheet" href="getStartedStyle.css">-->
    <script src="inquiryValidation.js" defer></script>

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


    


.container {
  display: flex;
  justify-content: space-between; /* Pushes divText left, divImage right */
  align-items: center;            /* Vertically centers both */
  padding: 40px;
  
  align-items: flex-start; /* Aligns top lines */
  gap: 20px; /* Optional spacing between text and image */
  
}

        /*CSS code for registerformdiv*/

        .regFormDiv{
  background-color: #003220;
}

.divRegForm{
  position: relative;
  border:none;
  color: #000000;
  background-color:rgb(255, 255, 255);
  padding: 5px;
  border-radius: 20px;
  margin: auto; /* centers the div on the page */
  text-align: left;
  height: 370px;
  width: 400px;
  /*box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); /* This adds the shadow */*/
  transition: box-shadow 0.1s ease;
}

.divRegForm form {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.divLoginForm{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.input1 {
  width: 100%;
  margin-bottom: 10px;
}



       
        #submit{
            width: 100%;
    background-color: #064833;
    color: white;
    padding: 14px 20px;
    margin: 20px 0 15px;
    border: none;
            text-align: center;
            font-weight: bold;
            justify-content: center;
            position: relative;
             cursor: pointer;
           
        }

        #submit:hover{
          background-color:rgb(73, 193, 77);
      font-weight:bold;
        }
        

        .p3 img{
          height:15px;
          width: 15px;
          margin-left:20px;
          margin-right:10px;s
        }

        .p3{
          font-size:18px;
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
    .main-footer .container{
      padding-left:650px;
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
      <h1>GreenLife contacts</h1>
    </div>

    <div class="container">
  <div id="divText" style=" width: 700px;">
    <!--<p id="p1">Welcome to Green Life wellness center</p>-->
    <h2>Contact us</h2>
    <p id="p2">Feel free to drop a message through Inquiry form like
       the old fashion way or countact us throughother contact media
      </p>

      <p class="p3">
        <img src="whatsapp.png" alt="whatsapp iocon" >whatsapp: 078 774 2860
      </p>

       <p class="p3">
        <img src="gmail.png" alt="whatsapp iocon" >Gmail: care@greenlife.com
      </p>

       <p class="p3">
        <img src="phone-call.png" alt="whatsapp iocon" >Contact: 037 229 8527
      </p>
          
      <p class="p3">
        <img src="instagram.png" alt="instagram iocon" >instagram: @greenlifehealth
      </p>

       <p class="p3">
        <img src="linkedin.png" alt="linkedin iocon" >linkedin: Greenlife Health & Wellness
      </p>

       <p class="p3">
        <img src="twitter.png" alt="twitter iocon" >twitter: @greenlifehq
      </p>
            
  </div>
  
  <div class="divRegForm">
        <form action="contact_handler.php" method="post" onsubmit=" return validation()">
          
            <h2>Inquiry form</h2>

            <label for="fullname">Full name</label>
            <input class="input1" type="text" id="fullname" name="fullname">

            <label for="email">Email</label>
            <input  class="input1" type="email" id="email" name="email">

            <label for="contact">Phone Number</label>
            <input class="input1" type="text" id="contact" name="contact">

            <label for="comment">Comment</label>
            <textarea class="input1" id="comment" name="comment" rows="5" cols="40" required></textarea>

            
            


            <input class="input1" type="submit" value="submit" id="submit">

        </form>
    
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