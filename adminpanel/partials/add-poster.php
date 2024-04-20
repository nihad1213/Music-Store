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
            <h2><strong>Add New Poster</strong></h2>
        </div>
        
        <?php
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <div class="add-admin-form">
            <form action="add-poster.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="posterTitle" placeholder="Enter Poster Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="posterPrice" placeholder="Enter Poster Price..." required>
                <br>
                <label>Label: </label><input type="text" name="posterLabel" placeholder="Enter Poster Label..." required>
                <br>
                <label>Image: </label><input type="file" name="posterImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Poster</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Adding data to database
if (isset($_POST['submit']) || isset($posterTitle) || isset($posterPrice) || isset($posterLabel)
|| isset($posterImage)) {

    $posterTitle = $_POST['posterTitle'];
    $posterPrice = $_POST['posterPrice'];
    $posterLabel = $_POST['posterLabel'];
    $posterImage = $_FILES['posterImage']['name'];

    if (isset($posterImage)) {
        $imageName = $_FILES['posterImage']['name'];
        $sourcePath = $_FILES['posterImage']['tmp_name'];
        $destinationPath = "../../assets/posters/" . $imageName;
        $upload = move_uploaded_file($sourcePath, $destinationPath);

        //Check image added or not
        if ($upload == FALSE) {
            $_SESSION['upload'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/add-poster.php"); 
        }
    }

    //Query for adding data
    $sql = "INSERT INTO poster SET
        posterTitle = '$posterTitle',
        posterPrice = '$posterPrice',
        posterLabel = '$posterLabel',
        posterImage = '$posterImage'
    ";

    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['add-poster'] = "<div style='color: #20914f; margin-left: 25px'>Poster Added Succesfully</div>";
        header("location: http://localhost/Music-0Store/adminpanel/partials/poster.php");
    } else {
        $_SESSION['add-poster'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Poster</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/poster.php");
    }

}
?>
