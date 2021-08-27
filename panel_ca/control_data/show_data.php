<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php $ca_name = $_SESSION['ca_fullname']; ?>


<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        UPLOADS
                        <small>CA</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Timestamp</th>
                                <th>Comment</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM ca_data WHERE ca_data_name LIKE '%$ca_name%' ORDER BY ca_data_time DESC";
                            $select_ca = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($select_ca))
                            {
                                echo "<tr>";
                                echo "<td>{$row['ca_data_id']}</td>";
                                echo "<td>{$row['ca_data_time']}</td>";
                                echo "<td>{$row['ca_data_comment']}</td>";
                                echo "<td><a href='../../files/{$row['ca_data_file_1']}'>View File</a></td>";
                                echo "<td><a href='edit_data.php?edit={$row['ca_data_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_data.php?delete={$row['ca_data_id']}'>Delete</a></td>";
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