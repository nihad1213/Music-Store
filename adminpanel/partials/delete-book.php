<?php 
//Path for connection.php file
include_once "../../data/connection.php";

//Session start
session_start();

//GET bestSellerID from URL
$bookID = $_GET['bookID'];

$sql = "DELETE FROM book WHERE bookID = $bookID";
$result = mysqli_query($connection, $sql);

if ($result == TRUE) {
    $_SESSION['delete-book'] = "<div style='color: #20914f; margin-left: 25px'>Poster Deleted Succesfully</div>";
    header("location: http://localhost/Music-Store/adminpanel/partials/book.php");
} else {
    $_SESSION['delete-book'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Poster</div>";
    header("location: http://localhost/Music-Store/adminpanel/partials/book.php");
}

?>
