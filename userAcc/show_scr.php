<?php
session_start();
?>

<html>
<head>
  <title>
    Smiles - Quiz Result 
  </title>
  <link rel="stylesheet" href="showMessage.css">
</head>
</html>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

     $score = $_COOKIE['Score'];
     
    if($score<5)
    {
        echo "<div class='res'>
         <h3>You must score atleast 5 to pass the quiz and donate</h3> 
         <a href='quiz.php'> Back </a>
      </div>
      ";    
    }
    else{
        $donation = $score*5;
        $userId = $_SESSION['userId'];
        $course_Id = $_SESSION['courseId'];
        $up_query= "UPDATE `users` SET `tot_donation`=`tot_donation`+'$donation' WHERE `userId`='$userId' ";
        mysqli_query($conn,$up_query);
        $up_urc = "UPDATE `urc` SET `donation`=`donation`+'$donation' WHERE `userId` = '$userId' and `cId` = '$course_Id'";
        mysqli_query($conn,$up_urc);
        $sel_query ="SELECT  `tot_donation` FROM `users` WHERE `userId` = '$userId' ";
        $result=mysqli_query($conn,$sel_query);
        $row=mysqli_fetch_assoc($result);
        $tot_donation=$row['tot_donation'];
        echo "<div class='res'>
             <h3>Your scores are $score</h3> 
             <h3>Donation: Rs $donation </h3>
             <h3>Total Donation: Rs $tot_donation </h3>
             <a href='main.php'> Back </a>
          </div>
          ";
    }
   
?>