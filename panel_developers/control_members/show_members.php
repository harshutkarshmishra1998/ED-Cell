<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        MEMBERS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Year</th>
                                <th>Job</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM members";
                                $select_users = mysqli_query($connection, $query);
                        
                                while($row = mysqli_fetch_assoc($select_users))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['user_id']}</td>";
                                    echo "<td>{$row['user_fullname']}</td>";
                                    echo "<td>{$row['user_year']}</td>";
                                    echo "<td>{$row['user_job']}</td>";
                                    echo "<td><img src = '../../images/{$row['user_image']}' class='img-responsive' width = 200px></td>";
                                    echo "<td><a href = 'show_members_more.php?user_id={$row['user_id']}'>Show More</a></td>";
                                    echo "<td><a href='edit_members.php?edit={$row['user_id']}'>Edit</a></td>";
                                    echo "<td><a href='delete_members.php?delete={$row['user_id']}'>Delete</a></td>";
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