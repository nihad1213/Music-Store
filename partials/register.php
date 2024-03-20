<?php 
//Path for connection.php file
include_once "../data/connection.php";

//Session start
session_start();

ob_start();
?>

<?php include_once "userprofile-header.php"; ?>
<main>
<div class="container-login">
    <div class="login-form">
      <h2>Sign Up</h2>

      <?php 
      if (isset($_SESSION['password-dont-match'])) {
        echo $_SESSION['password-dont-match'];
        unset($_SESSION['password-dont-match']);
      }

      if (isset($_SESSION['register-error'])) {
        echo $_SESSION['register-error'];
        unset($_SESSION['register-error']);
      }

      if (isset($_SESSION['password-dont-match'])) {
        echo $_SESSION['password-dont-match'];
        unset($_SESSION['password-dont-match']);
      }
      ?>

      <form method="POST">
        <input type="text" placeholder="Enter your name" name = "name" required>
        <input type="text" placeholder="Enter your email" name = "email" required>
        <input type="text" placeholder="Enter your username" name = "username" required>
        <input type="password" placeholder="Enter your password" name = "password" required>
        <input type="password" placeholder="Enter your password again" name = "password2" required>
        <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" 
         autocomplete="cc-number" maxlength="19" 
         placeholder="Card Number: xxxx xxxx xxxx xxxx" name="cardnumber" required>

        <input type="submit" class="button" value="Sign Up" name="submit">
      </form>

      <div class="signup"> 
        <span class="signup">Already have an account?</span>
      <a href="login.php">
        <span>Log in</span>
      </a>  
    </div>
  </div>
</main>
<?php include_once "footer.php"; ?>

<?php
  //adding user information to database
  //if button pressed
  if (isset($_POST['submit']) || isset($name) || isset($email) || isset($userName) || isset($password)|| 
  isset($password2) || isset($cardNumber)) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $userName = $_POST['username'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    $cardNumber = md5($_POST['cardnumber']);

      //Query for adding data
      $sql = "INSERT INTO user SET
      userName = '$name',
      userEmail = '$email',
      userUserName = '$userName',
      userPassword = '$password',
      userCardNumber  = '$cardNumber'
    ";
  
    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
      $_SESSION['register'] = "<div style='color: #20914f; margin-left: 25px'>You Registered Succesfully</div>";
      header("location: http://localhost/Music%20Store/");
      ob_end_flush();
    } else {
      $_SESSION['register-error'] = "<div style='color: #FF0000; margin-left: 25px'>Register Error</div>";
      header("location: http://localhost/Music%20Store/");
      ob_end_flush();
    }
    
  }
?>