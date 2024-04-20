<?php 
//Path for connection.php file
include_once "../../data/connection.php";

//Session start
session_start();
?>

<?php include_once "header.php"; ?>
<main>
    <div>
        <div>
            <h2><strong>Add New Discounted Item</strong></h2>
        </div>
        
        <?php
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <div class="add-admin-form">
            <form action="add-ds-items.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="dsItemsTitle" placeholder="Enter Discount Item Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="dsItemsPrice" placeholder="Enter Discount Item Price..." required>
                <br>
                <label>Label: </label><input type="text" name="dsItemsLabel" placeholder="Enter Discount Item Label..." required>
                <br>
                <label>Image: </label><input type="file" name="dsItemsImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Discount Item</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Adding data to database
if (isset($_POST['submit']) || isset($dsItemsTitle) || isset($dsItemsPrice) || isset($dsItemsLabel)
|| isset($dsItemsImage)) {

    $dsItemsTitle = $_POST['dsItemsTitle'];
    $dsItemsPrice = $_POST['dsItemsPrice'];
    $dsItemsLabel = $_POST['dsItemsLabel'];
    $dsItemsImage = $_FILES['dsItemsImage']['name'];

    if (isset($dsItemsImage)) {
        $imageName = $_FILES['dsItemsImage']['name'];
        $sourcePath = $_FILES['dsItemsImage']['tmp_name'];
        $destinationPath = "../../assets/dsitems/" . $imageName;
        $upload = move_uploaded_file($sourcePath, $destinationPath);

        //Check image added or not
        if ($upload == FALSE) {
            $_SESSION['upload'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/add-ds-items.php"); 
        }
    }

    //Query for adding data
    $sql = "INSERT INTO dsitems SET
        dsItemsTitle = '$dsItemsTitle',
        dsItemsPrice = '$dsItemsPrice',
        dsItemsLabel = '$dsItemsLabel',
        dsItemsImage = '$dsItemsImage'
    ";

    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['add-ds-items'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Added Succesfully</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
    } else {
        $_SESSION['add-ds-items'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Best Seller</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
    }

}
?>
