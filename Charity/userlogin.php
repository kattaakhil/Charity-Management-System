<?php
session_start();
if(isset($_SESSION['user']))
{
    header('Location: ./news.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript">
            function preback() {
                window.history.forward();
            }
            setTimeout('preback()',0);
            window.onload=function(){null};
        </script>
    </head>
    <body>


        <div class="box">

            <img src="user.png" class="user">

            <h1>Login Here</h1>

            <form name="myform"  action="loginpage1.php" method="POST" >

                <p>Email</p>
                <input type="email" name="username" placeholder="Enter your Email" required="">

                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" required="">


                <input type="submit" name="submit" value="Login">

                <br>
                <a href="signup.php">Register for new account ?</a><br><br>
			    <a href="admin.php">Admin Login</a>

            </form>
        
        </div>
	

    </body>
</html>