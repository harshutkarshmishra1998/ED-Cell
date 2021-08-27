<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $ca_data_id = $_GET['delete'];
            $query = "DELETE FROM ca_data WHERE ca_data_id = {$ca_data_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                // echo $ca_data_college;
                header("Location: show_data.php");
            }
        }
        // else
        // {
        //     header("Location: show_ca.php");
        // }
?>

<?php //include 'includes/login_protector.php'; ?>