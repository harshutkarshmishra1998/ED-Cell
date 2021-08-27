<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        $sponsor_id = $_GET['edit'];
                        $query = "SELECT * FROM sponsors WHERE sponsor_id = {$sponsor_id}";
                        $select_sponsor_by_id = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_sponsor_by_id))
                        {
                            $sponsor_name = $row['sponsor_name'];
                            $sponsor_content = $row['sponsor_content'];
                            $sponsor_image = $row['sponsor_image'];
                            $sponsor_info_1 = $row['sponsor_info_1'];
                            $sponsor_info_2 = $row['sponsor_info_2'];
                        }
                        if(isset($_POST['submit'])) 
                        {
                            $sponsor_name = mysqli_escape_string($connection, $_POST['sponsor_name']);
                            $sponsor_content = mysqli_escape_string($connection, $_POST['sponsor_content']);

                            $sponsor_image = $_FILES['image']['name'];
                            $sponsor_image_temp = $_FILES['image']['tmp_name'];

                            $sponsor_info_1 = mysqli_escape_string($connection, $_POST['sponsor_info_1']);
                            $sponsor_info_2 = mysqli_escape_string($connection, $_POST['sponsor_info_2']);

                            move_uploaded_file($sponsor_image_temp, "../../images/".$sponsor_image);
                            if(empty($sponsor_image))
                            {
                                $query = "SELECT * FROM sponsors WHERE sponsor_id = {$sponsor_id}";
                                $select_image = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($select_image))
                                {
                                    $sponsor_image = $row["sponsor_image"];
                                }
                            }

                            
                            $query = "UPDATE sponsors SET ";

                            $query .="sponsor_name = '{$sponsor_name}', ";
                            $query .="sponsor_content = '{$sponsor_content}', ";
                            $query .="sponsor_info_1 = '{$sponsor_info_1}', ";
                            $query .="sponsor_info_2 = '{$sponsor_info_2}', ";

                            $query .= "sponsor_image = '{$sponsor_image}' ";

                            $query .= "WHERE sponsor_id = {$sponsor_id} ";

                            $update_post = mysqli_query($connection, $query);
                            if(!$update_post)
                            {
                                die("Failed to update ".mysqli_error($connection));
                            }
                            elseif($update_post)
                            {
                                header("Location: show_sponsors.php");
                            }
                        }
                        // else
                        // {
                        //     header("Location: show_sponsors.php");
                        // }
                    ?>

                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="sponsor_name">Full Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "sponsor_name" value = "<?php echo $sponsor_name ?>">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_content">Email</label>
                                <br>
                                <input class="form-control" type = "text" name = "sponsor_content" value = "<?php echo $sponsor_content ?>">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_image">Image</label>
                                <br>
                                <input type="file" name = "image">
                                <br>
                                <img width= "100" src="../../images/<?php echo $sponsor_image ?>">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "sponsor_info_1" rows = "10" cols = "30"><?php echo $sponsor_info_1 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="sponsor_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "sponsor_info_2" rows = "10" cols = "30"><?php echo $sponsor_info_2 ?></textarea>
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value = "Update">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'includes/footer.php'; ?>