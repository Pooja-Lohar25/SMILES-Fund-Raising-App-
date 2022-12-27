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
$user = $_POST['user'];
$pass = $_POST['pass'];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$_SESSION['user']=$user;

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn)
{
  
    $query = "SELECT * FROM `users` WHERE (`username`= '$user' or `email`='$user') and (`password`='$pass') ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
      if($row=mysqli_fetch_assoc($result))
      {
        $_SESSION['userId']=$row['userId'];
          $_SESSION['first']=$row['first_n'];
          $_SESSION['last']=$row['last_n'];
          $_SESSION['mail']=$row['email'];
          $_SESSION['don']=$row['tot_donation'];
        header("Location: main.php"); //redirection 
      }
          
    }
                  
    else {
     
      echo "<div class='res'>
         <h3>Unknown User...try again</h3> 
         <a href='login.php'> Back </a>
      </div>
      ";
    }
}
mysqli_close($conn);

  
?>
