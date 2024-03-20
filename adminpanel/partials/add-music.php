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
            <h2><strong>Add New Music Album</strong></h2>
        </div>
        
        <?php
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <div class="add-admin-form">
            <form action="add-music.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="musicTitle" placeholder="Enter Album Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="musicPrice" placeholder="Enter Album Price..." required>
                <br>
                <label>Label: </label><input type="text" name="musicLabel" placeholder="Enter Album Label..." required>
                <br>
                <label>Image: </label><input type="file" name="musicImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Music Album</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Adding data to database
if (isset($_POST['submit']) || isset($musicTitle) || isset($musicPrice) || isset($musicLabel)
|| isset($musicImage)) {

    $musicTitle = $_POST['musicTitle'];
    $musicPrice = $_POST['musicPrice'];
    $musicLabel = $_POST['musicLabel'];
    $musicImage = $_FILES['musicImage']['name'];

    if (isset($musicImage)) {
        $imageName = $_FILES['musicImage']['name'];
        $sourcePath = $_FILES['musicImage']['tmp_name'];
        $destinationPath = "../../assets/music/" . $imageName;
        $upload = move_uploaded_file($sourcePath, $destinationPath);

        //Check image added or not
        if ($upload == FALSE) {
            $_SESSION['upload'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/add-music.php"); 
        }
    }

    //Query for adding data
    $sql = "INSERT INTO music SET
        musicTitle = '$musicTitle',
        musicPrice = '$musicPrice',
        musicLabel = '$musicLabel',
        musicImage = '$musicImage'
    ";

    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['add-music'] = "<div style='color: #20914f; margin-left: 25px'>Best Seller Added Succesfully</div>";
        header("location: http://localhost/Music%20Store/adminpanel/partials/music.php");
    } else {
        $_SESSION['add-music'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Best Seller</div>";
        header("location: http://localhost/Music%20Store/adminpanel/partials/music.php");
    }

}
?>