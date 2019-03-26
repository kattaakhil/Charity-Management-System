<?php
session_start();


 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "charity";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
	
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	$err='';
    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pswd=$_POST['password'];
        $_SESSION['user']=$user;
        $pswd1= sha1($pswd);
        $sql = "SELECT * FROM `signup` where email = '$user' AND password = '$pswd';";
        $sql1 = "INSERT INTO login VALUES('$user','$pswd');";
        $res = mysqli_query($conn,$sql);
        mysqli_query($conn,$sql1);
        if ($res->num_rows > 0) {
            $row = mysqli_num_rows($res);
            if($row==1){
                header('Location: news.php');
            }
            else{
                $err = "Your account is inactive please contact website admin";
            }
        }
        else{
            $err = "Email/password incorrect";
			header('Location: error.php');
        }
    }
?>