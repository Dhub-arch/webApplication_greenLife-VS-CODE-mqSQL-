<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GreenLife Wellness Center</title>
  <script src="loginValidation.js" defer></script>
  <link rel="stylesheet" href="getStartedStyle.css" />
  <link rel="icon" type="image/x-icon" href="">

  <style>
    
    .input1{
      width: 90%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border: solid 2px #ccc;
    border-radius: 7px;
    }
    .input1:hover{
      border: solid 2px #064833;
    }

    #submit{
      width: 100%;
    background-color: #064833;
    color: white;
    padding: 14px 20px;
    margin: 20px 0 15px;
    border: none;
    
    cursor: pointer;
    border-radius: 7px;
    }
    #submit:hover{
      background-color:rgb(73, 193, 77);
      font-weight:bold;
    }

    .divLoginForm p a{
    text-decoration: none;
    }
     .divLoginForm p a:hover{
      text-decoration: underline;
     }
     

    
  </style>
</head>
<body>
  <header>
    <div class="headerContainer">
      <div class="logo">
        <a href="getStarted.html"><img src="light_logo_remvovedBG.png" alt="GreenLife_Logo" width="100" height="100" /></a>
      </div>

      <!--<div class="headerButtons">
  <a href="getStarted.html"><button type="button" class="headerLoginButton">Back</button></a>
  <a href="register.html"><button type="button" class="headerSignupButton">SignUp</button></a>
</div>
    </div>-->
      
  </header>


<div class="container">
  <div id="divText" style=" width: 700px;">
    <!--<p id="p1">Login to Green Life wellness center</p>-->
    <h1>Login to <span style="color: #08543c;">Green Life</span> wellness center</h1>
    <p id="p2">Renowned health and lifestyle organization based in Colombo,
         dedicated to holistic wellness. The center offers services such as yoga, meditation,
          nutritional guidance, and therapy, blending traditional healing with modern techniques.
           With experienced professionals and a supportive environment, GreenLife helps individuals
            achieve physical, mental, and emotional well-being.</p>
  </div>
  

  
  <div class="divImage">
    <div class="divLoginForm">
      <span class="close" onclick="window.location.href='getStarted.html'">&times;</span>
        <form action="login_handler.php" method="post" onsubmit="return validation()">
            <h2>Welcome</h2>
            <p>Please login with your information</p>

            <label for="username">Username</label>
            <input  class="input1" type="text" id="username" name="username">

            <label for="password">Password</label>
            <input  class="input1" type="password" id="password" name="password">
            
        
            <input type="submit" id="submit" value="login">
            <p>Don't have a accout? <a href="register.html">Create account</a></p>

            
        </form>
    
  </div>
  </div>
  
</div>

<?php if (!empty($error)) : ?>
    <script>
        alert("Wrong username or passowrd");
    </script>
    <?php endif; ?>

    
</body>
</html>
