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
            <h2><strong>Edit Admin</strong></h2>
        </div>

        <?php 
            if (isset($_SESSION['admin-pass-dont-match'])) {
                echo $_SESSION['admin-pass-dont-match'];
                unset($_SESSION['admin-pass-dont-match']);
            }
        ?>

        <?php
            $adminID = $_GET['adminID'];
            
            //Create SQL query to get adminName
            $sql = "SELECT * FROM admins WHERE adminID = '$adminID'";

            //Execute Query
            $result = mysqli_query($connection, $sql);
            
            $row = mysqli_fetch_assoc($result);
        ?>

        <div class="edit-admin-form">
            <form action="edit-admin.php" method="POST">
                <label>New Username: </label>
                <input type="text" name="newAdminName" placeholder="Enter New Admin Username..."
                value="<?php echo $row['adminName']; ?>" 
                required>
                <br>
                <label>New Password: </label><input type="password" name="newAdminPassword" placeholder="Enter New Admin Password..." required>
                <label>Confirm New Password: </label><input type="password" name="confirmNewAdminPassword" placeholder="Confirm New Admin Password..." required>
                <input type="hidden" name="adminID" value=<?php echo $row['adminID'];?>>
                <div class="add-button">
                    <button type="submit" name="submit" class="btn btn-success">Edit Admin</button>
                </div>
            </form>
        </div>    
    </div>
</main>
<?php include_once "footer.php"; ?>

<?php
    //Check Button is Pressed or Not.
    if (isset($_POST['submit']) || isset($newAdminName) || isset($currentAdminPassword) || isset($newAdminPassword) || isset($confirmNewAdminPassword)) {
    
        $newAdminName = $_POST['newAdminName'];
        $newAdminPassword = md5($_POST['newAdminPassword']);
        $confirmNewAdminPassword = md5($_POST['confirmNewAdminPassword']);
        $adminID = $_POST['adminID'];

        //Query To Update admin
        $sql2 = "UPDATE admins SET
        adminName = '$newAdminName',
        adminPassword = '$newAdminPassword'
        WHERE adminID = '$adminID'
        ";
    
        //Execute Query
        $result = mysqli_query($connection, $sql2);

        if ($result == TRUE) {
            $_SESSION['edit'] = "<div style='color: #20914f; margin-left: 25px'>Admin Edited Succesfully</div>"; 
            header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
        } else {
            $_SESSION['edit'] = "<div style='color: #FF0000; margin-left: 25px'>Failed to Edit Admin</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/adminpage.php");
        }

        //Show Error when new passwords doesn't match
        if ($newAdminPassword != $confirmNewAdminPassword) {
            $_SESSION['admin-pass-dont-match'] = "<div style='color: #FF0000; margin-left: 25px'>Passwords don't Match!</div>";
            header("location: http://localhost/Music%20Store/adminpanel/partials/edit-admin.php?adminID=$adminID");
        }

    }
?>