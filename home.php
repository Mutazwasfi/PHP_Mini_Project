<?php
  require_once 'Includes\config.php';
  require_once 'Includes\signupView.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    
<div class="wrapper">
  
  <!--  Header  -->
  <header class="section welcome">
      
    <div class="welcomeText">
      <h2>Welcome To Hell</h2>
      <br>
      <h3>We Wish you a lovely stay.</h3>
      <br>
      <p>Log in or create a new account.</p>
    </div>
    <div class="welcomeBtns">
      <button class="wlcBtnSignUP">Sign Up</button>
      <button class="wlcBtnLogIn">Log in</button>
    </div>
  </header>

  <!--  Sign Up  -->
    <section class="section sign-up">
      <form action="Includes\signup.php" method="post">
        <input required type="text" name="fName" placeholder="First Name">
        <input required type="text" name="mName" placeholder="Middle Name">
        <input required type="text" name="lName" placeholder="Last Name">
        <input required type="text" name="famName" placeholder="Family Name">
        <input required type="text" name="email" placeholder="Email">
        <input required type="password" name="pwd" placeholder="Password">
        <input required type="password" name="confirmPwd" placeholder="Confirm Password">
        <input required type="tel" name="phoneNumber" placeholder="Phone Number">
        <input required type="date" name="birthDate" placeholder="birth Date">
        <button type="submit" class="btnSignUP">Sign UP</button>
        <p class="opposite-btn2">Already have an account?</p>
      </form>
    </section>
    <p class="formError"></p>

    <?php
    check_signup_errors();
    ?>
      
    <!--  Sign In  -->
    <section class="section sign-in">
      <form action="Includes\login.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btnSignIn">Sign In</button>
        <p class="opposite-btn1">Don't have an account?</p>
      </form>
    </section>

    <!--  Show Data -->
    <section class="section Data">
    <?php
      include_once 'Includes\showUserData.php';
      // Decode the data from the query parameter
      $data = json_decode($_GET['data'], true);
      foreach ($data as $row) {
        echo "<div class='welcomeText'>";
        echo "<h2> Welcome " . $row['id'] . "</h2>";
      echo "<br>";
        echo "<p>" . $row['fName'] . " " . $row['famName'] . "</p>";
      echo "<br>";
        echo "<p>" . $row['email'] . "</p>";
      echo "</div>";
        echo "<br>";
      }
      ?>
    </section>
</div>
<script src="home.js"></script>
</body>
</html>


<!-- <input type="password" id="password" required pattern="^(?=.*[A-Z])(?=.*[0-9]{2,})(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,32}$"
title="Password must start with a capital letter, have at least two numbers, one special character, and be 8-32 characters long"> -->