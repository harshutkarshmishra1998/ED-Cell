<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        NEW CA REGISTRATIONS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Year</th>
                                <th>College</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM new_ca";
                                $select_ca = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_ca))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['new_ca_id']}</td>";
                                    echo "<td>{$row['new_ca_fullname']}</td>";
                                    echo "<td>{$row['new_ca_year']}</td>";
                                    echo "<td>{$row['new_ca_college']}</td>";
                                    echo "<td><img src = '../../images/{$row['new_ca_image']}' class='img-responsive' width = 200px></td>";
                                    echo "<td><a href = 'show_ca_more.php?new_ca_id={$row['new_ca_id']}'>Show More</a></td>";
                                    echo "<td><a href='delete_ca.php?delete={$row['new_ca_id']}'>Delete</a></td>";
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