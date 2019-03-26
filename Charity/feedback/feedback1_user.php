<?php

include("feedback1.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

//inserting data into the table
$query=mysqli_query($db_connect,"INSERT INTO feedback(name,email,message) VALUES('$name','$email','$message')") or die(mysqli_error($db_connect));


mysqli_close($db_connect);

header("location: ../news.php");


?>