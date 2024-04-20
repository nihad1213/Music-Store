<?php 
    //Path for connection.php file
    include_once "../../data/connection.php";

    //Session Start
    session_start();

    //Query to show information
    $sql = "SELECT * FROM poster";
    $result = mysqli_query($connection, $sql);
?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Poster Manager</strong></h2>
        </div> 
        
        <?php 
            if (isset($_SESSION['add-poster'])) {
                echo $_SESSION['add-poster'];
                unset($_SESSION['add-poster']);
            }

            if (isset($_SESSION['delete-poster'])) {
                echo $_SESSION['delete-poster'];
                unset($_SESSION['delete-poster']);
            }

            if (isset($_SESSION['edit-poster'])) {
                echo $_SESSION['edit-poster'];
                unset($_SESSION['edit-poster']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-poster.php">
                    <button type="button" class="btn btn-success">Add New Poster</button>
                </a>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Poster Title</th>
                <th>Poster Price</th>
                <th>Poster Label</th>
                <th>Poster Image</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <?php 
                    //start loop here
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><strong><?php echo $row['posterID']; ?></strong></td>
                <td><?php echo $row['posterTitle']; ?></td>
                <td><?php echo $row['posterPrice']; ?></td>
                <td><?php echo $row['posterLabel']; ?></td>
                <td>
                    <?php
                        if ($row['posterImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music-Store/";?>assets/posters/<?php echo $row['posterImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-poster.php?posterID=<?php echo $row['posterID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-poster.php?posterID=<?php echo $row['posterID'];?>">
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
