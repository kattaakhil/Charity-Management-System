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
    <title>MEKUNU Cyclone</title>
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

    <a href="mekunu.php" class="heading"><h1>MEKUNU Cyclone:</h1></a><br>
    <img src="images/cyclonemekenu.jpg" width="100%"><br><br>
    <img src="images/mekunu1.jpg" width="100%"><br><br>
    <img src="images/mekunu2.jpg" width="100%"><br><br>
    <h2>Why the cyclonic storm is called Mekunu?</h2><br>
    <p> Mekunu, the cyclone which hit the Yemini Island of Socotra, causing severe flooding and damage, is named by Maldivies.
        It means ''mullet'' in Dhivehli, the lanugage of Maldivians.</p><br>
    <p>Extremely Severe Cyclonic Storm Mekunu was the strongest storm to strike Oman's Dhofar Governorate since 1959.
        The second named storm of the 2018 North Indian Ocean cyclone season, Mekunu developed out of a low pressure area on May 21.
        It gradually intensified, passing east of Socotra on May 23 as a very intense tropical cyclone.
        On May 25, Mekunu reached its peak intensity on May 25.
        The India Meteorological Department estimated 10 minute sustained winds of 175 km/h (110 mph), making Mekunu an extremely severe cyclonic storm.
        The American-based Joint Typhoon Warning Center estimated slightly higher 1 minute winds of 185 km/h (115 mph).
        While near peak intensity, Mekunu made landfall near Raysut, Oman.
        The storm rapidly weakened over land.</p><br>
    <p>While passing near Socotra, Cyclone Mekunu dropped heavy rainfall, causing landslides and flooding that killed 20 people.
        In the eastern Yemeni mainland, the cyclone caused power outages and flooding, resulting in four fatalities.
        In Oman, Cyclone Mekunu killed seven people and caused about US$1.5 billion in damage.
        Rainfall from Mekunu reached 617 mm (24.3 in) in Salalah.
        The rainfall created desert lakes in the Empty Quarter, or Rub' al Khali.</p><br>

    <p>Cyclone Mekunu made landfall on the Arabian Peninsula on Friday night, leaving six people dead in Oman and 30 others missing, according to local officials.

        Landfall occurred around midnight local time about 40 km west-southwest of Salalah, which is Oman’s third-largest city, according to AccuWeather Senior Meteorologist Jason Nicholls.

        Mekunu became an extremely severe cyclonic storm with winds equal to a Category 3 hurricane in the Atlantic or East Pacific Ocean prior to making landfall.</p><br>
    <p> [IFRC] reported that seven people have died and eight are still missing due to the cyclone...
        Local authorities and the Displacement Tracking Team led by the International Organization for Migration
        (DTM/IOM) have reported a total of 507 families being displaced in Hadibo and Qalansiyah.
        Communities living in Badahola have evacuated their areas as reportedly they have been surrounded by flood water.
        The majority of the affected population (90 per cent) are hosted in schools, with the rest staying in other government buildings..
        .An inter-cluster assessment team is expected to travel to Socotra on 29 May with the support of UNHAS.</p><br>


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