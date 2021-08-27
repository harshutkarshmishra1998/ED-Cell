<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php $ca_data_id = $_GET['edit']; ?>
<?php 
    $ca_name = $_SESSION['ca_fullname']; 
    $ca_college = "";
    $query = "SELECT * FROM ca WHERE ca_fullname LIKE '%$ca_name%'";
    $select_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_query))
    {
        $ca_college = $row['ca_college'];
    }
?>


<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        UPLOADS
                        <small>CA</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        $query = "SELECT * FROM ca_data WHERE ca_data_id LIKE '%$ca_data_id%'";
                        $select_data = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_data))
                        {
                            $ca_data_file_1 = $row["ca_data_file_1"];
                            $ca_data_comment = $row["ca_data_comment"];
                        }
                        if(isset($_POST['submit']))
                        {
                            $ca_data_file_1 = $_FILES['file']['name'];
                            $ca_data_file_1_temp = $_FILES['file']['tmp_name'];

                            $ca_data_comment = mysqli_escape_string($connection, $_POST['ca_data_comment']);

                            move_uploaded_file($ca_data_file_1_temp, "../../files/".$ca_data_file_1);
                            if(empty($ca_data_file_1))
                            {
                                $query = "SELECT * FROM ca_data WHERE ca_data_id = {$ca_data_id}";
                                $select_query = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($select_query))
                                {
                                    $ca_data_file_1 = $row['ca_data_file_1'];
                                }
                            }

                            $query = "UPDATE ca_data SET ";

                            $query .= "ca_data_time = now(), ";
                            $query .= "ca_data_comment = '{$ca_data_comment}', ";
                            $query .= "ca_data_college = '{$ca_college}', ";
                            $query .= "ca_data_file_1 = '{$ca_data_file_1}' ";

                            $query .= "WHERE ca_data_id = {$ca_data_id} ";

                            $update_post = mysqli_query($connection, $query);
                            if(!$update_post)
                            {
                                die("Failed to update ".mysqli_error($connection));
                            }
                            elseif($update_post)
                            {
                                header("Location: show_data.php");
                            }
                        }
                    ?>

                    <div class="col-xs-12">

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ca_data_file_1">Image</label>
                                <br>
                                <input type="file" name="file">
                                <br>
                                <embed width="100" src="../../files/<?php echo $ca_data_file_1 ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_data_comment">Comment</label>
                                <br>
                                <textarea class="form-control" name="ca_data_comment" type="text" rows="10"
                                    cols="30"><?php echo $ca_data_comment; ?></textarea>
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value="Update">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>