<?php 
    //Path to connection.php
    include_once "../../data/connection.php";
    
    //session starts
    session_start();

    //GET id from URL with GET method
    $productID = $_GET['productID'];
    
    //SQL query
    $sql = "DELETE FROM newproducts WHERE productID = $productID";
    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['delete-product'] = "<div style='color: #20914f; margin-left: 25px'>Product Deleted Succesfully</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/new-products-page.php");
    } else {
        $_SESSION['delete-product'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Delete Product</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/new-products-page.php");
    }
?>
