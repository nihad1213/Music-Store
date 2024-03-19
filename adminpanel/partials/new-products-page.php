<?php 
    //Path for connection.php file
    include_once "../../data/connection.php";

    //Session Start
    session_start();

    //Query to show information
    $sql = "SELECT * FROM newproducts";
    $result = mysqli_query($connection, $sql);
?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>New Products Manager</strong></h2>
        </div> 
        
        <?php 
            if (isset($_SESSION['add-product'])) {
                echo $_SESSION['add-product'];
                unset($_SESSION['add-product']);
            }

            if (isset($_SESSION['delete-product'])) {
                echo $_SESSION['delete-product'];
                unset($_SESSION['delete-product']);
            }

            if (isset($_SESSION['edit-product'])) {
                echo $_SESSION['edit-product'];
                unset($_SESSION['edit-product']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-product.php">
                    <button type="button" class="btn btn-success">Add New Product</button>
                </a>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Product Label</th>
                <th>Product Image</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <?php 
                    //start loop here
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><strong><?php echo $row['productID']; ?></strong></td>
                <td><?php echo $row['productTitle']; ?></td>
                <td><?php echo $row['productPrice']; ?></td>
                <td><?php echo $row['productLabel']; ?></td>
                <td>
                    <?php
                        if ($row['productImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music%20Store/";?>assets/newproducts/<?php echo $row['productImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-product.php?productID=<?php echo $row['productID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-product.php?productID=<?php echo $row['productID'];?>">
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