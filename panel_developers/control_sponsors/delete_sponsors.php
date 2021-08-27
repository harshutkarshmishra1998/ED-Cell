<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $sponsor_id = $_GET['delete'];
            $query = "DELETE FROM sponsors WHERE sponsor_id = {$sponsor_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: show_sponsors.php");
            }
        }
        else
        {
            header("Location: show_sponsors.php");
        }
?>

<?php //include 'includes/login_protector.php'; ?>