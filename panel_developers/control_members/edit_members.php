<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        MEMBERS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        $user_id = $_GET['edit'];
                        $query = "SELECT * FROM members WHERE user_id = {$user_id}";
                        $select_user_by_id = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_user_by_id))
                        {
                            $user_fullname = $row['user_fullname'];
                            $user_email = $row['user_email'];
                            $user_branch = $row['user_branch'];
                            $user_year = $row['user_year'];
                            $user_job = $row['user_job'];
                            $user_image = $row['user_image'];
                            $user_info_1 = $row['user_info_1'];
                            $user_info_2 = $row['user_info_2'];
                            $user_password = $row['user_password'];
                        }
                        if(isset($_POST['submit'])) 
                        {
                            $user_fullname = mysqli_escape_string($connection, $_POST['user_fullname']);
                            $user_email = mysqli_escape_string($connection, $_POST['user_email']);
                            $user_branch = mysqli_escape_string($connection, $_POST['user_branch']);
                            $user_year = mysqli_escape_string($connection, $_POST['user_year']);
                            $user_job = mysqli_escape_string($connection, $_POST['user_job']);

                            $user_image = $_FILES['image']['name'];
                            $user_image_temp = $_FILES['image']['tmp_name'];

                            $user_info_1 = mysqli_escape_string($connection, $_POST['user_info_1']);
                            $user_info_2 = mysqli_escape_string($connection, $_POST['user_info_2']);

                            $user_password = $_POST['user_password'];

                            move_uploaded_file($user_image_temp, "../../images/".$user_image);
                            if(empty($user_image))
                            {
                                $query = "SELECT * FROM members WHERE user_id = {$user_id}";
                                $select_image = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($select_image))
                                {
                                    $user_image = $row["user_image"];
                                }
                            }

                            
                            $query = "UPDATE members SET ";

                            $query .="user_fullname = '{$user_fullname}', ";
                            $query .="user_email = '{$user_email}', ";
                            $query .="user_branch = '{$user_branch}', ";
                            $query .="user_year = '{$user_year}', ";
                            $query .="user_job = '{$user_job}', ";
                            $query .="user_info_1 = '{$user_info_1}', ";
                            $query .="user_info_2 = '{$user_info_2}', ";
                            $query .= "user_image = '{$user_image}', ";
                            $query .="user_password = '{$user_password}' ";

                            $query .= "WHERE user_id = {$user_id} ";

                            $update_post = mysqli_query($connection, $query);
                            if(!$update_post)
                            {
                                die("Failed to update ".mysqli_error($connection));
                            }
                            elseif($update_post)
                            {
                                header("Location: show_members.php");
                            }
                        }
                        // else
                        // {
                        //     header("Location: show_members.php");
                        // }
                    ?>

                    <div class="col-xs-12">

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="user_fullname">Full Name</label>
                                <br>
                                <input class="form-control" type="text" name="user_fullname"
                                    value="<?php echo $user_fullname ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <br>
                                <input class="form-control" type="text" name="user_email"
                                    value="<?php echo $user_email ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_branch">Branch</label>
                                <br>
                                <input class="form-control" type="text" name="user_branch"
                                    value="<?php echo $user_branch ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_year">Year</label>
                                <br>
                                <input class="form-control" type="text" name="user_year"
                                    value="<?php echo $user_year ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_job">Job</label>
                                <br>
                                <input class="form-control" type="text" name="user_job" value="<?php echo $user_job ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_image">Image</label>
                                <br>
                                <input type="file" name="image">
                                <br>
                                <img width="100" src="../../images/<?php echo $user_image ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type="text" name="user_info_1" rows="10"
                                    cols="30"><?php echo $user_info_1 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="user_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type="text" name="user_info_2" rows="10"
                                    cols="30"><?php echo $user_info_2 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="user_password">Password</label>
                                <br>
                                <input class="form-control" type="text" name="user_password"
                                    value="<?php echo $user_password ?>">
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