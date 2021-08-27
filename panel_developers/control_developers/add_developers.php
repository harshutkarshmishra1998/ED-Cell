<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        DEVELOPERS
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="developer_name">Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_name">
                            </div>

                            <div class="form-group">
                                <label for="developer_username">Username</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_username">
                            </div>

                            <div class="form-group">
                                <label for="developer_password">Password</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_password">
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value = "Add">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['submit']))
                            {  
                                $developer_name = mysqli_escape_string($connection, $_POST['developer_name']);
                                $developer_username = mysqli_escape_string($connection, $_POST['developer_username']);
                                $developer_password = mysqli_escape_string($connection, $_POST['developer_password']);

                                $query = "INSERT INTO developers (developer_name, developer_username, developer_password)";

                                $query .= "VALUES('{$developer_name}', '{$developer_username}', '{$developer_password}')";

                                $create_post_query  = mysqli_query($connection, $query);

                                if(!$create_post_query)
                                {
                                    die("QUERY FAILED ".mysqli_error($connection));
                                }

                                if($create_post_query)
                                {
                                    header("Location: show_developers.php");
                                }
                            }
                            // else
                            // {
                            //     header("Location: show_developers.php");
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'includes/footer.php'; ?>