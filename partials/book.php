<?php 
//Path for connection.php file
include_once "../data/connection.php";
?>
<?php include_once "book-header.php"; ?>
<main>
    <div class="main-music-div">
            <div class="main-music">
               <h2 class="main-music-text"><strong>Magazine/Book</strong></h2>
            </div>

            <?php 
            //Query for music.sql
            $sql = "SELECT * FROM book";
            $result = mysqli_query($connection, $sql);

            $count = mysqli_num_rows($result);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $bookID = $row['bookID'];
                    $bookTitle = $row['bookTitle'];
                    $bookPrice = $row['bookPrice'];
                    $bookLabel = $row['bookLabel'];
                    $imageName = $row['bookImage'];
            ?>
                <div class="card" style="width: 15rem;">
                    <img style="margin-top: 8px" class="card-img-top" src="<?php echo "http://localhost/Music-Store/";?>assets/books/<?php echo $row['bookImage'];?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $bookTitle ?></h5>
                            <p class="card-text">
                                <?php echo $bookPrice;?>$
                            </p>
                            <p class="card-text" style="color: rgb(38, 38, 119);">
                                <?php echo $bookLabel; ?>
                            </p>
                            <button type="button" class="btn btn-success">Add to Cart</button>
                        </div>
                </div>  
            <?php
                }
            }
            ?>
            </div>
    </div>
</main>
<?php include_once "footer.php"; ?>
