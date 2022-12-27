
<?php

//this file checks if the user has already enrolled in the course
    $course_Id = $_SESSION['courseId'];
    $userId = $_SESSION['userId'];
    $check_enroll = "SELECT `userId`, `cId` FROM `urc` WHERE `userId`='$userId' and `cId` = '$course_Id'";
    $res=mysqli_query($conn,$check_enroll);
    if($row=mysqli_fetch_assoc($res)>0)
    {
        $_SESSION['is_enrolled']="true";  //user is enrolled
    }
    
    
    
  ?>