<?php
//Start Session
session_start();

//Path to connection.php file
include_once "../../data/connection.php";

//Getting adminID from URL with GET method
$adminID = $_GET['adminID'];

//SQL query
$sql = "DELETE FROM admins WHERE adminID = $adminID";

//Execute Query
$result = mysqli_query($connection, $sql);

//Sessions for Showing message

if ($result == TRUE) {
    $_SESSION['delete'] = "<div style='color: #20914f; margin-left: 25px'>Admin Deleted Succesfully</div>";
    header("location: http://localhost/Music-Store/adminpanel/partials/adminpage.php");
} else {
    $_SESSION['delete'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Admin</div>";
    header("location: http://localhost/Music-Store/adminpanel/partials/adminpage.php");
}
?>
