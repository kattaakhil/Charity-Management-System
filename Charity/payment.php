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
    <title>Payment Form</title>
    <link rel="stylesheet" href="paymentstyles.css">


</head>
<body>

<nav>
    <ul>
        <li><a href="news.php">Home</a></li>
        <li><a href="feedback/index.php">Feedback</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>
</nav>


  <div class="box">
      <form method="post" action="paymentdb.php">
          <h2 align="center">Donations</h2>
          <div class="inputBox">

              <input type="text" name="username" maxlength="15" minlength="4" required>
               <label>Enter your username</label>
            </div>
          <div class="inputBox">

          </div>

          <div class="inputBox">
              <input type="text" name="account" maxlength="16" minlength="16" required>
              <label>Enter your account number</label>
          </div>
          <div class="inputBox">
              <input type="text" name="ifsc" maxlength="10" minlength="10" required>
              <label>Enter your IFSC code</label>
          </div>

          <div class="inputBox">
              <input type="text" name="bank" required>
              <label>Enter your Bank name</label>
          </div>
          <div class="inputBox">
              <input type="text" name="expiry" maxlength="7" required>
              <label>Enter your card expiry</label>
          </div>

          <div class="inputBox">
              <input type="password" name="cvv" maxlength="3" minlength="3" required>
              <label>Enter your cvv</label>
          </div>
		  
		  <div class="inputBox">
              <input type="text" name="amount" maxlength="6" required>
              <label>Amount to Donate</label>
          </div>

          <div>
              <input type="submit" name="pay" value="Proceed to Pay">
          </div>
      </form>

  </div>

</body>
</html>