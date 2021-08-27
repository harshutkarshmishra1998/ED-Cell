<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        SPONSORS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <div class="col-xs-12">

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="sponsor_name">Name</label>
                                <br>
                                <input class="form-control" type="text" name="sponsor_name">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_content">Content</label>
                                <br>
                                <input class="form-control" type="text" name="sponsor_content">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_image">Image</label>
                                <br>
                                <input type="file" name="image">
                            </div>

                            <div class="form-group">
                                <label for="sponsor_info_1">Info 1</label>
                                <br>
                                <textarea class="form-control" type="text" name="sponsor_info_1" rows="10"
                                    cols="30"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="sponsor_info_2">Info 2</label>
                                <br>
                                <textarea class="form-control" type="text" name="sponsor_info_2" rows="10"
                                    cols="30"></textarea>
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value="Add">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['submit']))
                            {  
                                $sponsor_name = mysqli_escape_string($connection, $_POST['sponsor_name']);
                                $sponsor_content = mysqli_escape_string($connection, $_POST['sponsor_content']);

                                $sponsor_image = $_FILES['image']['name'];
                                $sponsor_image_temp = $_FILES['image']['tmp_name'];

                                $sponsor_info_1 = mysqli_escape_string($connection, $_POST['sponsor_info_1']);
                                $sponsor_info_2 = mysqli_escape_string($connection, $_POST['sponsor_info_2']);

                                move_uploaded_file($sponsor_image_temp, "../../images/".$sponsor_image);

                                $query = "INSERT INTO sponsors (sponsor_name, sponsor_content, sponsor_image, sponsor_info_1, sponsor_info_2)";

                                $query .= "VALUES('{$sponsor_name}', '{$sponsor_content}', '{$sponsor_image}', '{$sponsor_info_1}', '{$sponsor_info_2}')";

                                $create_post_query  = mysqli_query($connection, $query);

                                if(!$create_post_query)
                                {
                                    die("QUERY FAILED ".mysqli_error($connection));
                                }

                                if($create_post_query)
                                {
                                    header("Location: show_sponsors.php");
                                }
                            }
                            // else
                            // {
                            //     header("Location: show_sponsors.php");
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>