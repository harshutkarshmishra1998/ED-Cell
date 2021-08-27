<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
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
                    <div class = "col-xs-12">

                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="ca_data_file_1">Upload PDF</label>
                                <br>
                                <input type="file" name = "file">
                            </div>
                            
                            <div class="form-group">
                                <label for="ca_data_comment">Comment</label>
                                <br>
                                <textarea class="form-control" name = "ca_data_comment" type="text"  rows = "10" cols = "30"></textarea>
                            </div>

                            <div class="form-group">
                                <input name="submit" class="btn btn-primary" type="submit" value = "Add">
                            </div>

                        </form>

                        <?php
                            if(isset($_POST['submit']))
                            {  
                                $ca_data_file_1 = $_FILES['file']['name'];
                                $ca_data_file_1_temp = $_FILES['file']['tmp_name'];

                                $ca_data_comment = mysqli_escape_string($connection, $_POST['ca_data_comment']);

                                move_uploaded_file($ca_data_file_1_temp, "../../files/".$ca_data_file_1);

                                $query = "INSERT INTO ca_data (ca_data_name, ca_data_college ,ca_data_file_1, ca_data_comment)";

                                $query .= "VALUES('${ca_name}','${ca_college}','{$ca_data_file_1}', '${ca_data_comment}')";

                                $create_post_query  = mysqli_query($connection, $query);

                                if(!$create_post_query)
                                {
                                    die("QUERY FAILED ".mysqli_error($connection));
                                }

                                if($create_post_query)
                                {
                                    header("Location: show_data.php");
                                }
                            }
                            // else
                            // {
                            //     header("Location: show_sponsors.php");
                            // }
                        ?>
                    </div>