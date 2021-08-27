<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        SPONSORS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM sponsors";
                                $select_sponsor = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_sponsor))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['sponsor_id']}</td>";
                                    echo "<td>{$row['sponsor_name']}</td>";
                                    echo "<td><img src = '../../images/{$row['sponsor_image']}' class='img-responsive' width = 200px></td>";
                                    echo "<td><a href = 'show_sponsors_more.php?sponsor_id={$row['sponsor_id']}'>Show More</a></td>";
                                    echo "<td><a href='edit_sponsors.php?edit={$row['sponsor_id']}'>Edit</a></td>";
                                    echo "<td><a href='delete_sponsors.php?delete={$row['sponsor_id']}'>Delete</a></td>";
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