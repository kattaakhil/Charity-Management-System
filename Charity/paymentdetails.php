<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21-02-2019
 * Time: 21:14
 */


mysql_connect('localhost','root','');
mysql_select_db('charity');
$query="select * from payment;";
$result= mysql_query($query);

?>
<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: ./admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
	body{
		background-image: url("images/backgroundpayment1.jpg");
		background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
	}

        .table{
            width: 75%;
            align: center;
			margin-left:12.5%
        }
        td, th, tr{
            text-align: center;
            padding: 10px;
        }
		td{
			color: black;
		}
		* {
            margin: 0;
            padding: 0;
        }
        nav{
            background-color: black;
            overflow: hidden;
            text-align: center;
        }
        nav ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li{
            float: left; /* overflown the background color */
        }

        nav ul li a{
            text-decoration: none;
            color: white;
            padding: 14px 25px;
            display: inline-block;
        }

        nav ul li a:hover{
            background-color: seagreen;
        }
        .container{
            width: 1000px;
            position: relative;
            margin: 0 auto;
            font-family: 'Crimson Text', serif;
            font-size: 20px;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="adminnews.php">Home</a></li>
        <li><a href="#">Feedback</a></li>
		<li><a href="userdetails.php">User Details</a></li>
		<li><a href="feedback/index1.php">Feedback Details</a></li>
		<li><a href="paymentdetails.php">Payment Details</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>
</nav>

<table align="center" class="table table-striped">
    <thead>
    <tr>
        <th colspan="6"><h1>Payment Details</h1></th>
    </tr>
    <tr>
        <th>Name</th>
        <th>ATM Card number</th>
        <th>IFSC Code</th>
        <th>Name of the Bank</th>
        <th>Expiry Date</th>
		<th>Amount</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($rows=mysql_fetch_assoc($result))
    {
        ?>
        <tr>
            <b><td><?php echo $rows['Name']; ?></td></b>
            <b><td><?php echo $rows['Account']; ?></td></b>
            <b><td><?php echo $rows['IFSC']; ?></td></b>
            <b><td><?php echo $rows['Bank']; ?></td></b>
            <b><td><?php echo $rows['Expiry']; ?></td></b>
			<b><td><?php echo $rows['Amount']; ?></td></b>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
