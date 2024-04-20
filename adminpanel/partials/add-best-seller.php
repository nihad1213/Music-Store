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
            <h2><strong>Add New Best Seller</strong></h2>
        </div>
        
        <?php
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <div class="add-admin-form">
            <form action="add-best-seller.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="bestSellerTitle" placeholder="Enter Best Seller Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="bestSellerPrice" placeholder="Enter Best Seller Price..." required>
                <br>
                <label>Label: </label><input type="text" name="bestSellerLabel" placeholder="Enter Best Seller Label..." required>
                <br>
                <label>Image: </label><input type="file" name="bestSellerImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Best Seller</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Adding data to database
if (isset($_POST['submit']) || isset($bestSellerTitle) || isset($bestSellerPrice) || isset($bestSellerLabel)
|| isset($bestSellerImage)) {

    $bestSellerTitle = $_POST['bestSellerTitle'];
    $bestSellerPrice = $_POST['bestSellerPrice'];
    $bestSellerLabel = $_POST['bestSellerLabel'];
    $bestSellerImage = $_FILES['bestSellerImage']['name'];

    if (isset($bestSellerImage)) {
        $imageName = $_FILES['bestSellerImage']['name'];
        $sourcePath = $_FILES['bestSellerImage']['tmp_name'];
        $destinationPath = "../../assets/bestsellers/" . $imageName;
        $upload = move_uploaded_file($sourcePath, $destinationPath);

        //Check image added or not
        if ($upload == FALSE) {
            $_SESSION['upload'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/add-best-seller.php"); 
        }
    }

    //Query for adding data
    $sql = "INSERT INTO bestsellers SET
        bestSellerTitle = '$bestSellerTitle',
        bestSellerPrice = '$bestSellerPrice',
        bestSellerLabel = '$bestSellerLabel',
        bestSellerImage = '$bestSellerImage'
    ";

    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['add-best-seller'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Added Succesfully</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/best-seller.php");
    } else {
        $_SESSION['add-best-seller'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Best Seller</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/best-seller.php");
    }

}
?>
