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
