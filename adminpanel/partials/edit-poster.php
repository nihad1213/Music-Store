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
            <h2><strong>Edit Poster</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $posterID = $_GET['posterID'];

            //Query for check ID
            $sql = "SELECT * FROM poster WHERE posterID= '$posterID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-poster.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newposterTitle" placeholder="Enter ALbum Title..."
                value="<?php echo $row['posterTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newposterPrice" placeholder="Enter Album Price..."
                value="<?php echo $row['posterPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newposterLabel" placeholder="Enter Album Label..." 
                value="<?php echo $row['posterLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newposterImage" 
                value = "<?php echo $row['posterImage']; ?>" required>
                <input type="hidden" name="posterID" value=<?php echo $row['posterID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Poster</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
    //Check button is clicked
    if (isset($_POST['submit']) || isset($newposterTitle) || isset($newposterPrice) || isset($newposterLabel)
    || isset($newposterImage)) {

        $newposterTitle = $_POST['newposterTitle'];
        $newposterPrice = $_POST['newposterPrice'];
        $newposterLabel = $_POST['newposterLabel'];
        $posterID = $_POST['posterID'];
        $newposterImage = $_FILES['newposterImage']['name'];

        if (isset($newposterImage)) {
            $newImageName = $_FILES['newposterImage']['name'];
            $sourcePath = $_FILES['newposterImage']['tmp_name'];
            $destinationPath = "../../assets/posters/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/poster%20Store/adminpanel/partials/edit-poster.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE poster SET
            posterTitle = '$newposterTitle',
            posterPrice = '$newposterPrice',
            posterLabel = '$newposterLabel',
            posterImage = '$newposterImage'
            WHERE posterID = '$posterID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-poster'] = "<div style='color: #20914f; margin-left: 25px'>Poster Edited Succesfully</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/poster.php");
        } else {
            $_SESSION['edit-poster'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Poster</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/poster.php");
        }
        
    }
?>