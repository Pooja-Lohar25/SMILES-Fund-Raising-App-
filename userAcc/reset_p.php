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
// echo $_SESSION['user'];

$user = $_POST['user'];

$pass = $_POST['pass'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn)
{
    
      $query ="UPDATE `users` SET `password`='$pass' WHERE `username` = '$user'";
    if(mysqli_query($conn,$query)){
      
        echo "<div class='res'>
        <h3>Password changed successfully....</h3> 
        <a href='login.php'> Log In </a>
     </div>
     ";
    }
        
    else {
      echo "<div class='res'>
         <h6>sorry....something went wrong</h6> 
         <a href='login.php'> Back </a>
      </div>
      ";
    }
}
else {
  echo "<div class='res'>
         <h6>Connection Error</h6>
         <a href='login.php'> Back </a> 
      </div>
      ";
}
mysqli_close($conn);
?>
