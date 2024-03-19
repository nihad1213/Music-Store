<?php 
//Path for connection.php file
include_once "../../data/connection.php";

//Session start
session_start();

//GET bestSellerID from URL
$bestSellerID = $_GET['bestSellerID'];

$sql = "DELETE FROM bestsellers WHERE bestSellerID = $bestSellerID";
$result = mysqli_query($connection, $sql);

if ($result == TRUE) {
    $_SESSION['delete-best-seller'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Deleted Succesfully</div>";
    header("location: http://localhost/Music%20Store/adminpanel/partials/best-seller.php");
} else {
    $_SESSION['delete-best-seller'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Best Seller</div>";
    header("location: http://localhost/Music%20Store/adminpanel/partials/best-seller.php");
}

?>