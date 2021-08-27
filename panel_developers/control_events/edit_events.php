<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
    $event_id = $_GET['edit'];
    $query = "SELECT * FROM events WHERE event_id = {$event_id}";
    $select_events = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_events))
    {
        $event_name = $row['event_name'];
        $event_header_image = $row['event_header_image'];
        $event_header_video = $row['event_header_video'];
        $event_date = $row['event_date'];
        $event_info_1 = $row['event_info_1'];
        $event_info_2 = $row['event_info_2'];
        $event_info_3 = $row['event_info_3'];
        $event_info_4 = $row['event_info_4'];
        $event_poster_1 = $row['event_poster_1'];
        $event_poster_2 = $row['event_poster_2'];
        $event_poster_3 = $row['event_poster_3'];
        $event_poster_4 = $row['event_poster_4'];
        $event_poster_5 = $row['event_poster_5'];
        $event_poster_6 = $row['event_poster_6'];
        $event_brochure = $row['event_brochure'];
        $event_regi_link = $row['event_regi_link'];
    }
    if(isset($_POST['submit'])) 
    {
        $event_name = mysqli_escape_string($connection, $_POST['event_name']);
                        
        $event_header_image = $_FILES['image1']['name'];
        $event_header_image_tmp = $_FILES['image1']['tmp_name'];

        $event_header_video = $_FILES['video']['name'];
        $event_header_video_tmp = $_FILES['video']['tmp_name'];

        $event_date = mysqli_escape_string($connection, $_POST['event_date']);

        $event_info_1 = mysqli_escape_string($connection, $_POST['event_info_1']);
        $event_info_2 = mysqli_escape_string($connection, $_POST['event_info_2']);
        $event_info_3 = mysqli_escape_string($connection, $_POST['event_info_3']);
        $event_info_4 = mysqli_escape_string($connection, $_POST['event_info_4']);

        $event_poster_1 = $_FILES['image2']['name'];
        $event_poster_1_tmp = $_FILES['image2']['tmp_name'];

        $event_poster_2 = $_FILES['image3']['name'];
        $event_poster_2_tmp = $_FILES['image3']['tmp_name'];

        $event_poster_3 = $_FILES['image4']['name'];
        $event_poster_3_tmp = $_FILES['image4']['tmp_name'];

        $event_poster_4 = $_FILES['image5']['name'];
        $event_poster_4_tmp = $_FILES['image5']['tmp_name'];

        $event_poster_5 = $_FILES['image6']['name'];
        $event_poster_5_tmp = $_FILES['image6']['tmp_name'];

        $event_poster_6 = $_FILES['image7']['name'];
        $event_poster_6_tmp = $_FILES['image7']['tmp_name'];

        $event_brochure = $_FILES['file']['name'];
        $event_brochure_tmp = $_FILES['file']['tmp_name'];

        $event_regi_link = $_POST['event_regi_link'];

        move_uploaded_file($event_header_image_tmp, "../../images/".$event_header_image);
        if(empty($event_header_image))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_header_image = $row["event_header_image"];
            } 
        }

        move_uploaded_file($event_header_video_tmp, "../../videos/".$event_header_video);
        if(empty($event_header_video))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_video = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_video))
            {
                $event_header_video = $row["event_header_video"];
            } 
        }
        
        move_uploaded_file($event_poster_1_tmp, "../../images/".$event_poster_1);
        if(empty($event_poster_1))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_1 = $row["event_poster_1"];
            } 
        }

        move_uploaded_file($event_poster_2_tmp, "../../images/".$event_poster_2);
        if(empty($event_poster_2))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_2 = $row["event_poster_2"];
            } 
        }

        move_uploaded_file($event_poster_3_tmp, "../../images/".$event_poster_3);
        if(empty($event_poster_3))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_3 = $row["event_poster_3"];
            } 
        }

        move_uploaded_file($event_poster_4_tmp, "../../images/".$event_poster_4);
        if(empty($event_poster_4))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_4 = $row["event_poster_4"];
            } 
        }

        move_uploaded_file($event_poster_5_tmp, "../../images/".$event_poster_5);
        if(empty($event_poster_5))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_5 = $row["event_poster_5"];
            } 
        }

        move_uploaded_file($event_poster_6_tmp, "../../images/".$event_poster_6);
        if(empty($event_poster_6))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_image = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_image))
            {
                $event_poster_6 = $row["event_poster_6"];
            } 
        }

        
        move_uploaded_file($event_brochure_tmp, "../../files/".$event_brochure);
        if(empty($event_brochure))
        {
            $query = "SELECT * FROM events WHERE event_id = {$event_id}";
            $select_file = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($select_file))
            {
                $event_brochure = $row["event_brochure"];
            } 
        }

        $query = "UPDATE events SET ";

        $query .="event_name = '{$event_name}', ";
        $query .="event_date = '{$event_date}', ";
        $query .="event_info_1 = '{$event_info_1}', ";
        $query .="event_info_2 = '{$event_info_2}', ";
        $query .="event_info_3 = '{$event_info_3}', ";
        $query .="event_info_4 = '{$event_info_4}', ";
        $query .="event_header_image = '{$event_header_image}', ";
        $query .="event_header_video = '{$event_header_video}', ";
        $query .= "event_poster_1 = '{$event_poster_1}', ";
        $query .= "event_poster_2 = '{$event_poster_2}', ";
        $query .= "event_poster_3 = '{$event_poster_3}', ";
        $query .= "event_poster_4 = '{$event_poster_4}', ";
        $query .= "event_poster_5 = '{$event_poster_5}', ";
        $query .= "event_poster_6 = '{$event_poster_6}', ";
        $query .= "event_brochure = '{$event_brochure}', ";
        $query .= "event_regi_link = '{$event_regi_link}' ";

        $query .= "WHERE event_id = {$event_id} ";

        $update_event = mysqli_query($connection, $query);
        if(!$update_event)
        {
            die("Failed to update ".mysqli_error($connection));
        }
        elseif($update_event)
        {
            // header("Location: show_events.php?event_id={$event_id}");
            header("Location: list_events.php");
        }
    }
    // // else
    // // {
    // //     header("Location: show_members.php");
    // // }
