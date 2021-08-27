<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        EVENTS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <table class = "table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event Name</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query = "SELECT * FROM events ORDER BY event_id DESC";
                            $select_events = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_events))
                            {
                                $event_id = $row['event_id'];
                                $event_name = $row['event_name'];

                                echo "<tr>";
                                echo "<td>${event_id}</td>";
                                echo "<td>${event_name}</td>";
                                echo "<td><a href = 'show_events.php?event_id={$row['event_id']}'>Show More</a></td>";
                                echo "<td><a href = 'edit_events.php?edit={$row['event_id']}'>Edit</a></td>";
                                echo "<td><a href = 'delete_events.php?delete={$row['event_id']}'>Delete</a></td>";
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