<?php 
//Path for connection.php file
include_once "../data/connection.php";
?>

<?php include_once "music-header.php"; ?>
<main>
    <div class="main-music-div">
            <div class="main-music">
               <h2 class="main-music-text"><strong>Music Albums</strong></h2>
            </div>
            <div class="items row justify-content-center">
            <?php 
            //Query for music.sql
            $sql = "SELECT * FROM music";
            $result = mysqli_query($connection, $sql);

            $count = mysqli_num_rows($result);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $musicID = $row['musicID'];
                    $musicTitle = $row['musicTitle'];
                    $musicPrice = $row['musicPrice'];
                    $musicLabel = $row['musicLabel'];
                    $imageName = $row['musicImage'];
            ?>
                <div class="card" style="width: 15rem;">
                    <img style="margin-top: 8px" class="card-img-top" src="<?php echo "http://localhost/Music%20Store/";?>assets/music/<?php echo $row['musicImage'];?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $musicTitle ?></h5>
                            <p class="card-text">
                                <?php echo $musicPrice;?>$
                            </p>
                            <p class="card-text" style="color: rgb(38, 38, 119);">
                                <?php echo $musicLabel; ?>
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