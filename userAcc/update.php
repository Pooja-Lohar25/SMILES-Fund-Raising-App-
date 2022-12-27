<?php
session_start();
?>

<html>
  <head>
    <title>Login Failed</title>
    <link rel="stylesheet" href="showMessage.css">
  </head>
</html>

<?php
$first = $_POST['first'];
$last = $_POST['last'];
$user  = $_POST['username'];
$email = $_POST['mail'];
$userId = $_SESSION['userId'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn)
{
    
    $query = "UPDATE `users` SET `first_n`='$first',`last_n`='$last',`username`='$user',`email`='$email' WHERE `userId` = '$userId';";
          $_SESSION['user'] = $user;
          $_SESSION['first']=$first;
          $_SESSION['last']=$last;
          $_SESSION['mail']=$email;
    if(mysqli_query($conn,$query)){
        echo "<div class='res'>
        <h3>Thankyou for your updates...</h3> 
        <a href='update_profile.php'> Back </a>
     </div>
     ";
    }
        
    else {
      echo "<div class='res'>
         <h3>sorry....something went wrong</h3> 
         <a href='update_profile.php'> Back </a>
      </div>
      ";
    }
}
else {
  echo "<div class='res'>
         <h3>Connection Error</h3>
         <a href='update_profile.php'> Back </a> 
      </div>
      ";
}
mysqli_close($conn);
?>