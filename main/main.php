<?php
session_start();
$_SESSION['is_enrolled']="false";
?>

<!DOCTYPE html>
<html>
<head>   
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
 <div class="slideshow-container">
      
    <div class="show fade">
      
      <img src="../media/img2.jpg" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>
    
    <div class="show fade">
      <!---<div class="numbertext">2 / 3</div>--->
      <img src="../media/img1.jpg" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
     
    </div>
    
    <div class="show fade">
      <!---<div class="numbertext">3 / 3</div>--->
      <img src="../media/img3.jfif" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>
    
    <div class="show fade">
     
      <img src="../media/img4.jfif" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>

    <div class="show fade">
      
      <img src="../media/img5.jpg" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>

    <div class="show fade">
      
      <img src="../media/img7.jpg" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>

    <div class="show fade">
      
      <img src="../media/img8.jpg" height="620" width="100%">
      <div class="text"><p>WE CARE FOR YOU , YOU CARE FOR THEM.</p></div>
      <a href="#courses" alt="View Courses">View Courses</a>
    </div>

    
    </div>
    <h1 align="center">Our Sponsors</h1>
    <div class="spon">
      <table id="sponstab" align="center" cellspacing="50">
        <tr>
          <td> <a href="https://www.myntra.com/"> <img src="../media/myntra.png" alt="myntra"  height="200" width="200"> </a> </td>
          <td> <a href="https://www.amazon.in/"> <img src="../media/amazon.jfif" alt="amazon" height="200" width="200"></a> </td>
          <td> <a href="https://www.udemy.com/"> <img src="../media/udemy.png" alt="udemy" height="200" width="200"></a> </td>
          <td> <a href="https://www.walmart.com/"> <img src="../media/walmart.png" alt="walmart" height="200" width="200" ></a> </td>
        </tr>
        <tr>
          <td> <a href="https://www.coca-colacompany.com/" class="sp"> <img src="../media/cocacola.jfif" alt="cocacola" height="200" width="200"> </a></td>
           <td><a href="https://www.mahindra.com/" class="sp"> <img src="../media/mahindra.png" alt="mahindra" height="200" width="200"> </a> </td>
           <td><a href="https://www.nestle.in/" class="sp"> <img src="../media/nestle.jfif" alt="nestle" height="200" width="200"></a></td>
           <td><a href="http://topntown.com/" class="sp"> <img src="../media/topntown.jfif" alt="topntown" height="200" width="200"></a></td>
        </tr>
      </table>

    </div>
  
    <div class="courses" id="courses">
      <table align="right" cellspacing="40" id="pr_funcs">
        <tr>
          <td><a href="view_profile.php"  class="prof_func"><p>View Profile</p></a></td>
          <td><a href="update_profile.php" class="prof_func"><p>Update Profile</p></a></td>
          <td><a href="logout.php" class="prof_func"><p>Logout</p></a></td>
        </tr>
      </table>
      <table align="center" cellspacing="50" id="cats">
        <tr>
          <td> <a href="../courses/tech.php"> <img src="../media/technical.jpg" alt=""  height="250" width="250"> <p>Technical</p> </a> </td>
          <td> <a href="../courses/social.php"> <img src="../media/social.jpg" alt="" height="250" width="250"> <p>Social media</p> </a> </td>
          <td> <a href="../courses/cooking.php"> <img src="../media/cooking.jpg" alt="" height="250" width="250"> <p>Cooking</p> </a> </td>
          <td> <a href="../courses/music.php"> <img src="../media/music.jpg" alt="" height="250" width="250"> <p>Music</p> </a> </td>
        </tr>
        <tr>
          <td> <a href="../courses/marketing.php"> <img src="../media/marketing.jpg" alt="" height="250" width="250"> <p>Marketing</p> </a> </td>
          <td> <a href="../courses/content.php"> <img src="../media/content.jpg" alt="" height="250" width="250"> <p>Content writing</p> </a> </td>
          <td> <a href="../courses/video.php"> <img src="../media/video.jpg" alt="" height="250" width="250"> <p>Video editing</p> </a> </td>
          <td> <a href="../courses/film.php"> <img src="../media/film.jpg" alt="" height="250" width="250"> <p>Film making</p> </a> </td>
        </tr>
      </table>
    </div>
    
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
           <li> <a href="https://instagram.com"><span> <i class="fab fa-instagram fa-lg"></i></span> __._smiles</a></li>
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
       <p ><i class="far fa-copyright" style="margin-top:50px; color:grey">  copyrights S.M.I.L.E.S</i></p>
    </div>
    <script src='main.js'>
    </script>
    
</body>
    
   
