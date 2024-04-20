<?php 
//Path for connection.php file
include_once "../../data/connection.php";
//Session start
session_start();

$sql = "SELECT * FROM dsitems";
$result = mysqli_query($connection, $sql);

?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Discounted Items Manager</strong></h2>
        </div> 
        
        <?php
            if (isset($_SESSION['edit-ds-items'])) {
                echo $_SESSION['edit-ds-items'];
                unset($_SESSION['edit-ds-items']);
            }
            if (isset($_SESSION['delete-ds-items'])) {
                echo $_SESSION['delete-ds-items'];
                unset($_SESSION['delete-ds-items']);
            }

            if (isset($_SESSION['add-ds-items'])) {
                echo $_SESSION['add-ds-items'];
                unset($_SESSION['add-ds-items']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-ds-items.php">
                    <button type="button" class="btn btn-success">Add New Discounted Item</button>
                </a>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Discounted Item Title</th>
                <th>Discounted Item Price</th>
                <th>Discounted Item Label</th>
                <th>Discounted Item Image</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <?php 
                    //start loop here
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>  
                <td><strong><?php echo $row['dsItemsID']; ?></strong></td>
                <td><?php echo $row['dsItemsTitle']; ?></td>
                <td><?php echo $row['dsItemsPrice']; ?></td>
                <td><?php echo $row['dsItemsLabel']; ?></td>
                <td>
                    <?php
                        if ($row['dsItemsImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music-Store/";?>assets/dsitems/<?php echo $row['dsItemsImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-ds-items.php?dsItemsID=<?php echo $row['dsItemsID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-ds-items.php?dsItemsID=<?php echo $row['dsItemsID'];?>">
                        <button type="button" class="btn btn-warning">Edit Product</button>
                    </a>
                </td>
            </tr>
            <?php 
                }
            ?>       
        </table>
    </div>
</main>
<?php include_once "footer.php"; ?>
