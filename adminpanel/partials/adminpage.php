<?php include_once "header.php"; ?>
<main>
    <div class="partials-items">
        <div>
            <h2><strong>Admin Manager</strong></h2>
        </div>

        <div>
            <div class="add-admin">
                <a href="add-admin.php">
                    <button type="button" class="btn btn-success" onclick="add-admin.php">Add Admin</button>
                </a>
            </div>
        </div>
    </div>

    <div class="table">
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
                
            <tr>
                <td>1</td>
                <td>Nihad</td>
                <td>
                    <button type="button" class="btn btn-danger">Delete Admin</button> 
                </td>
                <td>
                    <button type="button" class="btn btn-warning">Edit Admin</button>
                </td>
            </tr>        
        </table>
    </div>
</main>
<?php include_once "footer.php"; ?>