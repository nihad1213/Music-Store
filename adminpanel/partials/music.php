<?php 
    //Path for connection.php file
    include_once "../../data/connection.php";

    //Session Start
    session_start();

    //Query to show information
    $sql = "SELECT * FROM music";
    $result = mysqli_query($connection, $sql);
?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Music Album Manager</strong></h2>
        </div> 
        
        <?php 
            if (isset($_SESSION['add-music'])) {
                echo $_SESSION['add-music'];
                unset($_SESSION['add-music']);
            }

            if (isset($_SESSION['delete-music'])) {
                echo $_SESSION['delete-music'];
                unset($_SESSION['delete-music']);
            }

            if (isset($_SESSION['edit-music'])) {
                echo $_SESSION['edit-music'];
                unset($_SESSION['edit-music']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-music.php">
                    <button type="button" class="btn btn-success">Add New Music Album</button>
                </a>
            </div>
        </div>
    </div>
    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Album Title</th>
                <th>Album Price</th>
                <th>Album Label</th>
                <th>Album Image</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <?php 
                    //start loop here
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><strong><?php echo $row['musicID']; ?></strong></td>
                <td><?php echo $row['musicTitle']; ?></td>
                <td><?php echo $row['musicPrice']; ?></td>
                <td><?php echo $row['musicLabel']; ?></td>
                <td>
                    <?php
                        if ($row['musicImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music-Store/";?>assets/music/<?php echo $row['musicImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-music.php?musicID=<?php echo $row['musicID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-music.php?musicID=<?php echo $row['musicID'];?>">
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
