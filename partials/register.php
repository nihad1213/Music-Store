<?php include_once "userprofile-header.php"; ?>
<main>
<div class="container-login">
    <div class="login-form">
      <h2>Sign Up</h2>

      <form action="../includes/signup.inc.php" method="POST">
        <input type="text" placeholder="Enter your name" name = "name" required>
        <input type="text" placeholder="Enter your email" name = "email" required>
        <input type="text" placeholder="Enter your username" name = "username" required>
        <input type="password" placeholder="Enter your password" name = "password" required>
        <input type="password" placeholder="Enter your password again" name = "password2" required>
        <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" 
         autocomplete="cc-number" maxlength="19" 
         placeholder="Card Number: xxxx xxxx xxxx xxxx" required>
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