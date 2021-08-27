<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $event_id = $_GET['delete'];
            $query = "DELETE FROM events WHERE event_id = {$event_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: list_events.php");
            }
        }
        // else
        // {
        //     header("Location: show_members.php");
        // }
?>

<?php //include 'includes/login_protector.php'; ?>