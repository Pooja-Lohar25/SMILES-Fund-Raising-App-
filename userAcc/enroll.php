
<?php
include "connection.php";
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
if($conn)
{
    //this file checks and then enrolls the user in the course
    $course_Id = $_SESSION['courseId'];
    $userId = $_SESSION['userId'];
    $check_enroll = "SELECT `userId`, `cId` FROM `urc` WHERE `userId`='$userId' and `cId` = '$course_Id'";
    $res=mysqli_query($conn,$check_enroll);
    $row=mysqli_fetch_assoc($res);
    if($row>0)
        $is_enroll = true;  //user is already enrolled
    else
        $is_enroll = false; //user not enrolled
    

    if(!$is_enroll)  //update database only if user is not enrolled
    {
        $up_course = "UPDATE `courses` SET `enrollments`=`enrollments`+ 1 WHERE `cId` = '$course_Id'";
         mysqli_query($conn,$up_course);
        $up_user = "UPDATE `users` SET `courses`=`courses`+ 1 WHERE `userId`='$userId' ";
         mysqli_query($conn,$up_user);
        $insert_urc = "INSERT INTO `urc`(`userId`, `cId`) VALUES ($userId,$course_Id)"; 
         mysqli_query($conn,$insert_urc);
        $is_enroll = true;
       
    }
    $_SESSION['is_enrolled']="true";
    header('Location: '.$_SERVER['HTTP_REFERER']);    //to redirect to previous page
}
else{
    echo "<div class='res'>
    <h3>Sorry... something went wrong</h3> 
    <a href='main.php'> Back </a>
 </div>";
}

 
?>