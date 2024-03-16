<?php
//Session start
session_start();

//path for connection.php file
include_once "../../data/connection.php";

//SQL query for taking data from admins table
$sql = "SELECT * FROM admins";
//Execute query
$result = mysqli_query($connection, $sql);
?>

<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Admin Manager</strong></h2>
        </div> 
    
        <div>
            <div class="add-admin">
                <a href="add-admin.php">
                    <button type="button" class="btn btn-success">Add Admin</button>
                </a>
            </div>
        </div>
    </div>

    <?php
    //Check Sessions
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }

    if (isset($_SESSION['edit'])) {
        echo $_SESSION['edit'];
        unset($_SESSION['edit']);
    }
    ?>

    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
                
            <tr>
                <?php
                    //start loop here
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><?php echo $row['adminID'];?></td>
                <td><?php echo $row['adminName'];?></td>
                <td>
                    <a href="delete-admin.php?adminID=<?php echo $row['adminID'];?>">
                        <button type="button" class="btn btn-danger">Delete Admin</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-admin.php?adminID=<?php echo $row['adminID'];?>">
                        <button type="button" class="btn btn-warning">Edit Admin</button>
                    </a>
                </td>
                </tr>
                <?php
                    //end loop here
                    }
                ?>        
        </table>
    </div>
</main>
<?php include_once "footer.php"; ?>
