<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$userId = $_SESSION['userId'];
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query = "SELECT * FROM `users` WHERE `userId`='$userId' ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
      if($row=mysqli_fetch_assoc($result))
      {
        
          $_SESSION['first']=$row['first_n'];
          $_SESSION['last']=$row['last_n'];
          $_SESSION['mail']=$row['email'];
          $_SESSION['don']=$row['tot_donation'];
         
      }
          
    }

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

    <div class="det">
      <label class="label">Username : </label>
      <label id="username"><?php echo $_SESSION['user'];?> </label>
      <br><br>
      <label class="label">First Name : </label>
      <label id="first" ><?php echo $_SESSION['first'];?></label><br><br>
      <label class="label">Last Name : </label>
      <label id="last"><?php echo $_SESSION['last'];?></label><br><br>
      <label class="label">Email : </label>
      <label id="mail"><?php echo $_SESSION['mail'];?></label><br><br>
      <label class="label">Donation : </label>
      <label id="don"><?php echo $_SESSION['don'];?></label>
      <br>
      <a href="forget.php" id="update" style="width:50%">Reset Password</a><br>
      <a href="update_profile.php" id = "update">Edit Profile</a><br><br>
    </div>
      <table class="info" align="center" cellspacing="50">
        <?php
        if($conn)
        {
          $userId = $_SESSION['userId'];
          $query = "SELECT * FROM `users`,`urc`,`courses` WHERE `users`.`userId`=`urc`.`userId` and `courses`.`cId` = `urc`.`cId` and `users`.`userId` = '$userId'";
          $res = mysqli_query($conn,$query);
          if(mysqli_num_rows($res)>0)
          {
            echo "<h3>Courses you have enrolled in</h3>";
                echo "<tr>
                <th>CourseId</th>
                <th>Course Name</th>
                <th>Donation</th>
                </tr>";
                ;
              while($row = mysqli_fetch_assoc($res))
              {
                echo "<tr>
                <td id='cid'>
                  ".$row['cId']."
                </td>
                <td id='crsname'>
                  ".$row['course_name']."
                </td>
                <td id='don'>
                  Rs.".$row['donation']."
                </td>
                </tr>";
              }
              $res -> free_result();
          }
          else
          {
            echo "<h1>No courses enrolled</h1>";
          }
        }
        else
        {
          echo "sorry something went wrong";
        }
        
         ?>
      </table>

    
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
