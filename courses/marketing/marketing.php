
<?php
session_start();
$_SESSION['courseId'] = 106;//course id of marketing courses
include "connection.php";
include "enroll1.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marketing</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="layoutC.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script>
      function enrl()
      {
        var is_enroll = "<?php echo $_SESSION['is_enrolled']; ?>";
        if(is_enroll=="true") 
        {
          document.getElementById("enrol").innerHTML = "Enrolled";
          document.getElementById("msg").innerHTML = " ";
          document.getElementById("quizLink").setAttribute("href","marketingQuiz.php");
        }
        else{
          document.getElementById("enrol").innerHTML = "Enroll Now";
          document.getElementById("msg").innerHTML = "Kindly Enroll to attempt the quiz";
        }
      }
    </script>
    <style>
      button#enrol {
        height:50px;
        width:25%;
        background-color:orange;
        border-style:solid;
        border-width:3px;
        border-color:orange;
        border-radius:25px;
        font-size:20px;
      }
      button#enrol:hover{
          background-color:#d2691e;
          border-color:#d2691e;
      }
      p#msg{
        font-size:1.8em;
      }
    </style>
  </head>
  <body onload="enrl()">
    <header>
      <nav id="navbar">
          <ul>
              <li class="item"><a href="main.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
              <li class="item"><a href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About us</a></li>
              <li class="item"><a href="service.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Services</a></li>
          </ul>
         </nav>
    </header>
    <main>
      <div class="course">
        <div class="vdo">
          <video src="Digital Marketing In 5 Minutes _ What Is Digital Marketing_ _ Learn Digital Marketing _ Simplilearn.mp4" width="800px" controls >
              
          </video>
        </div>
        <p id="msg"></p>
        <form action="" >
          <button id="enrol" type="submit" formaction="enroll.php"></button>
        </form>
        <div class="contents">
          <div class="content">
          <p> <a id="quizLink" style="text-decoration:none; color:black"> Social Media Marketing: Attempt Quiz</a> </p><p class="time">MM:20</p>
          </div>
        </div>
      </div>
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
  </body>
</html>
