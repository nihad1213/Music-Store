<?php 
    //Path for connection.php file
    include_once "../../data/connection.php";

    //Session Start
    session_start();

    //Query to show information
    $sql = "SELECT * FROM book";
    $result = mysqli_query($connection, $sql);
?>
<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Book/Magazine Manager</strong></h2>
        </div> 
        
        <?php 
            if (isset($_SESSION['add-book'])) {
                echo $_SESSION['add-book'];
                unset($_SESSION['add-book']);
            }

            if (isset($_SESSION['delete-book'])) {
                echo $_SESSION['delete-book'];
                unset($_SESSION['delete-book']);
            }

            if (isset($_SESSION['edit-book'])) {
                echo $_SESSION['edit-book'];
                unset($_SESSION['edit-book']);
            }
        ?>
        
        <div>
            <div class="add-admin">
                <a href="add-book.php">
                    <button type="button" class="btn btn-success">Add New Book/Magazine</button>
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
                <td><strong><?php echo $row['bookID']; ?></strong></td>
                <td><?php echo $row['bookTitle']; ?></td>
                <td><?php echo $row['bookPrice']; ?></td>
                <td><?php echo $row['bookLabel']; ?></td>
                <td>
                    <?php
                        if ($row['bookImage'] != '0') {
                            
                            ?>
                                <img style="width: 20%" src="<?php echo "http://localhost/Music%20Store/";?>assets/books/<?php echo $row['bookImage'];?>">
                            <?php

                        } else {
                            echo "<div style='color: #FF0000; margin-left: 25px'>No image Added</div>";
                        }
                    ?>
                </td>
                <td>
                    <a href="delete-book.php?bookID=<?php echo $row['bookID'];?>">
                        <button type="button" class="btn btn-danger">Delete Product</button> 
                    </a>
                </td>
                <td>
                    <a href="edit-book.php?bookID=<?php echo $row['bookID'];?>">
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