?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php echo $event_name ?>
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <div class = "col-xs-12">
                        <form action = "" method = "post" enctype = "multipart/form-data">

                            <div class="form-group">
                                <label for="event_name">Event Name</label>
                                <br>
                                <input class="form-control" type = "text" name = "event_name" value = "<?php echo $event_name ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_header_image">Header Image</label>
                                <br>
                                <input type="file" name = "image1">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_header_image ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_header_video">Header Video</label>
                                <br>
                                <input type="file" name = "video">
                                <br>
                                <video width="100%" height = "300" controls autoplay>
                                <source src="../../videos/<?php echo $event_header_video ?>" type="video/mp4">
                                </video>
                                <script>document.getElementsByTagName('video')[0].volume = 0;</script>
                            </div>

                            <div class="form-group">
                                <label for="event_date">Event Date</label>
                                <br>
                                <input class="form-control" type = "text" name = "event_date" value = "<?php echo $event_date ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_1">Image 1</label>
                                <br>
                                <input type="file" name = "image2">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_1 ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_2">Image 2</label>
                                <br>
                                <input type="file" name = "image3">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_2 ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_3">Image 3</label>
                                <br>
                                <input type="file" name = "image4">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_3 ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_4">Image 4</label>
                                <br>
                                <input type="file" name = "image5">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_4 ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_5">Image 5</label>
                                <br>
                                <input type="file" name = "image6">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_5 ?>">
                            </div>

                            <div class="form-group">
                                <label for="event_poster_6">Image 6</label>
                                <br>
                                <input type="file" name = "image7">
                                <br>
                                <img width= "100" src="../../images/<?php echo $event_poster_6 ?>">
                            </div>

                            <h3>DESCRIPTION</h3>
                            <div class="form-group">
                                <label for="event_info_1">Description: 1</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "event_info_1" rows = "10" cols = "30"><?php echo $event_info_1 ?></textarea>
                            </div>

                            <div class="form-group">
                            <label for="event_info_2">Description: 2</label>
                            <br>
                            <textarea class="form-control" type = "text" name = "event_info_2" rows = "10" cols = "30"><?php echo $event_info_2 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="event_info_3">Description: 3</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "event_info_3" rows = "10" cols = "30"><?php echo $event_info_3 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="event_info_4">Description: 4</label>
                                <br>
                                <textarea class="form-control" type = "text" name = "event_info_4" rows = "10" cols = "30"><?php echo $event_info_4 ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="event_brochure">Brochure</label>
                                <br>
                                <input type="file" name = "file">
                                <br>
                                <embed src="../../files/<?php echo $event_brochure ?>" height="200" width="300"></embed>
                                <br>
                                <a href="../../files/<?php echo $event_brochure ?>">View PDF</a>
                            </div>

                            <div class="form-group">
                                <label for="event_regi_link">Registration Link</label>
                                <br>
                                <input class="form-control" type = "text" name = "event_regi_link" value = "<?php echo $event_regi_link ?>">
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
