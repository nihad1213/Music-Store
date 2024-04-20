<?php 
    //Path to connection.php
    include_once "../../data/connection.php";
    
    //session starts
    session_start();

    //GET id from URL with GET method
    $dsItemsID = $_GET['dsItemsID'];
    
    //SQL query
    $sql = "DELETE FROM dsitems WHERE dsItemsID = $dsItemsID";
    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['delete-ds-items'] = "<div style='color: #20914f; margin-left: 25px'>Product Deleted Succesfully</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
    } else {
        $_SESSION['delete-ds-items'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Product</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
    }
?>
