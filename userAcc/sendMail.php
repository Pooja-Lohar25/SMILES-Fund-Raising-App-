<?php
session_start();
?>

<html>
<head>
  <title>
    Smiles
  </title>
  <link rel="stylesheet" href="showMessage.css">
  <script>
    function check_user()
    {

    }
  </script>
</head>
</html>

<?php
//including php mailer files
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
//define namespaces
use   PHPmailer\PHPmailer\PHPmailer;
// use   PHPmailer\PHPmailer\SMTP;
// use   PHPmailer\PHPmailer\Exception;



$user = $_POST['user'];
$email = $_POST['email'];
$_SESSION['user'] = $user; //session management to track user 


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "smiles";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
  $query = "SELECT `username`, `email` FROM `users` where (`username`='$user') and (`email` = '$email')  ";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)>0)
  {
    //create instance of PHPmailer
    $mail = new PHPMailer();
    //set mailer to use smtp
    $mail->isSMTP();
    //define smtp host
    $mail->Host = "smtp.gmail.com";
    //enable smtp authentication
    $mail->SMTPAuth = "true";
    //set port to connect smtp
    $mail->Port="587";
    //set gmail username
    $mail->Username = "spreadingsmiles2023@gmail.com";
    //set gmail password
    $mail->Password = "$"."mile"."$"."2023"; 
    //set subject
    $mail->Subject = "Smiles-Reset Password";
    //set sender email
    $mail->setFrom("spreadingsmiles2023@gmail.com");
    //enable html
    $mail->isHTML(true);
    //email body
    $mail->Body = "
    Dear $user, <br>
    Here is your link to reset password.... <br>
    <a href='localhost/projectSMILES/set_newP.php'> Click here to reset password </a>
    <br><br>
    
    ";
    //add recipient
    $mail->addAddress($email);
    //finally send email
    if($mail->Send())
    {
      echo "<div class='res'>
        <h3> Reset password link has been sent to your registered email id. <br> If not found check in spam folder.</h3>
        <a href='login.php' style='background-color:green; border-color:green'> Back </a> 
    </div>
 ";
    }
    else{
      echo "<div class='res'>
         <h6>Sorry something went wrong. Try again later...</h6>
         <a href='login.php'> Log in </a> 
      </div>
      ";
    }
    //closing smtp connection
    $mail->smtpClose();   


  }
  else{
    echo "<div class='res'>
    <h3>Sorry...you are not registered user.</h3>
    <a href='login.php'> Back </a> 
 </div>
 ";
  }
}


 ?>
