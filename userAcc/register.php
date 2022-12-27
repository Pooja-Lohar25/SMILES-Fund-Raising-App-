<?php

session_start();
?>



<html>
<head>
  <title>
    Smiles
  </title>
  <link rel="stylesheet" href="showMessage.css">
</head>
</html>



<?php
$first = $_POST['first'];
$last = $_POST['last'];
$user  = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn)
{
    // echo "connection established <br>";
    $check = "SELECT `username` FROM `users` WHERE `username`='$user' ";
    $res = mysqli_query($conn,$check);
    if(mysqli_num_rows($res)>0)
    {
      $_SESSION['msg'] = "Username Already Taken";
      header("location: signup.php");
      exit();
    }
    $query ="INSERT INTO users(`first_n`, `last_n`, `username`, `email`, `password`, `courses`, `tot_donation`) VALUES ('$first','$last','$user','$email','$pass','','')";
    if(mysqli_query($conn,$query)){ 
      $_SESSION['msg'] = "Successfully registered...Login to get started";
      header("location:login.php");
    }
    else {
      echo "<div class='res'>
         <h3></h3> 
         <a href='signup.php'> Back </a>
      </div>
      ";
    }
}
else {
  echo "<div class='res'>
         <h3>Connection Error</h3>
         <a href='signup.php'> Back </a> 
      </div>
      ";
}
mysqli_close($conn);
?>
