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
            <h2><strong>Edit Music Albums</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $musicID = $_GET['musicID'];

            //Query for check ID
            $sql = "SELECT * FROM music WHERE musicID= '$musicID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-music.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newmusicTitle" placeholder="Enter ALbum Title..."
                value="<?php echo $row['musicTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newmusicPrice" placeholder="Enter Album Price..."
                value="<?php echo $row['musicPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newmusicLabel" placeholder="Enter Album Label..." 
                value="<?php echo $row['musicLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newmusicImage" 
                value = "<?php echo $row['musicImage']; ?>" required>
                <input type="hidden" name="musicID" value=<?php echo $row['musicID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Music Album</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
    //Check button is clicked
    if (isset($_POST['submit']) || isset($newmusicTitle) || isset($newmusicPrice) || isset($newmusicLabel)
    || isset($newmusicImage)) {

        $newmusicTitle = $_POST['newmusicTitle'];
        $newmusicPrice = $_POST['newmusicPrice'];
        $newmusicLabel = $_POST['newmusicLabel'];
        $musicID = $_POST['musicID'];
        $newmusicImage = $_FILES['newmusicImage']['name'];

        if (isset($newmusicImage)) {
            $newImageName = $_FILES['newmusicImage']['name'];
            $sourcePath = $_FILES['newmusicImage']['tmp_name'];
            $destinationPath = "../../assets/music/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/Music%20Store/adminpanel/partials/edit-music.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE music SET
            musicTitle = '$newmusicTitle',
            musicPrice = '$newmusicPrice',
            musicLabel = '$newmusicLabel',
            musicImage = '$newmusicImage'
            WHERE musicID = '$musicID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-music'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Edited Succesfully</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/music.php");
        } else {
            $_SESSION['edit-music'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Best Seller</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/music.php");
        }
        
    }
?>