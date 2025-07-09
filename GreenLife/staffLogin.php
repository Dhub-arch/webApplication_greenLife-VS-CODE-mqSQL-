<?php
session_start();
$error = "";

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']); // clear after showing
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenLife Wellness Center</title>
    <link rel="stylesheet" href="portal.css" />
    <link rel="icon" type="image/x-icon" href="greenlifeFavIcon.jpg">
    <script src="loginValidation.js" defer></script>
    <style>
        .portalLoginDiv{
            display: block;
            justify-content:center;
            margin-top:150px;
        }
        #loginBtn{
            border-radius:8px;
        }
    </style>
</head>
<body>
    

  <div class="portalLoginDiv">
      <span class="close" onclick="window.location.href='portal.html'">&times;</span>
        <form action="staffLogin_handler.php" method="post" onsubmit="return validation()">
            <h2>Staff Login</h2>
            <p>Please login with your information</p>

            <label for="username">Username</label>
            <input  class="input1" type="text" id="username" name="username">

            <label for="password">Password</label>
            <input  class="input1" type="password" id="password" name="password">
            
        
            <input id="loginbtn" type="submit" value="login">
            

            
        </form>
    
  </div>

  <?php if (!empty($error)) : ?>
    <script>
        alert("Wrong username or passowrd");
    </script>
    <?php endif; ?>
    
</body>
</html>