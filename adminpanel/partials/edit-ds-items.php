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
            <h2><strong>Edit Discounted Item</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $dsItemsID = $_GET['dsItemsID'];

            //Query for check ID
            $sql = "SELECT * FROM dsitems WHERE dsItemsID= '$dsItemsID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-ds-items.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newdsItemsTitle" placeholder="Enter Discounted Item Title..."
                value="<?php echo $row['dsItemsTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newdsItemsPrice" placeholder="Enter Discounted Item Price..."
                value="<?php echo $row['dsItemsPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newdsItemsLabel" placeholder="Enter Discounted Item Label..." 
                value="<?php echo $row['dsItemsLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newdsItemsImage" 
                value = "<?php echo $row['dsItemsImage']; ?>" required>
                <input type="hidden" name="dsItemsID" value=<?php echo $row['dsItemsID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Discounted Item</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
    //Check button is clicked
    if (isset($_POST['submit']) || isset($newdsItemsTitle) || isset($newdsItemsPrice) || isset($newdsItemsLabel)
    || isset($newdsItemsImage)) {

        $newdsItemsTitle = $_POST['newdsItemsTitle'];
        $newdsItemsPrice = $_POST['newdsItemsPrice'];
        $newdsItemsLabel = $_POST['newdsItemsLabel'];
        $dsItemsID = $_POST['dsItemsID'];
        $newdsItemsImage = $_FILES['newdsItemsImage']['name'];

        if (isset($newdsItemsImage)) {
            $newImageName = $_FILES['newdsItemsImage']['name'];
            $sourcePath = $_FILES['newdsItemsImage']['tmp_name'];
            $destinationPath = "../../assets/dsitems/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/Music-Store/adminpanel/partials/edit-ds-items.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE dsitems SET
            dsItemsTitle = '$newdsItemsTitle',
            dsItemsPrice = '$newdsItemsPrice',
            dsItemsLabel = '$newdsItemsLabel',
            dsItemsImage = '$newdsItemsImage'
            WHERE dsItemsID = '$dsItemsID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-ds-items'] = "<div style='color: #20914f; margin-left: 25px'>Discounted Item Edited Succesfully</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
        } else {
            $_SESSION['edit-ds-items'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Discounted Item</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/ds-items.php");
        }
        
    }
?>
