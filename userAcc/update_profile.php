<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="view_profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>My Profile</title>
    
  </head>
  <body >
    <header>
       <nav >
        <ul class="nav">
          <li class="item"><a class = "nav" href="main.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="item"><a class = "nav" href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About us</a></li>
          <li class="item"><a class = "nav" href="service.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Services</a></li>
      </ul>
    </nav>
  </header>
  <main>

    <form action="update.php" class="update" method="post">
      <label class="label">Username : </label>
      <input name="username" value="<?php echo $_SESSION['user'];?>"> </input>
      <br><br>
      <label class="label">First Name : </label>
      <input name="first" value="<?php echo $_SESSION['first'];?>"></input><br><br>
      <label class="label">Last Name : </label>
      <input name="last" value="<?php echo $_SESSION['last'];?>"></input><br><br>
      <label class="label">Email : </label>
      <input name="mail" value="<?php echo $_SESSION['mail'];?>"></input><br><br>
      <label class="label">Donation : </label>
      <label name="don"><?php echo $_SESSION['don'];?></label>
      <br>
      <button type="submit" id = "update">Edit Profile</button><br><br>
      <a name="cancel" class = "cancel" href="main.php">Cancel</a><br>
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
