<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $ca_data_id = $_GET['delete'];
            $query_2 = "SELECT * FROM ca_data WHERE ca_data_id LIKE '%$ca_data_id%'";
            $select_query_2 = mysqli_query($connection, $query_2);
            $ca_data_college = "";
            while($row = mysqli_fetch_assoc($select_query_2))
            {
                $ca_data_college = $row['ca_data_college'];
            }
            $query = "DELETE FROM ca_data WHERE ca_data_id = {$ca_data_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                // echo $ca_data_college;
                header("Location: show_ca_data.php?ca_data_college={$ca_data_college}");
            }
        }
        // else
        // {
        //     header("Location: show_ca.php");
        // }
?>

<?php //include 'includes/login_protector.php'; ?>