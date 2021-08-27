<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        CAMPUS AMBASSDORS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        $ca_id = $_GET['edit'];
                        $query = "SELECT * FROM ca WHERE ca_id = {$ca_id}";
                        $select_ca_by_id = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_ca_by_id))
                        {
                            $ca_fullname = $row['ca_fullname'];
                            $ca_email = $row['ca_email'];
                            $ca_mob = $row['ca_mob'];
                            $ca_branch = $row['ca_branch'];
                            $ca_year = $row['ca_year'];
                            $ca_college = $row['ca_college'];
                            $ca_image = $row['ca_image'];
                            $ca_info_1 = $row['ca_info_1'];
                            $ca_info_2 = $row['ca_info_2'];
                            $ca_username = $row['ca_username'];
                            $ca_password = $row['ca_password'];
                        }
                        if(isset($_POST['submit'])) 
                        {
                            $ca_fullname = mysqli_escape_string($connection, $_POST['ca_fullname']);
                            $ca_email = mysqli_escape_string($connection, $_POST['ca_email']);
                            $ca_mob = mysqli_escape_string($connection, $_POST['ca_mob']);
                            $ca_branch = mysqli_escape_string($connection, $_POST['ca_branch']);
                            $ca_year = mysqli_escape_string($connection, $_POST['ca_year']);
                            $ca_college = mysqli_escape_string($connection, $_POST['ca_college']);

                            $ca_image = $_FILES['image']['name'];
                            $ca_image_temp = $_FILES['image']['tmp_name'];

                            $ca_info_1 = mysqli_escape_string($connection, $_POST['ca_info_1']);
                            $ca_info_2 = mysqli_escape_string($connection, $_POST['ca_info_2']);
                            $ca_username = mysqli_escape_string($connection, $_POST['ca_username']);
                            $ca_password = mysqli_escape_string($connection, $_POST['ca_password']);

                            move_uploaded_file($ca_image_temp, "../../images/".$ca_image);
                            if(empty($ca_image))
                            {
                                $query = "SELECT * FROM ca WHERE ca_id = {$ca_id}";
                                $select_image = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($select_image))
                                {
                                    $ca_image = $row["ca_image"];
                                }
                            }

                            
                            $query = "UPDATE ca SET ";

                            $query .="ca_fullname = '{$ca_fullname}', ";
                            $query .="ca_email = '{$ca_email}', ";
                            $query .="ca_mob = '{$ca_mob}', ";
                            $query .="ca_branch = '{$ca_branch}', ";
                            $query .="ca_year = '{$ca_year}', ";
                            $query .="ca_college = '{$ca_college}', ";
                            $query .="ca_info_1 = '{$ca_info_1}', ";
                            $query .="ca_info_2 = '{$ca_info_2}', ";
                            $query .="ca_username = '{$ca_username}', ";
                            $query .="ca_password = '{$ca_password}',";

                            $query .= "ca_image = '{$ca_image}' ";

                            $query .= "WHERE ca_id = {$ca_id} ";

                            $update_post = mysqli_query($connection, $query);
                            if(!$update_post)
                            {
                                die("Failed to update ".mysqli_error($connection));
                            }
                            elseif($update_post)
                            {
                                header("Location: show_ca.php");
                            }
                        }
                        // else
                        // {
                        //     header("Location: show_ca.php");
                        // }
                    ?>

                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="ca_fullname">Full Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_fullname" value = "<?php echo $ca_fullname ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_email">Email</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_email" value = "<?php echo $ca_email ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_mob">Mobile</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_mob" value = "<?php echo $ca_mob ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_branch">Branch</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_branch" value = "<?php echo $ca_branch ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_year">Year</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_year" value = "<?php echo $ca_year ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_college">Job</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_college" value = "<?php echo $ca_college ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_image">Image</label>
                                <br>
                                <input type="file" name = "image">
                                <br>
                                <img width= "100" src="../../images/<?php echo $ca_image ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "ca_info_1" rows = "10" cols = "30"><?php echo $ca_info_1 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ca_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "ca_info_2" rows = "10" cols = "30"><?php echo $ca_info_2 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ca_username">Username</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_username" value = "<?php echo $ca_username ?>">
                            </div>

                            <div class="form-group">
                                <label for="ca_password">Password</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_password" value = "<?php echo $ca_password ?>">
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