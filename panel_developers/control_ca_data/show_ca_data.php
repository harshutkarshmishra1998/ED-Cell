<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php $ca_data_college = $_GET['ca_data_college']; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php echo $ca_data_college ?>
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>CA</th>
                                <th>Timestamp</th>
                                <th>Comment</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM ca_data WHERE ca_data_college LIKE '%$ca_data_college%' ORDER BY ca_data_time DESC";
                                $select_ca = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_assoc($select_ca))
                                {
                                    echo "<tr>";
                                    echo "<td>{$row['ca_data_name']}</td>";
                                    echo "<td>{$row['ca_data_time']}</td>";
                                    echo "<td>{$row['ca_data_comment']}</td>";
                                    echo "<td><a href='../../files/{$row['ca_data_file_1']}'>View File</a></td>";
                                    echo "<td><a href ='delete_ca_data.php?delete={$row['ca_data_id']}'>Delete</a></td>";
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
