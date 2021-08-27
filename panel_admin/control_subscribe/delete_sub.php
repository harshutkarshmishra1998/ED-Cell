<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $sub_id = $_GET['delete'];
            $query = "DELETE FROM subscribe WHERE sub_id = {$sub_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: show_sub.php");
            }
        }
        else
        {
            header("Location: show_sub.php");
        }
?>

<?php //include 'includes/login_protector.php'; ?>