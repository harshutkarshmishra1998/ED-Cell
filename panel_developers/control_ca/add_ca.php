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
                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="ca_fullname">Full Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_fullname">
                            </div>

                            <div class="form-group">
                                <label for="ca_email">Email</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_email">
                            </div>

                            <div class="form-group">
                                <label for="ca_mob">Mobile</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_mob">
                            </div>

                            <div class="form-group">
                                <label for="ca_branch">Branch</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_branch">
                            </div>

                            <div class="form-group">
                                <label for="ca_year">Year</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_year">
                            </div>

                            <div class="form-group">
                                <label for="ca_college">College</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_college">
                            </div>

                            <div class="form-group">
                                <label for="ca_image">Image</label>
                                <br>
                                <input type="file" name = "image">
                            </div>

                            <div class="form-group">
                                <label for="ca_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "ca_info_1" rows = "10" cols = "30"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ca_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "ca_info_2" rows = "10" cols = "30"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="ca_username">Username</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_username">
                            </div>

                            <div class="form-group">
                                <label for="ca_password">Password</label>
                                <br>
                                <input class="form-control" type = "text" name = "ca_password">
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value = "Add">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['submit']))
                            {  
                                $ca_fullname = mysqli_escape_string($connection, $_POST['ca_fullname']);
                                $ca_email = mysqli_escape_string($connection, $_POST['ca_email']);
                                $ca_mob = mysqli_escape_string($connection, $_POST['ca_mob']);
                                $ca_branch = mysqli_escape_string($connection, $_POST['ca_branch']);
                                $ca_year = mysqli_escape_string($connection, $_POST['ca_year']);
                                $ca_college = mysqli_escape_string($connection, $_POST['ca_college']);

                                $ca_image = $_FILES['image']['name'];
                                if(empty($ca_image))
                                {
                                    $ca_image = "default_DVcG2eAw3E.jpg";
                                }
                                $ca_image_temp = $_FILES['image']['tmp_name'];

                                $ca_info_1 = mysqli_escape_string($connection, $_POST['ca_info_1']);
                                $ca_info_2 = mysqli_escape_string($connection, $_POST['ca_info_2']);
                                $ca_username = mysqli_escape_string($connection, $_POST['ca_username']);
                                $ca_password = mysqli_escape_string($connection, $_POST['ca_password']);

                                if(move_uploaded_file($ca_image_temp, "../../images/".$ca_image))
                                {
                                    echo "True";
                                }
                                else
                                {
                                    echo "False ";
                                }

                                $query = "INSERT INTO ca (ca_fullname, ca_email, ca_branch, ca_year, ca_college, ca_image, ca_info_1, ca_info_2, ca_username, ca_password, ca_mob)";

                                $query .= "VALUES('{$ca_fullname}', '{$ca_email}', '{$ca_branch}', '{$ca_year}', '{$ca_college}', '{$ca_image}', '{$ca_info_1}', '{$ca_info_2}', '{$ca_username}', '{$ca_password}', '{$ca_mob}')";

                                $create_post_query  = mysqli_query($connection, $query);

                                if(!$create_post_query)
                                {
                                    die("QUERY FAILED ".mysqli_error($connection));
                                }

                                if($create_post_query)
                                {
                                    header("Location: show_ca.php");
                                }
                            }
                            // else
                            // {
                            //     header("Location: show_ca.php");
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'includes/footer.php'; ?>