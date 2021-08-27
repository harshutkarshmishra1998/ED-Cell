<?php include '../../includes/db.php'; ?>

<?php
        if(isset($_GET['delete']))
        {
            $user_id = $_GET['delete'];
            $query = "DELETE FROM members WHERE user_id = {$user_id}";
            $delete_query = mysqli_query($connection, $query);
            if(!$delete_query)
            {
                die("QUERY FAILED ".mysqli_error($connection));
            }

            if($delete_query)
            {
                header("Location: show_members.php");
            }
        }
        else
        {
            header("Location: show_members.php");
        }
?>

<?php //include 'includes/login_protector.php'; ?>