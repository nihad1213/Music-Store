<?php 
//Path for connection.php file
include_once "../data/connection.php";
?>
<?php include_once "poster-header.php"; ?>
<main>
    <div class="main-music-div">
            <div class="main-music">
               <h2 class="main-music-text"><strong>Posters</strong></h2>
            </div>
            <div class="items row justify-content-center">
            <?php 
            //Query for music.sql
            $sql = "SELECT * FROM poster";
            $result = mysqli_query($connection, $sql);

            $count = mysqli_num_rows($result);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $posterID = $row['posterID'];
                    $posterTitle = $row['posterTitle'];
                    $posterPrice = $row['posterPrice'];
                    $posterLabel = $row['posterLabel'];
                    $imageName = $row['posterImage'];
            ?>
                <div class="card" style="width: 15rem;">
                    <img style="margin-top: 8px" class="card-img-top" src="<?php echo "http://localhost/Music%20Store/";?>assets/posters/<?php echo $row['posterImage'];?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $posterTitle ?></h5>
                            <p class="card-text">
                                <?php echo $posterPrice;?>$
                            </p>
                            <p class="card-text" style="color: rgb(38, 38, 119);">
                                <?php echo $posterLabel; ?>
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