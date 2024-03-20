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

        <?php 
        //Query for Best Sellers
        $sql3 = "SELECT * FROM bestsellers";
        //Result
        $result3 = mysqli_query($connection, $sql3);
        
        $numberofBestSellers = mysqli_num_rows($result3);
        ?>
        <div class="indicator-items">
            <h2><?php echo $numberofBestSellers; ?></h2>
            <p>Best Sellers</p>
        </div>

        <?php 
        //Query for dsitems
        $sql4 = "SELECT * FROM dsitems";
        //Result
        $result4 = mysqli_query($connection, $sql4);
        
        $numberofDsItems = mysqli_num_rows($result4);
        ?>
        <div class="indicator-items">
            <h2><?php echo $numberofDsItems; ?></h2>
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
