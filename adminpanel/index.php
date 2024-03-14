<?php  
//adding connection file
include_once "../data/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap link start-->
    <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous"
      />
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"
      ></script>
    <!--Bootstrap link ends-->

    <!--Favicon link starts-->
    <link rel="shortcut icon" href="../assets/logos/admin-fav.png" type="image/x-icon">
    <!--Favicon link ends-->

    <!--CSS link starts-->
    <link rel="stylesheet" href="style/style.css">
    <!--CSS link ends partials/adminpanel.php-->
    <title>Admin Login</title>
</head>
 
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1><strong>Admin Login</strong></h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="adminName" placeholder="Enter the admin username">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="adminPassword" placeholder="Enter the admin password">
            </div>
 
            <input class="button" type="submit" name="submit" value="Log in">
        </div>
    </form>
</body>
</html>

<?php 
//Check admin is exist or not
if (isset($_POST['submit']) || isset($adminName) || isset($adminPassword)) {
    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPassword'];
    //Query
    $sql = "SELECT * FROM admins WHERE adminName = '$adminName' 
            AND adminPassword = '$adminPassword'";
    //Execute Query
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row == TRUE) {
        header("location: http://localhost/Music%20Store/adminpanel/partials/adminpanel.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Admin Doesn\'t Exists!")';
        echo '</script>';
    }

}
//Check ubmt button clicked or not
?>