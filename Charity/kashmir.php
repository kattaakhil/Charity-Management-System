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

    <a href="kashmir.php" class="heading"><h1>KASHMIR Floods</h1></a><br>
    <img src="images/kashmir.jpg" width="100%"><br><br>
    <img src="images/kashmir1.jpg" width="100%"><br><br>
    <img src="images/kashmir2.jpg" width="100%"><br><br>

    <p>The Jammu and Kashmir state and adjoining areas received heavy rainfall from 2 September 2014 onwards, during last stage of monsoon in India.
        This triggered flooding and landslides in India and the adjoining areas of Pakistan.
        On 5 September, the Jhelum River in Srinagar was reported to be flowing at 22.40 feet (6.83 m) which was 4.40 feet (1.34 m)
        above the danger mark and at 33 feet (10 m) at Sangam in Anantnag district above the danger mark. The discharge rate in the river was recorded as
        70,000 cusecs against the normal discharge of 25,000 cusecs.
        The Chenab River was also reported to flow above the danger mark by which hundreds of villages were affected in Pakistan.
        These rivers flooded into the streets causing heavy casualties and loss of property.</p><br>
    <p>In the wake of heavy monsoon rain and flash floods in Jammu and Kashmir, which have allegedly killed over four hundred and rendered hundreds of thousands homeless,
        the Indian Armed Forces were deployed in increasing numbers starting 2 September 2014 to conduct search, rescue, relief, relocation,humanitarian assistance
        and rehabilitation missions in Jammu and Kashmir.
        By 18 September, over 200,000 people were rescued from the various parts of Jammu and Kashmir by the Armed forces.
        The Jammu and Kashmir floods, the worst in a century according to Omar Abdullah, the Chief Minister of Jammu and Kashmir, paralyzed the state government.
        Omar Abdullah, responding to public criticism, told the media "I had no government" in the first few days following the floods, as "My secretariat,
        the police headquarters, the control room, fire services, hospitals, all the infrastructure was underwater.
        " Adding "I had no cell phone and no connectivity. I am now starting to track down ministers and officers."</p><br>
    <p> The Jammu and Kashmir floods of 2014 have been blamed on heavy rainfall, about 8 inches (200mm) on 4 September alone,
        on climate change, unplanned and uncontrolled development, encroachment of river banks, lakes, ponds, and massive loss of wet lands, absence of local government
        flood forecasting system, and poor governance.[7] The Armed Forces humanitarian assistance mission in response to the floods was named Mission Sahayata (assistances).
        Northern Command's humanitarian assistance to Civil authorities was named 'Operation Megh Rahat'.
        </p><br>

    <p>The Indian Army, Air Force, and the Navy, committed large resources to the assistance mission including over 30,000 troops
        ( 21,000 in Srinagar, and 9000 in Jammu), 15 engineer task forces, 84 Indian Air Force and Army Aviation Corps fixed wing transport aircraft and helicopters
        , naval commandos and rescue specialists, and Base Hospital, four field hospitals, over 106 medical detachments.
        "Operation Megh Rahat", ended on 19 September 2014, but "Operation Sadbhavna",
        the relief and medical assistance support, according to government press release, will continue in "close synergy with the civil administration and the police".</p><br>

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