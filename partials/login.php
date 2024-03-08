<?php include_once "userprofile-header.php"; ?>
<main>
    <div class="container-login">
    
        <div class="login-form">
            <h2>Login</h2>

        <form action="" method="POST">
            <input type="text" placeholder="Enter your username" name = "username" required>
            <input type="password" placeholder="Enter your password" name = "password" required>
            <a href="#">Forgot password?</a>
            <input type="submit" class="button" value="Login" name="submit">
        </form>
      
        <div class="signup"> 
            <span class="signup">Don't have an account?</span>
                <a href="register.php" style="text-decoration: none;">
                    <span>Sign Up</span>
                </a>  
        </div>

    </div>
</main>
<?php include_once "footer.php"; ?>