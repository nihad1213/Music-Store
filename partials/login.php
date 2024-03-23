<?php 
//Path for connection.php file
include_once "../data/connection.php";

ob_start();
?>

<?php include_once "header.php"; ?>
<main>
    <div class="container-login">
    
        <div class="login-form">
            <h2>Login</h2>

        <form action="login.php" method="POST">
            <input type="text" placeholder="Enter your username" name = "username" required>
            <input type="password" placeholder="Enter your password" name = "password" required>
            <a href="#">Forgot password?</a>

            <input class="button" type="submit" name="submit" value="Log in">
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

<?php 
    if (isset($_POST['submit']) || isset($name) || isset($password)) {
        $name = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE userUserName = '$name' 
            AND userPassword = md5('$password')";

        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row == TRUE) {
            header("location: http://localhost/Music%20Store/");
            ob_end_flush();
        } else {
            echo '<script language="javascript">';
            echo 'alert("User Doesn\'t Exists!")';
            echo '</script>';
        }
    }
?>