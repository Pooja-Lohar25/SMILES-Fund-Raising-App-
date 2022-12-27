<?php

        session_start();
        header("Location: index.php",true,301);
        unset($_SESSION['user']);
        mysqli_close($conn);
        session_destroy();
    
?> 