<?php 
//Path for connection.php file
include_once "../../data/connection.php";
//Session start
session_start();

$sql = "SELECT * FROM bestsellers";
$result = mysqli_query($connection, $sql);

?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Best Seller Manager</strong></h2>
        </div> 
        
        <?php
            if (isset($_SESSION['edit-best-seller'])) {
                echo $_SESSION['edit-best-seller'];
                unset($_SESSION['edit-best-seller']);
            }
            if (isset($_SESSION['delete-best-seller'])) {
                echo $_SESSION['delete-best-seller'];
                unset($_SESSION['delete-best-seller']);
            }

            if (isset($_SESSION['add-best-seller'])) {
                echo $_SESSION['add-best-seller'];
                unset($_SESSION['add-best-seller']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-best-seller.php">
                    <button type="button" class="btn btn-success">Add New Best Seller</button>
                </a>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Best Seller Title</th>
                <th>Best Seller Price</th>
                <th>Best Seller Label</th>
                <th>Best Seller Image</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <?php 
                    //start loop here
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>  
                <td><strong><?php echo $row['bestSellerID']; ?></strong></td>
                <td><?php echo $row['bestSellerTitle']; ?></td>
                <td><?php echo $row['bestSellerPrice']; ?></td>
                <td><?php echo $row['bestSellerLabel']; ?></td>
                <td>
                    <?php
                        if ($row['bestSellerImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music%20Store/";?>assets/bestsellers/<?php echo $row['bestSellerImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-best-seller.php?bestSellerID=<?php echo $row['bestSellerID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-best-seller.php?bestSellerID=<?php echo $row['bestSellerID'];?>">
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
