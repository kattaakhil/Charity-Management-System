<?php
session_start();
if(isset($_SESSION['user']))
{
    header('Location: ./adminnews.php');
    exit;
}
?>
<!DOCTYPE html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    

<body>


    <div class="box">

    <img src="user.png" class="user">

        <h1>Login Here</h1>

        <form name="myform"  action="adminlogin.php" method="POST" >

            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username " value="admin">

            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>


            <input type="submit" name="submit" value="Login">

            <br>
			<a href="userlogin.php">Back to user LOGIN!</a>

        </form>
        
    </div>
	

</body>
</html>