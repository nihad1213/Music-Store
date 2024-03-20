<?php 
//Path for connection.php file
include_once "../../data/connection.php";

//Session start
session_start();

//GET bestSellerID from URL
$posterID = $_GET['posterID'];

$sql = "DELETE FROM poster WHERE posterID = $posterID";
$result = mysqli_query($connection, $sql);

if ($result == TRUE) {
    $_SESSION['delete-poster'] = "<div style='color: #20914f; margin-left: 25px'>Poster Deleted Succesfully</div>";
    header("location: http://localhost/Music%20Store/adminpanel/partials/poster.php");
} else {
    $_SESSION['delete-poster'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Poster</div>";
    header("location: http://localhost/Music%20Store/adminpanel/partials/poster.php");
}

?>