<?php 
//Path for connection.php file
include_once "../../data/connection.php";
?>

<?php include_once "header.php"; ?>
<main>
    <div class="dash">
        <h2><strong>Dashboard</strong></h2>
    </div>

    <div class="indicators">
        <?php
        //Query for admins table 
        $sql = "SELECT * FROM admins";
        //Result
        $result = mysqli_query($connection, $sql);

        //Get number of rows from table
        $numberofAdmins = mysqli_num_rows($result);
        ?>
        <div class="indicator-items">
            <h2><?php echo "$numberofAdmins"; ?></h2>
            <p>Admins</p>
        </div>

        <div class="indicator-items">
        <?php 
        //Query For New Products
        $sql2 = "SELECT * FROM newproducts";
        //Result
        $result2 = mysqli_query($connection, $sql2);

        $numberofNewProducts = mysqli_num_rows($result2);
        ?>
            <h2><?php echo $numberofNewProducts; ?></h2>
            <p>New Products</p>
        </div>

        <div class="indicator-items">
            <h2>0</h2>
            <p>Best Sellers</p>
        </div>

        <div class="indicator-items">
            <h2>0</h2>
            <p>Discounted Albums</p>
        </div>

        <div class="indicator-items">
            <h2>0</h2>
            <p>Music Album</p>
        </div>

        <div class="indicator-items">
            <h2>0</h2>
            <p>Poster</p>
        </div>  

        <div class="indicator-items">
            <h2>0</h2>
            <p>Magazine/Books</p>
        </div>
    </div>
</main>
<?php include_once "footer.php"; ?>
