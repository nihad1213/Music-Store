<?php
//adding connection.php file
include "../../data/connection.php";
?>

<?php include_once "header.php"; ?>
<main>
    <div>
        <div>
            <h2><strong>Add Admin</strong></h2>
        </div>

        <?php 
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <div class="add-admin-form">
            <form action="" method="POST">
                Username: <input type="text" name="adminName" placeholder="Enter Admin Username..." required>
                <br>
                Password: <input type="password" name="adminPassword" placeholder="Enter Admin Password..." required>
            </form>
        </div>

        <div class="add-admin">
            <form action="" method="POST">
                <button type="submit" name="submit" class="btn btn-success">Add Admin</button>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>


<?php
//Add admin name and password to table

//check if submit button clicked or not

if (isset($_POST['submit'])) {

    $adminName = $_POST['adminName'];
    $adminPassword  = md5($_POST['adminPassword']);
    
    //adding sql table
    $sql = "INSERT INTO admins SET
        adminName = '$adminName',
        adminPassword = '$adminPassword'
    ";

    //Execute Query
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if ($result == TRUE) {
        $_SESSION['add'] = "Admin added Succesfully";
        header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
    } else {
        $_SESSION['add'] = "Failed to add Admin";
        header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
    }
}
?>