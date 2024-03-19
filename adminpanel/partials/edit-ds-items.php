<?php 
    //Path for connection.php file
    include_once "../../data/connection.php";

    //Session Start
    session_start();
?>
<?php include_once "header.php"; ?>
<main>
    <div>
        <div>
            <h2><strong>Edit Best Seller</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $bestSellerID = $_GET['bestSellerID'];

            //Query for check ID
            $sql = "SELECT * FROM bestsellers WHERE bestSellerID= '$bestSellerID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-best-seller.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newbestSellerTitle" placeholder="Enter Best Seller Title..."
                value="<?php echo $row['bestSellerTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newbestSellerPrice" placeholder="Enter Best Seller Price..."
                value="<?php echo $row['bestSellerPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newbestSellerLabel" placeholder="Enter Best Seller Label..." 
                value="<?php echo $row['bestSellerLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newbestSellerImage" 
                value = "<?php echo $row['bestSellerImage']; ?>" required>
                <input type="hidden" name="bestSellerID" value=<?php echo $row['bestSellerID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Best Seller</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
    //Check button is clicked
    if (isset($_POST['submit']) || isset($newbestSellerTitle) || isset($newbestSellerPrice) || isset($newbestSellerLabel)
    || isset($newbestSellerImage)) {

        $newbestSellerTitle = $_POST['newbestSellerTitle'];
        $newbestSellerPrice = $_POST['newbestSellerPrice'];
        $newbestSellerLabel = $_POST['newbestSellerLabel'];
        $bestSellerID = $_POST['bestSellerID'];
        $newbestSellerImage = $_FILES['newbestSellerImage']['name'];

        if (isset($newProductImage)) {
            $newImageName = $_FILES['newbestSellerImage']['name'];
            $sourcePath = $_FILES['newbestSellerImage']['tmp_name'];
            $destinationPath = "../../assets/bestsellers/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/Music%20Store/adminpanel/partials/edit-best-seller.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE bestsellers SET
            bestSellerTitle = '$newbestSellerTitle',
            bestSellerPrice = '$newbestSellerPrice',
            bestSellerLabel = '$newbestSellerLabel',
            bestSellerImage = '$newbestSellerImage'
            WHERE bestSellerID = '$bestSellerID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-best-seller'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Edited Succesfully</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/best-seller.php");
        } else {
            $_SESSION['edit-best-seller'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Best Seller</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/best-seller.php");
        }
        
    }
?>