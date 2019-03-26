<!doctype html>
<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: ./userlogin.php');
    exit;
}
?>
<?php
if(isset($_POST['login'])){
	// Authorisation details.
	$username = "kattaakhil103@gmail.com";
	$hash = "7f4af0ab2d9c2d9dfcf1c37af3ea29050aad066e2ac9dfd3629a6140136a5e0a";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TX-OTP"; // This is who the message appears to be from.
	$numbers = $_POST['num'];	// A single number or a comma-seperated list of numbers
    $otp = mt_rand(100000,999999);
    setcookie("otp", $otp);
	 $message = "Hey ".$name. " your OTP is ".$otp.". Thanks for donating fund for the people safety and welfare.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

}
if(isset($_POST['ver'])){
    $verotp=$_POST['otp'];
    if($verotp==$_COOKIE['otp'])
        header('Location:news.html');
    else{
		header('Location:payment.html');
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>OTP</title>
    <style>
        table{
            margin-top: 200px;
        }
        tr,td{
            padding: 10px;
        }
    </style>
</head>

<body>
<form method="post" action="php.php">

    <table align="center">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="enter your Name"></td>
        </tr>
        <tr>
            <td>Valid Phone Number:</td>
            <td><input type="text" name="num" placeholder="enter valid number"></td>
        </tr>
        <tr>
            <td>send code</td>
            <td><input type="submit" name="login" value="CLICK HERE"></td>
        </tr>

        <tr>
            <td>Verify OTP:</td>
            <td><input type="text" name="otp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="ver" value="Verify"></td>
        </tr>
    </table>
</form>
</body>
</html>