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
                    <?php
                        $developer_id = $_GET['edit'];
                        $query = "SELECT * FROM developers WHERE developer_id = {$developer_id}";
                        $select_developer_by_id = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_developer_by_id))
                        {
                            $developer_name = $row['developer_name'];
                            $developer_username = $row['developer_username'];
                            $developer_password = $row['developer_password'];
                        }
                        if(isset($_POST['submit'])) 
                        {
                            $developer_name = mysqli_escape_string($connection, $_POST['developer_name']);
                            $developer_username = mysqli_escape_string($connection, $_POST['developer_username']);
                            $developer_password = mysqli_escape_string($connection, $_POST['developer_password']);
                            
                            $query = "UPDATE developers SET ";

                            $query .="developer_name = '{$developer_name}', ";
                            $query .="developer_username = '{$developer_username}', ";
                            $query .="developer_password = '{$developer_password}' ";

                            $query .= "WHERE developer_id = {$developer_id} ";

                            $update_post = mysqli_query($connection, $query);
                            if(!$update_post)
                            {
                                die("Failed to update ".mysqli_error($connection));
                            }
                            elseif($update_post)
                            {
                                header("Location: show_developers.php");
                            }
                        }
                        // else
                        // {
                        //     header("Location: show_developers.php");
                        // }
                    ?>

                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="developer_name">Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_name" value = "<?php echo $developer_name ?>">
                            </div>

                            <div class="form-group">
                                <label for="developer_username">Username</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_username" value = "<?php echo $developer_username ?>">
                            </div>

                            <div class="form-group">
                                <label for="developer_password">Password</label>
                                <br>
                                <input class="form-control" type = "text" name = "developer_password" value = "<?php echo $developer_password ?>">
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