<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="cancel.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Login</title>
  </head>
  <body>
    <header>
       <nav >
        <ul class="nav">
          <li class="item"><a class = "nav" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="item"><a class = "nav" href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About us</a></li>
          <li class="item"><a class = "nav" href="service.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Services</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <form class="login-form" action="connect.php" method="post">
      <h3>LOGIN</h3>
      <br>
      <?php
        if(isset($_SESSION['msg']))
        {
          echo "<p>".$_SESSION['msg']."</p>";
          $_SESSION="  ";
        }
      ?>
      <input name="user" class = "user" type="text,email" placeholder=" Username/Email Id" required><br>
      <input name="pass" class="pass" type="password" placeholder=" Enter Password" required><br>
      <a href="forget.php">Forgot Password?</a><br>
      <button class = "lgbtn">Login</button><br>
      <p class="message">Not registered? <a class="createAcc" href="signup.html">Create an account</a></p>
      <a href="index.php" class = "back">Cancel</a><br>
    </form>
  </main>
  <footer>
    <div class="quicklinks">
      <ul class = "quicklinks">
        <!-- <li><p> Quick links </p></li> -->
             <li> <a href="#">Gallery</a> </li>
             <li> <a href="#">History</a> </li>
             <li> <a href="about.html"> About us</a> </li>
             <li> <a href="#">FAQs</a> </li>
             <li> <a href="#">Reviews</a> </li>
      </ul>
    </div>
    <div class="follow">
      <ul class = "follow">
        <!-- <li><p> Follow us on: </p></li> -->
         <!-- <li> <img src="images/instagram.png" alt="instalogo" height = "30" width = "30" > <a href="https://instagram.com"> __._trinkets </a> </li> -->
         <li> <a href="https://instagram.com"><span style="color:white; "> <i class="fab fa-instagram fa-lg"></i></span> __._smiles</a></li>
         <!-- <li> <img src="images/facebook.png" alt="" height = "30" width = "30" > <a href="https://facebook.com">_trinketsFB</a> </li> -->
         <li><a href="https://facebook.com"> <span><i class="fab fa-facebook-square fa-lg"></i></span> _smilesFB</a> </li>
         <!-- <li>  <img src="images/linkedin.png" alt="" height = "30" width = "30" ><a href="https://linkedin.com"> trinketsOfficial</a> </li> -->
         <li> <a href="https://linkedin.com"> <span><i class="fab fa-linkedin fa-lg"></i></span> smilesOfficial</a> </li>
      </ul>
    </div>
    <div class="email">
      <ul class = "email">
        <!-- <li><p>Mail us on:</p></li> -->
        <li>  <i class="fas fa-envelope" ></i> smiles.helpdesk@gmail.com</li>
         <li><i class="fa fa-phone-alt" > </i> 0755-003344</li>
      </ul>
    </div>
  </footer>
  <div class="bottom">
     <p ><i class="far fa-copyright" style="margin-top:50px; color:grey">  copyright</i></p>
  </div>
  </body>
</html>
