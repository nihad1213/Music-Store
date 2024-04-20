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
            <h2><strong>Add New Book/Magazine</strong></h2>
        </div>
        
        <?php
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <div class="add-admin-form">
            <form action="add-book.php" method="POST" enctype="multipart/form-data">
                <label>Title: </label><input type="text" name="bookTitle" placeholder="Enter Book/Magazine Title..." required>
                <br>
                <label>Price: </label><input type="number" step="any" name="bookPrice" placeholder="Enter Book/Magazine Price..." required>
                <br>
                <label>Label: </label><input type="text" name="bookLabel" placeholder="Enter Book/Magazine Label..." required>
                <br>
                <label>Image: </label><input type="file" name="bookImage" required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Book/Magazine</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Adding data to database
if (isset($_POST['submit']) || isset($bookTitle) || isset($bookPrice) || isset($bookLabel)
|| isset($bookImage)) {

    $bookTitle = $_POST['bookTitle'];
    $bookPrice = $_POST['bookPrice'];
    $bookLabel = $_POST['bookLabel'];
    $bookImage = $_FILES['bookImage']['name'];

    if (isset($bookImage)) {
        $imageName = $_FILES['bookImage']['name'];
        $sourcePath = $_FILES['bookImage']['tmp_name'];
        $destinationPath = "../../assets/books/" . $imageName;
        $upload = move_uploaded_file($sourcePath, $destinationPath);

        //Check image added or not
        if ($upload == FALSE) {
            $_SESSION['upload'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
            header("location: http://localhost/Music-Store/adminpanel/partials/add-book.php"); 
        }
    }

    //Query for adding data
    $sql = "INSERT INTO book SET
        bookTitle = '$bookTitle',
        bookPrice = '$bookPrice',
        bookLabel = '$bookLabel',
        bookImage = '$bookImage'
    ";

    $result = mysqli_query($connection, $sql);

    if ($result == TRUE) {
        $_SESSION['add-book'] = "<div style='color: #20914f; margin-left: 25px'>Book/Magazine Added Succesfully</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/book.php");
    } else {
        $_SESSION['add-book'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Add Book/Magazine</div>";
        header("location: http://localhost/Music-Store/adminpanel/partials/book.php");
    }

}
?>
