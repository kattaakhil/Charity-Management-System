<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21-02-2019
 * Time: 20:41
 */


$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="charity";

$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die;

//check the connection_aborted
if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL:".mysqli_connect_error();
}
//echo "connection successful";

$name=$_REQUEST['username'];
$account=$_REQUEST['account'];
$ifsc=$_REQUEST['ifsc'];
$bank=$_REQUEST['bank'];
$expiry=$_REQUEST['expiry'];
$cvv=$_REQUEST['cvv'];
$amount=$_REQUEST['amount'];

//inserting data into the table
$query=mysqli_query($db_connect,"INSERT INTO payment VALUES('$name','$account','$ifsc','$bank','$expiry','$cvv','$amount')") or die(mysqli_error($db_connect));


mysqli_close($db_connect);

header("location:phpotp.php");
if($note=='success')
    header('Location:phpotp.php');








?>