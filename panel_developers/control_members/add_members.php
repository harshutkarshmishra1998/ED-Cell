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
                    <div class="col-xs-12">

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="user_fullname">Full Name</label>
                                <br>
                                <input class="form-control" type="text" name="user_fullname">
                            </div>

                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <br>
                                <input class="form-control" type="text" name="user_email">
                            </div>

                            <div class="form-group">
                                <label for="user_branch">Branch</label>
                                <br>
                                <input class="form-control" type="text" name="user_branch">
                            </div>

                            <div class="form-group">
                                <label for="user_year">Year</label>
                                <br>
                                <input class="form-control" type="text" name="user_year">
                            </div>

                            <div class="form-group">
                                <label for="user_job">Job</label>
                                <br>
                                <input class="form-control" type="text" name="user_job">
                            </div>

                            <div class="form-group">
                                <label for="user_image">Image</label>
                                <br>
                                <input type="file" name="image">
                            </div>

                            <div class="form-group">
                                <label for="user_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type="text" name="user_info_1" rows="10"
                                    cols="30"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="user_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type="text" name="user_info_2" rows="10"
                                    cols="30"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="user_password">Password</label>
                                <br>
                                <input class="form-control" type="text" name="user_password">
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value="Add">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['submit']))
                            {  
                                $user_fullname = mysqli_escape_string($connection, $_POST['user_fullname']);
                                $user_email = mysqli_escape_string($connection, $_POST['user_email']);
                                $user_branch = mysqli_escape_string($connection, $_POST['user_branch']);
                                $user_year = mysqli_escape_string($connection, $_POST['user_year']);
                                $user_job = mysqli_escape_string($connection, $_POST['user_job']);

                                $user_image = $_FILES['image']['name'];
                                if(empty($user_image))
                                {
                                    $user_image = "default_DVcG2eAw3E.jpg";
                                }
                                $user_image_temp = $_FILES['image']['tmp_name'];

                                $user_info_1 = mysqli_escape_string($connection, $_POST['user_info_1']);
                                $user_info_2 = mysqli_escape_string($connection, $_POST['user_info_2']);

                                if(move_uploaded_file($user_image_temp, "../../images/".$user_image))
                                {
                                    echo "True";
                                }
                                else
                                {
                                    echo "False ";
                                }

                                $query = "INSERT INTO members (user_fullname, user_email, user_branch, user_year, user_job, user_image, user_info_1, user_info_2)";

                                $query .= "VALUES('{$user_fullname}', '{$user_email}', '{$user_branch}', '{$user_year}', '{$user_job}', '{$user_image}', '{$user_info_1}', '{$user_info_2}')";

                                $create_post_query  = mysqli_query($connection, $query);

                                if(!$create_post_query)
                                {
                                    die("QUERY FAILED ".mysqli_error($connection));
                                }

                                if($create_post_query)
                                {
                                    header("Location: show_members.php");
                                }
                            }
                            // else
                            // {
                            //     header("Location: show_members.php");
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>