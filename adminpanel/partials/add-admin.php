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

        <div class="add-admin-form">
            <form action="add-admin.php" method="POST">
                <label>Username: </label><input type="text" name="adminName" placeholder="Enter Admin Username..." required>
                <br>
                <label>Password: </label><input type="password" name="adminPassword" placeholder="Enter Admin Password..." required>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Add Admin</button>
                </div>
            </form>
        </div>

        
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php 
//Add data to table
//Check submit button pressed or not
if (isset($_POST['submit']) || isset($adminName) || isset($adminPassword)) {

    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPassword'];
    
    //SQL query to add data
    $sql = "INSERT INTO admins SET
        adminName = '$adminName',
        adminPassword = '$adminPassword'
    ";
    
    //Execute query
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    //Check admin is exists or not
    if ($result == TRUE) {
        echo "Admin Added Succesfully";
        header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
    } else {
        echo "Failed to Add Admin";
        header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
    }
}
?>