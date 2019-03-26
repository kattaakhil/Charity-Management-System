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
    <title>KERALA Floods</title>
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


    <!--  hudhud cyclone  -->

    <a href="kerala.php" class="heading"><h1>KERALA Floods:</h1></a><br>
    <img src="images/keralafloods.jpg" width="100%"><br><br>
    <img src="images/kerala1.jpg" width="100%"><br><br>
    <img src="images/kerala2.jpg" width="100%"><br><br>

    <p>From 8 August 2018, severe floods affected the south Indian state of Kerala, due to unusually high rainfall during the monsoon season.
         It was the worst flood in Kerala in nearly a century.
         Over 483 people died, and 14 are missing.
         About a million people were evacuated, mainly from Chengannur, Pandanad, Edanad, Aranmula, Kozhencherry, Ayiroor, Ranni, Pandalam, Kuttanad, Malappuram, Aluva, Chalakudy, Thiruvalla, Eraviperoor, Vallamkulam, N.Paravur, Vypin Island and Palakkad .
        All 14 districts of the state were placed on red alert.
        According to the Kerala government, one-sixth of the total population of Kerala had been directly affected by the floods and related incidents.
        The Indian government had declared it a Level 3 Calamity, or "calamity of a severe nature".
        It is the worst flood in Kerala after the great flood of 99 that took place in 1924.</p><br>
    <p>Thirty-five out of the fifty-four dams within the state were opened, for the first time in history.
        All five overflow gates of the Idukki Dam were opened at the same time, and for the first time in 26 years 5 gates of the Malampuzha dam of Palakkad were opened.
         Heavy rains in Wayanad and Idukki have caused severe landslides and have left the hilly districts isolated.
         The situation was regularly monitored by the National Crisis Management Committee coordinated the rescue and relief operations.</p><br>

    <p> Kerala received heavy monsoon rainfall, which was about 75% more than the usual rain fall in Kerala, on the mid-evening of August 8,
        resulting in dams filling to capacity; in the first 24 hours of rainfall the state received 310 mm (12 in) of rain.
        Almost all dams had been opened since the water level had reason close to overflow level due to heavy rainfall, flooding local low-lying areas.
        For the first time in the state's history, 35 of its 54 dams had been opened.
        The deluge has been considered an impact of the global warming.</p><br>
    <p>The Government of Kerala argued in the Supreme Court that the very sudden release of water from the Mullaperiyar Dam by the Tamil Nadu government was one of the reasons for the devastating flood in Kerala.
        The Tamil Nadu government rejected the argument, saying that Kerala suffered the deluge due to the discharge of excess water from 80 reservoirs across Kerala,
        spurred by heavy rains from within the state; It also argued that the flood surplus from the Idukki dam is mainly due to the flows generated from its own independent
        catchment due to unprecedented heavy rainfall, while the discharge from Mullaperiyar dam was significantly less.
        Though it is difficult to attribute any single event to climate change, its possible role in causing the heavy rainfall event over Kerala cannot be ruled out. </p><br><br>


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