<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        DEVELOPERS
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM developers WHERE developer_id != {$id}";
                                $select_developers = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_developers))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['developer_name']}</td>";
                                    echo "<td>{$row['developer_username']}</td>";
                                    echo "<td>{$row['developer_password']}</td>";
                                    echo "<td><a href='edit_developers.php?edit={$row['developer_id']}'>Edit</a></td>";
                                    echo "<td><a href='delete_developers.php?delete={$row['developer_id']}'>Delete</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>