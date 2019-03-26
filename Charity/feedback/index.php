<?php
include("feedback1.php");
?>
<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('Location: ./../userlogin.php');
    exit;
}
?>

<html>
<head>
<title>Feedback</title>
<style>
        body{
            margin: 0;
            padding: 0;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 50,0.5),rgba(0, 0, 50,0.5)),url(donate.jpg);
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }
        .contact-title{
            margin-top: 100px;
            color: #fff;
            text-transform: uppercase;
            transition: all 4s ease-in-out;
        }
        .contact-title h1{
            font-size: 32px;
            line-height: 10px;
        }
        .contact-title h2{
            font-style: 16px;
        }
        form{
            margin-top: 50px;
            transition: all 4s ease-in-out;
        }
        .form-control{
            width: 600px;
            background: transparent;
            border: none;
            outline:none;
            border-bottom: 1px solid gray;
            color: #fff;
            font-size: 18px;
            margin-bottom: 16px;
        }
        input{
            height: 45px;
        }
        .form-control-submit{
            background: #ff5722;
            border-color: transparent;
            color: #fff;
            outline: none;
            border: none;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            height: 50px;
            margin-top: 20px;
            border-radius: 20px;
            padding: 2px 40px;
        }
        .form-control-submit:hover{
            background-color: #f44336;
            cursor: pointer;
        }
		nav{
            background-color: black;
            overflow: hidden;
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
</style>
</head>
<body>
<nav>
    <ul>
        <li><a href="..\news.php">Home</a></li>
        <li><a href="index.php">Feedback</a></li>
        <li><a href="..\logout.php">logout</a></li>
    </ul>
</nav>
<div class="contact-title">
<h1>Say Hello</h1>
<h2>We are always ready to serve you!</h2>
</div>
<div class="contact-form">
    <form id="contact-form" method="post" action="feedback1_user.php">
        <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
        <textarea name="message" class="form-control" placeholder="message" rows="4" required></textarea><br>
        <input type="submit" class="form-control-submit" value="Submit Your Feedback">
    </form>

</div>

</body>
</html>