<?php 
    //Session Start
    session_start();
    
    //Path for connection.php file
    include_once "../../data/connection.php";
?>
<?php include_once "header.php"; ?>
<main>
    <div>
        <div>
            <h2><strong>Add New Product</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <div class="add-admin-form">
            <form action="add-product.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="productTitle" placeholder="Enter Product Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="productPrice" placeholder="Enter Product Price..." required>
                <br>
                <label>Label: </label><input type="text" name="productLabel" placeholder="Enter Product Label..." required>
                <br>
                <label>Image: </label><input type="file" name="productImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
    //Adding Data to Table newproducts
    if (isset($_POST['submit']) || isset($productTitle) || isset($productPrice) || isset($productLabel) || 
    isset($productImage)) {
        $productTitle = $_POST['productTitle'];
        $productPrice = $_POST['productPrice'];
        $productLabel = $_POST['productLabel'];
        $productImage = $_FILES['productImage']['name'];

        if (isset($productImage)) {
            $imageName = $_FILES['productImage']['name'];
            $sourcePath = $_FILES['productImage']['tmp_name'];
            $destinationPath = "../../assets/newproducts/" . $imageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/Music-Store/adminpanel/partials/add-product.php");
            }
        
        }
        
        //Query for adding values
        $sql = "INSERT INTO newproducts SET
            productTitle = '$productTitle',
            productPrice = '$productPrice',
            productLabel = '$productLabel',
            productImage = '$productImage'
        ";

        //Result
        $result = mysqli_query($connection, $sql);

        if ($result == TRUE) {
            $_SESSION['add-product'] = "<div style='color: #20914f; margin-left: 25px'>Product Added Succesfully</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/new-products-page.php");
        } else {
            $_SESSION['add-product'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Product</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/new-products-page.php");
        }
        
    }
?>
