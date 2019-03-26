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
    <title>TRIPURA earthquake</title>
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

    <a href="tripura.php" class="heading"><h1>TRIPURA earthquake:</h1></a><br>
    <img src="images/tripuraeartquake.jpg" width="100%"><br><br>
    <img src="images/tripura1.jpg" width="100%"><br><br>
    <img src="images/tripura2.jpg" width="100%"><br><br>

    <p>A magnitude 5.7 earthquake struck India 20 km (12 mi) east north-east of Ambassa in the state of Tripura on January 5,
        2017 with a maximum observed intensity of 6-7 EMS.
        It struck at 2:39 pm local time (09:09 UTC), and was centered in an isolated area. The estimated depth was 32.0 km.</p><br>
    <p>One person died and five others were injured in India. At least 50 houses were damaged due to landslides that occurred in Dhalai district,
        while roads were blocked after trees were uprooted.
        According to the Tripura State Disaster Management Authority, at least 6,727 buildings were damaged in Tripura in the districts of Dhalai and Unakoti.
        Shaking was felt in many parts of north-eastern India including as far as Kolkata.
        The tremor was also felt in neighboring Bangladesh, where two people died and three others were injured.
        The earthquake caused liquefaction on the banks of the Manu river in Tripura and along the Dhalai river in adjacent parts of Bangladesh,
        in particular in the Kamalganj area.</p><br>
    <p>Earthquake of 5.5 magnitude hit northeast India and parts of eastern Bangladesh at around 2:42 pm IST today. According to the United States Geological Survey (USGS), the epicenter of earthquake was 16 km from Kumarghat in Tripura. Mild tremors were felt in Guwahati .

        The tremors, which also jolted Bangladesh (Dhaka), were initially dim, followed by some strong ones. The tremors caused by a shallow earthquake lasted for about a minute. The earthquake had a depth of 36 kilometres.

        Tripura is highly vulnerable to earthquakes as it lies in seismic zone V.</p><br>

    <p>The earthquake hit the India-Bangladesh border region along Tripura on Wednesday. There was no report of any damage or human casualty, officials said.

        “The quake hit Tripura and Bangladesh at 10.20 am,” a meteorological department official said.

        “There is no report of any damage in Tripura and adjoining areas,” said Sarat Das, in-charge of the disaster management control centre in Agartala, citing reports from District Magistrates.

        The tremor lasted 15-20 seconds.

        Experts consider India’s northeast region as the sixth major earthquake-prone belt in the world.</p><br>
    <p>"It was terrible as the quake lasted for about one and half minutes," Biswajit Bhattacharya, a resident of the area, said.

        At least 30 houses developed cracks, officiating Sub-divisional Magistrate of Kamalpur in Dhalai, Amitava Chakma, said.

        "It was the strongest earthquake that I have experienced till date. It felt as if the whole building would collapse," Pradip Mallik, an Agartala resident, said.

        The quake was traced to a location in Ambassa area, about 59 km from Agartala, an official at the Regional Seismological Centre told PTI.</p><br>


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