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
    <title>TITLI Cyclone</title>
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
            margin: 5px;
            font-size: 18px;
            outline: none;
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


    <!--  titli cyclone  -->

    <a href="titli.php" class="heading"><h1>TITLI Cyclone:</h1></a><br>
    <img src="images/titlicyclone.jpg" width="100%"><br><br>
    <img src="images/titli1.jpg" width="100%"><br><br>
    <img src="images/titli2.jpg" width="100%"><br><br>
    <h2>Why the cyclonic storm is called Titli?</h2><br>
    <p>Now, many have started questioning the name Titli (meaning butterfly) for a devastating force like cyclone.
        It has seen evacuation of lakhs of people at the Odisha coastline while eight people have been reportedly killed in Andhra.</p><br>
    <p>Cyclone Titli is expected to make landfall in Odisha at around 6 am on Thursday.
        Five coastal districts have been evacuated, with residents being moved to safety after the storm intensified. Schools, colleges and anganwadi centres in four districts of Odisha have been closed.
        Cyclone Titli will make landfall between Gopalpur in Odisha and Kalingapatanam in Andhra Pradesh.</p><br>
    <p>A severe cyclonic storm packing heavy winds and widespread rains hit the eastern part of the country on Thursday,
        killing eight people in Andhra Pradesh and one in Odisha. Major rivers, especially the ones in south Odisha,
        are in spate and stretches of low-lying areas inundated by rain water.
        A day after Cyclone Titli battered Odisha and left behind a trail of destruction,
        the state is gearing up to restore power supply and road links amid concerns over a possible flood situation.</p><br>

    <p>Several coastal districts in Odisha are receiving heavy rainfall since early morning after the cyclone ‘Titli’ hit the Gopalpur area of Ganjam at 5:30 am.
        According to state administration, several mud houses, trees and electric poles have been uprooted due to high-intensity storm.
        The neighbouring northern Andhra Pradesh is also receiving rainfall since morning.
        The IMD has said that the surface wind speed in Gopalpur is around 126 kmph and it will pass Odisha coast by late afternoon.
        The five Odisha districts that have come under the influence of cyclone Titli are Ganjam, Khurda, Puri, Jagatsinghpur and Kendrapara.
        So far, more than 3 lakh people from these districts have been evacuated. Schools, colleges and anganwadi centres have been shut in these districts.</p><br>
    <p>According to the weather office, Titli cyclone formed over the Bay of Bengal and intensified into a severe cyclonic storm.
        It said that the 24 to 36 hours are very crucial for the coastal areas.
        Meanwhile, Odisha Chief Minister Naveen Patnaik on Wednesday evening chaired a high-level meeting to review the preparedness in view of the Title cyclone.</p><br><br>


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