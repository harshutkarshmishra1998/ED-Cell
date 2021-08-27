<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        CA UPLOADS
                        <small>Admin</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>College</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM ca_data GROUP BY ca_data_college ASC";
                                $select_ca = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_ca))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['ca_data_college']}</td>";
                                    echo "<td><a href ='show_ca_data.php?ca_data_college={$row['ca_data_college']}'>Show More</a></td>";
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