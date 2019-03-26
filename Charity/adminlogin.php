<?php
$user=$_POST['username'];
$pswd=$_POST['password'];

if(($user=="admin") && ($pswd=="admin123"))
{
	session_start();
$_SESSION['user']=$user;
	header('Location:adminnews.php');
}
else
{
	header('Location:error.php');
}

?>