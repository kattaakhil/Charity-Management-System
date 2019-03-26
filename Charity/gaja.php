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
    <title>GAJA Cyclone</title>
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
            outline: none;
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

    <a href="gaja.php" class="heading"><h1>GAJA Cyclone:</h1></a><br>
    <img src="images/cyclonegaja.jpeg" width="100%"><br><br>
    <img src="images/gaja1.jpg" width="100%"><br><br>
    <img src="images/gaja2.jpg" width="100%"><br><br>
    <h2>Why the cyclonic storm is called Gaja?</h2><br>
    <p>The cyclone Gaja means elephant in Sanskrit language.
        Cyclones are named by various warning centres to provide ease of communication between forecasters and the general public.</p><br>

    <p>Severe Cyclonic Storm Gaja was the fifth named cyclone of the 2018 North Indian Ocean cyclone season, after cyclones Sagar, Mekunu, Luban and Titli.
        Forming on November 5 as a low pressure system over the Gulf of Thailand, the system crossed through Southern Thailand and the Malay Peninsula and eventually crossed into the Andaman Sea.
        The weak system intensified into a depression over the Bay of Bengal on November 10 and further intensified to a cyclonic storm on November 11, being classified 'Gaja'.
        After tracking west-southwestward for a number of days in the Bay of Bengal, Gaja made landfall in South India, shifted through Vedaranyam, Voimedu, Muthupet, and Adirampattinam.
        The storm survived it's crossing into the Arabian Sea; however, it dissipated in hostile conditions only a few days later.
        As of November 22, 63 people were killed by the storm . Tamil Nadu seeks Rs 15,000 crore from Centre to rebuild after cyclone Gaja</p><br>
    <p>Cyclone Gaja, which hit the TN coast on November 16, effected extensive damage in some coastal districts, Cauvery delta districts and some interior districts.
        According to the latest official figures, 46 people have lost their lives in Cyclone Gaja and more than 2.5 lakh people have been displaced from their houses.
        270 cattle, 1181 goats and around 15000 birds have also been lost due to the cyclone. Around 88102 hectares of agriculture lands have been affected by the gale winds.
        86702 electric poles, 841 transformers, 201 electricity substations and 4844 fishing boats have been destroyed in the cyclone.</p><br>

    <p>At least 13 persons died and public infrastructure and private properties in seven districts were damaged as Cyclone Gaja wreaked havoc in Tamil Nadu on Friday.
        The severe cyclonic storm that made a midnight landfall near Vedaranyam in Nagapattinam district left a trail of destruction over seven hours with wind speeds as high as 110 kmph.
<br>
        The cyclonic system also led to the shifting of over 81,000 people in Nagapattinam, Cuddalore, Tiruvarur, Thanjavur, Pudukkottai,
        Ramanathapuram and Tiruchi districts to 471 relief camps, left 28 livestock dead and felled over 5,000 trees and about 13,000 electric poles across the State.</p><br><br>


    <div>
        <a href="payment.php"><input type="button" value="Donate"></a>
        <a href="feedback/index.php"><input type="button" value="Feedback"></a>
    </div>
    <br>


</div>
<footer width="100%" style="height: 125px;">
    <br><br>
    <h3 style="text-align: center">Thanks for using our Website to donate for the victims.</h3>
    <h2 align="center">Copyright &copy; 2019 Charity Management System</h2>
    <p align="center">All Rights Reserved</p><br><br>
</footer>
</body>
</html>