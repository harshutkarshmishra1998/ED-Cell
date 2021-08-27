<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        SUBSCRIBERS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM subscribe";
                                $select_sub = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_sub))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['sub_id']}</td>";
                                    echo "<td>{$row['sub_email']}</td>";
                                    echo "<td><a href='delete_sub.php?delete={$row['sub_id']}'>Delete</a></td>";
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