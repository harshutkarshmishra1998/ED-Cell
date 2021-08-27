<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $new_ca_id = $_GET['delete'];
            $query = "DELETE FROM new_ca WHERE new_ca_id = {$new_ca_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: show_ca.php");
            }
        }
        // else
        // {
        //     header("Location: show_ca.php");
        // }
?>

<?php //include 'includes/login_protector.php'; ?>