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
            <h2><strong>Edit Book/Magazine</strong></h2>
        </div>
        
        <?php 
            if (isset($_SESSION['upload-image'])) {
                echo $_SESSION['upload-image'];
                unset($_SESSION['upload-image']);
            }
        ?>
        
        <?php
            //Get Product id from URL with GET method
            $bookID = $_GET['bookID'];

            //Query for check ID
            $sql = "SELECT * FROM book WHERE bookID= '$bookID'";
            
            //Execute Query
            $result = mysqli_query($connection, $sql);

            //Get values as a row
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="add-admin-form">
            <form action="edit-book.php" method="POST" enctype="multipart/form-data">
                <label>New Title: </label><input type="text" name="newbookTitle" placeholder="Enter Book/Magazine Title..."
                value="<?php echo $row['bookTitle']; ?>" required>
                <br>
                <label>New Price: </label><input type="number" step="any" name="newbookPrice" placeholder="Enter Book/Magazine Price..."
                value="<?php echo $row['bookPrice']; ?>" required>
                <br>
                <label>New Label: </label><input type="text" name="newbookLabel" placeholder="Enter Book/Magazine Label..." 
                value="<?php echo $row['bookLabel'] ?>" required>
                <br>
                <label>New Image: </label><input type="file" name="newbookImage" 
                value = "<?php echo $row['bookImage']; ?>" required>
                <input type="hidden" name="bookID" value=<?php echo $row['bookID'];?>>
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
    if (isset($_POST['submit']) || isset($newbookTitle) || isset($newbookPrice) || isset($newbookLabel)
    || isset($newbookImage)) {

        $newbookTitle = $_POST['newbookTitle'];
        $newbookPrice = $_POST['newbookPrice'];
        $newbookLabel = $_POST['newbookLabel'];
        $bookID = $_POST['bookID'];
        $newbookImage = $_FILES['newbookImage']['name'];

        if (isset($newbookImage)) {
            $newImageName = $_FILES['newbookImage']['name'];
            $sourcePath = $_FILES['newbookImage']['tmp_name'];
            $destinationPath = "../../assets/books/" . $newImageName;
            $upload = move_uploaded_file($sourcePath, $destinationPath);
        
            //Check Image added or not
            if ($upload == FALSE) {
                $_SESSION['upload-image'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Upload Image</div>";
                header("location: http://localhost/book%20Store/adminpanel/partials/edit-book.php");
            }
        
        }
        
        //Query to Update values
        $sql2 = "UPDATE book SET
            bookTitle = '$newbookTitle',
            bookPrice = '$newbookPrice',
            bookLabel = '$newbookLabel',
            bookImage = '$newbookImage'
            WHERE bookID = '$bookID'
        ";

        //Execute Query
        $result2 = mysqli_query($connection, $sql2);

        if ($result2 == TRUE) {
            $_SESSION['edit-book'] = "<div style='color: #20914f; margin-left: 25px'>Book/Magazine Edited Succesfully</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/book.php");
        } else {
            $_SESSION['edit-book'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Book/Magazine</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/book.php");
        }
        
    }
?>