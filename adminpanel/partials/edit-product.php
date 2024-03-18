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
            <h2><strong>Edit New Product</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $productID = $_GET['productID'];

            //Query for check ID
            $sql = "SELECT * FROM newproducts WHERE productID= '$productID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-product.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newProductTitle" placeholder="Enter Product Title..."
                value="<?php echo $row['productTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newProductPrice" placeholder="Enter Product Price..."
                value="<?php echo $row['productPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newProductLabel" placeholder="Enter Product Label..." 
                value="<?php echo $row['productLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newProductImage" 
                value = "<?php echo $row['productImage']; ?>" required>
                <input type="hidden" name="productID" value=<?php echo $row['productID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Product</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>\

<?php 
    //Check button is clicked
    if (isset($_POST['submit']) || isset($newProductTitle) || isset($newProductPrice) || isset($newProductLabel)
    || isset($newProductImage)) {

        $newProductTitle = $_POST['newProductTitle'];
        $newProductPrice = $_POST['newProductPrice'];
        $newProductLabel = $_POST['newProductLabel'];
        $productID = $_POST['productID'];
        $newProductImage = $_FILES['newProductImage']['name'];

        if (isset($newProductImage)) {
            $newImageName = $_FILES['newProductImage']['name'];
            $sourcePath = $_FILES['newProductImage']['tmp_name'];
            $destinationPath = "../../assets/newproducts/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/Music%20Store/adminpanel/partials/edit-product.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE newproducts SET
            productTitle = '$newProductTitle',
            productPrice = '$newProductPrice',
            productLabel = '$newProductLabel',
            productImage = '$newProductImage'
            WHERE productID = '$productID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-product'] = "<div style='color: #20914f; margin-left: 25px'>Product Edited Succesfully</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/new-products-page.php");
        } else {
            $_SESSION['edit-product'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Product</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/new-products-page.php");
        }
        
    }
?>
