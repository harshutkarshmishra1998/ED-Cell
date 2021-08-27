<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        CAMPUS AMBASSDORS
                        <small>Admin</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Year</th>
                                <th>College</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM ca";
                                $select_ca = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_ca))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['ca_id']}</td>";
                                    echo "<td>{$row['ca_fullname']}</td>";
                                    echo "<td>{$row['ca_year']}</td>";
                                    echo "<td>{$row['ca_college']}</td>";
                                    echo "<td><img src = '../../images/{$row['ca_image']}' class='img-responsive' width = 200px></td>";
                                    echo "<td><a href = 'show_ca_more.php?ca_id={$row['ca_id']}'>Show More</a></td>";
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
