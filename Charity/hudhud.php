<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: ./userlogin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
    <title>HUDHUD Cyclone</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        h1{
            font-family: 'Hanalei Fill', cursive;
        }
        body{
            background-image: url("images/disaster.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: sans-serif;
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
        a{
            text-decoration: none;
        }
        .heading{
            color: black;
        }
        input[type='button']{
            background-color: #13130D;
            color: white;
            border: none;
            outline: none;
            margin: 5px;
            font-size: 18px;
            padding: 10px 50px;
            border-radius: 50px;
            margin-left: 200px;
        }
        input[type='button']:hover{
            background-color: #292B26;
            cursor: pointer;
            box-shadow: 5px 5px 15px #13130D;
        }
        img{
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
            transition: all 1s;
            opacity: 0.9; /* for blue image */
        }
        img:hover{
            transform: scale(1.1, 1.1);
            cursor: pointer;
            opacity: 1.0; /* for clear image */
        }
        img{
            height: auto;
            margin: auto;
            border-radius: 10px;
            overflow: hidden;
        }
        footer{
            background-image: url("images/disaster.jpg");
            color: black;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="news.php">Home</a></li>
        <li><a href="feedback/index.php">Feedback</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>
</nav>
<br>
<div class="container">


    <!--  hudhud cyclone  -->

    <a href="hudhud.php" class="heading"><h1>HUDHUD Cyclone:</h1></a><br>
    <img src="images/hudhud2.jpg" width="100%"><br><br>
    <img src="images/hudhud.jpg" width="100%"><br><br>
    <img src="images/hudhud1.jpg" width="100%"><br><br>
    <h2>Why the cyclonic storm is called Hudhud?</h2><br>

        <p>The name for the storm HUDHUD is contributed by Oman. It is an Arabic word. It is Hoope Bird which is called Hudhud in Arabic.</p><br>
    <p>Extreme severe cycllonic storm HUDHUD, was a strong tropical cyclone that caused extensive damage and loss of life in eastern India and Nepal during October 2014.

        Hudhud originated from a low pressure system that formed under the influence of an upper-air cyclonic circulation in the Andaman Sea on October 6.
        Hudhud intensified into a cyclonic storm on October 8 and as a Severe Cyclonic Storm on October 9.
        Hudhud underwent rapid deepening in the following days and was classified as a Very Severe Cyclonic Storm by the IMD.
        Shortly before landfall near Visakhapatnam, Andhra Pradesh, on October 12, Hudhud reached its peak strength with three-minute wind speeds of 185 km/h (115 mph) and a minimum central pressure of 960 mbar (28.35 inHg).
        The system then drifted northwards towards Uttar Pradesh and Nepal, causing widespread rains in both areas and heavy snowfall in the latter.</p><br>

       <p> Hudhud caused extensive damage to the city of Visakhapatnam and the neighbouring districts of Vizianagaram and Srikakulam of Andhra Pradesh.
        Damages were estimated to be ₹21,908 crore (US$3.4 billion) by the Andhra state government.[3] At least 124 deaths have been confirmed, a majority of them from Andhra Pradesh and Nepal, with the latter experiencing an avalanche due to the cyclone.</p><br>
    <p>On 12 Oct 2014, Tropical Cyclone Hudhud made landfall on India's coast of Andhra Pradesh, near the city of Visakhapatnam, as a category 3 storm.
        Visakhapatnam was heavily damaged, including the airport, a number of buildings, electrical and telecommunications supplies and roads.
        Similarly, districts of Visakhapatnam, Srikakulam and Vijayanagaram sustained damage to infrastructure, communication, shelter and livelihoods.
        Light ‘kutcha’ houses (mud and/or thach) were particularly badly damaged.
        According to media and government reporting, 22 people were killed and over 248,00 people in 320 villages were affected. </p><br><br>


<div>
    <a href="payment.php"><input type="button" value="Donate"></a>
    <a href="feedback/index.php"><input type="button" value="Feedback"></a>
</div>


</div>
<footer width="100%" style="height: 125px;">
    <br><br>
    <h3 style="text-align: center">Thanks for using our Website to donate for the victims.</h3>
    <h2 align="center">Copyright &copy; 2019 Charity Management System</h2>
    <p align="center">All Rights Reserved</p><br><br>
</footer>
</body>
</html>