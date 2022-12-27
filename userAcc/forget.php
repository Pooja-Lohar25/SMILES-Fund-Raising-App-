


<html>
    <head>
        <link rel="stylesheet" href="forgot.css">
        <style>
            input{
                margin : 10px;
                height : 50px;
                width : 50%;
                /* padding: 5px; */
                border-radius : 5px;
                font-size : 1.2em;
            }
            input:hover
            {
                box-shadow: 1px 1px 3px;
            }
            button {
                margin:10px;
                height : 50px;
                width  :30%;
                background-color : white;
                border-style: solid;
                border-radius : 25px;
                border-color : orange;
                border-width : 2px;
                color:orange;
                font-size: 1.2em;
            }
            button:hover{
                background-color: orange;
                color:white;
                cursor: pointer;
            }
            button:active{
                background-color : white;
                color:orange;
            }
        </style>
        <title>smiles</title>
    </head>
    <body>
        <form action="sendMail.php" method='post'>
            <p>Enter credentials to reset password</p>
        <input name="user" class = "user" type="text" placeholder=" Username" required> <br><br>
        <input type="email" name="email" placeholder=" Email" required> <br>
            <button>Submit</button><br>
            <a class="back" href="login.php">Cancel</a>
        </form>
    </body>
</html>