<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $developer_id = $_GET['delete'];
            $query = "DELETE FROM developers WHERE developer_id = {$developer_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: show_developers.php");
            }
        }
        else
        {
            header("Location: show_developers.php");
        }
?>

<?php //include 'includes/login_protector.php'; ?>