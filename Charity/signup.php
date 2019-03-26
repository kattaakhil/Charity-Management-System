<!DOCTYPE html>
<head>
<title>Register Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<body>

    <div class="box">
    <img src="user.png" class="user">

        <h1>Register Here</h1>

        <form name="myform2" method="POST">
		
            <p>Email</p>
            <input type="email" name="username" placeholder="Enter email id" required="">

            <p>Password</p>
            <input type="password" name="psw" placeholder="Enter Password" required="">

            <p>Retype Password</p>
            <input type="password" name="psw-repeat" placeholder="Re-Enter Password" required="">

            <input type="submit" name="submit" value="Register">

            <br><br>
            <a href="userlogin.php">existing user, login !?</a>
        </form>
        
    </div>

</body>
</head>
</html>
<?php
if(isset($_POST['submit']))
{
$user=$_POST["username"];
$psw=$_POST["psw"];
$psw1=$_POST["psw-repeat"];

$db="charity";
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password,$db);

$qy="select * from signup where username='$user'";
$res=mysqli_query($conn,$qy);
$rowcount=mysqli_num_rows($res);
if($rowcount==0)
{
 if($psw==$psw1)
 {
  $sql="insert into signup values('$user','$psw')";
  mysqli_query($conn,$sql);
  header("Location:userlogin.php");
 }
 else
 { 
	echo "<script>
	  alert('password mismatch');
	  </script>";
 }
 }
 else
 { 
 	echo "<script>
	  alert('User account already exists');
	  </script>";
 }
}
?>