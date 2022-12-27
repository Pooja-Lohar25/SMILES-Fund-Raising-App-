<!DOCTYPE html>
<?php
session_start();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.M.I.L.E.S</title>
    <link rel="stylesheet" href="reset_p.css">
    <script src="validPass.js"></script>
    
</head>
<body>
    <main>
        <form name="changePass" action="reset_p.php" method="post">
          <h3>Reset Password</h3>
          <p>Password should have:</p>
          <ul class="must" tpye="disc">
              <li>Length 8 characters or more</li>
              <li>At least one CAPITAL letter</li>
              <li>At least one small letter</li>
              <li>At least one number</li>
              
          </ul>
          <input class="user" name ="user" type="text" placeholder="Username" required><br>
          <input class="npass" name ="pass" type="password" placeholder="New Password" required><br>
          <input class="cpass" name ="cpass" type="password" placeholder="Confirm Password" required><br>
          <button class="reset" id="resetP" type="submit">Reset </button><br>
        </form>
        <script type="text/javascript">
          document.getElementById("resetP").addEventListener("click",formCheck);
      </script>
      </main>
</body>
</html>