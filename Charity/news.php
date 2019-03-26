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
    <script type="text/javascript">
        function preback() {
            window.history.forward();
        }
        setTimeout('preback()',0);
        window.onload=function(){null};
    </script>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <title>List of Disasters</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1{
            font-family: 'Hanalei Fill', cursive;
        }
        body{
            background-image: url("images/disasterback.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
			font-family: sans-serif;
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
        a{
            text-decoration: none;
        }
        .heading{
            color: black;
        }
        img{
            border-radius: 15px;
        }
        footer{
            background-image: url("images/disasterback.jpg");
            color: black;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: sans-serif;
            padding: 0;
            margin: 0;
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


    <!-- titli cyclone  -->

    <a href="titli.php" class="heading"><h1>TITLI Cyclone:</h1></a><br>
    <img src="images/titlicyclone.jpg" width="100%">
    <p>A severe cyclonic storm packing heavy winds and widespread rains hit the eastern part of the country on Thursday,
        killing eight people in Andhra Pradesh and one in Odisha. Major rivers, especially the ones in south Odisha,
        are in spate and stretches of low-lying areas inundated by rain water.
        A day after Cyclone Titli battered Odisha and left behind a trail of destruction,
        the state is gearing up to restore power supply and road links amid concerns over a possible flood situation.</p><br><hr><br>

    <!--  hudhud cyclone  -->

    <a href="hudhud.php" class="heading"><h1>HUDHUD Cyclone:</h1></a><br>
    <img src="images/hudhud.jpg" width="100%">
    <p>On 12 Oct 2014, Tropical Cyclone Hudhud made landfall on India's coast of Andhra Pradesh, near the city of Visakhapatnam, as a category 3 storm.
        Visakhapatnam was heavily damaged, including the airport, a number of buildings, electrical and telecommunications supplies and roads.
        Similarly, districts of Visakhapatnam, Srikakulam and Vijayanagaram sustained damage to infrastructure, communication, shelter and livelihoods.
        Light ‘kutcha’ houses (mud and/or thach) were particularly badly damaged.
        According to media and government reporting, 22 people were killed and over 248,00 people in 320 villages were affected. </p><br><hr><br>

<!--kerala Floods -->
    <a href="kerala.php" class="heading"><h1>Kerala Floods:</h1></a><br>
    <img src="images/keralafloods.jpg" width="100%">
    <p>The worst floods in a century have devastated the Indian state of Kerala, killing scores of people and forcing tens of thousands into relief camps.
        State officials have put the death toll at 164 since August 8, with more than 300 killed since the monsoon season began on May 25.
        Helicopters and disaster management teams have been battling heavy rains since Thursday to reach flooded areas in order to evacuate people stranded in homes or on rooftops.
        The floods have damaged hundreds of kilometres of roads and disrupted train and air services. The airport at Kochi, the busiest city in Kerala, will remain closed until Saturday.
        India's monsoon season, between June and September, often sees heavy rains that are vital for agriculture, but which can cause immense destruction.
        Kerala has been hit with 37 percent more rainfall than normal since the beginning of this monsoon, the Meteorological Department said.
        Some plantations have also been inundated. The state is a major producer of rubber, tea, coffee and spices such as black pepper and cardamom.</p><br><hr><br>


    <!-- gaja cyclone -->
    <a href="gaja.php" class="heading"><h1>GAJA Cyclone:</h1></a><br>
    <img src="images/cyclonegaja.jpeg" width="100%">
    <p>Cyclone Gaja turned into a deep depression over southeast Arabian Sea on Saturday evening.
        It is likely to intensify further into a cyclonic storm in the next 12 hours.
        Indian Meteorological Department (IMD) has predicted heavy to very heavy rains in Lakshadweep Islands in the next 24 hours.
        Chennai Met Department has also issued warning to Tamil Nadu fishermen and advised them not venture into the Arabian Sea for the next two days.
        At least 33 people were killed and over 82,000 others were affected after Cyclone ‘Gaja’ hit the Tamil Nadu coast early Friday.
        The cyclonic storm ripped through Nagapattinam, uprooting trees and snapping power lines in coastal districts.
        The rescued people have been sheltered in 471 relief centres in six districts including Nagapattinam, Pudukottai, Ramanathapuram and Tiruvarur.</p><br><hr><br>


    <!--cyclone meekenu -->
    <a href="mekunu.php" class="heading"><h1>MEKUNU Cyclone:</h1></a><br>
    <img src="images/cyclonemekenu.jpg" width="100%">
    <p>A new tropical storm has developed in the southwest Arabian Sea where it intensified yesterday evening into Cyclone Mekunu.
        The cyclone is moving currently north-northwest at a speed of 11 km/h.
        Mekunu is expected to continue moving in this direction during the remainder of this week and make landfall near Salalah, Oman on about Saturday 26 May.
        A major fluctuation in tropical weather over the southern Arabian Sea known as the Madden-Julian oscillation (MJO) is likely to cause Mekunu to strengthen further.
        As a result, heavy rains are forecasted for Socotra Island, followed by the southern Arabian coast from Sayhut in eastern Yemen to Salalah and Ash Shuwaymiyyah in southern Oman,
        which could cause local flooding and damage. </p><br><hr><br>

<!-- tripura earthquake -->
    <a href="tripura.php" class="heading"><h1>TRIPURA Earthquake:</h1></a><br>
    <img src="images/tripuraeartquake.jpg" width="100%">
    <p>Manipur bore the brunt of the temblor, which struck at 4.35 am. Assam, Tripura, West Bengal, Odisha and Jharkhand also felt the tremors.
        At least eight people were killed and over 90 injured as a strong earthquake of magnitude 6.8 hit Manipur and other North East states on Monday.
        The quake damaged several buildings and triggered panic among people, reported PTI.
        The Manipur government has said that at least eight people have been killed and over 50 injured in quake-related incidents.
        It has also decided to close all government and private schools for the coming seven days.</p><br><hr><br>


<!-- kashmir floods -->
    <a href="kashmir.php" class="heading"><h1>KASHMIR Floods:</h1></a><br>
    <img src="images/kashmir.jpg" width="100%">
    <p>Caused by continuous torrential rainfall, the Kashmir region in September 2014 suffered from massive floods, leading to the death of around 500 people.
        Hundreds of people were trapped in their homes for days, without food and water. According to reports, around 2600 villages were affected in Jammu and Kashmir.
        In Kashmir itself, 390 villages were completely submerged in water. Many parts of Srinagar were also submerged by the floods.
        Around 50 bridges were damaged across the state, and the damage of properties was estimated between Rs. 5000 cr and 6000 cr.</p><br><hr>









</div>
<footer width="100%" style="height: 125px;">
    <br><br>
    <h3 style="text-align: center">Thanks for using our Website to donate for the victims.</h3>
    <h2 align="center">Copyright &copy; 2019 Charity Management System</h2>
    <p align="center">All Rights Reserved</p><br><br>
</footer>
</body>
</html>