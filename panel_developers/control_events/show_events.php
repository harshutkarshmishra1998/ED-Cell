<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
    $event_id = $_GET['event_id'];
    $query = "SELECT * FROM events WHERE event_id LIKE $event_id";
    $select_events = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_events))
    {
        $event_id = $row['event_id'];
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
    // }
?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <?php echo $event_name ?>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <div class="col-xs-12">

                        <h3>HEADER IMAGE/VIDEO</h3>
                        <div class="form-group">
                            <img width="100%" height="300" src="../../images/<?php echo $event_header_image ?>">
                        </div>
                        <div class="form-group">
                            <video width="100%" height="300" controls autoplay>
                                <source src="../../videos/<?php echo $event_header_video ?>" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                            <script>
                            document.getElementsByTagName('video')[0].volume = 0;
                            </script>
                        </div>

                        <div class="form-group">
                            <label for="event_date">Date</label>
                            <br>
                            <input class="form-control" type="text" name="event_date" value="<?php echo $event_date ?>"
                                disabled>
                        </div>

                        <h3>POSTERS</h3>
                        <div class="form-group">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_1 ?>">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_2 ?>">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_3 ?>">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_4 ?>">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_5 ?>">
                            <img width="190" height="190" src="../../images/<?php echo $event_poster_6 ?>">
                        </div>

                        <h3>DESCRIPTION</h3>
                        <div class="form-group">
                            <label for="event_info_1">Description: 1</label>
                            <br>
                            <textarea class="form-control" type="text" name="user_info_2" rows="10" cols="30"
                                disabled><?php echo $event_info_1 ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="event_info_1">Description: 2</label>
                            <br>
                            <textarea class="form-control" type="text" name="user_info_2" rows="10" cols="30"
                                disabled><?php echo $event_info_2 ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="event_info_1">Description: 3</label>
                            <br>
                            <textarea class="form-control" type="text" name="user_info_2" rows="10" cols="30"
                                disabled><?php echo $event_info_3 ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="event_info_1">Description: 4</label>
                            <br>
                            <textarea class="form-control" type="text" name="user_info_2" rows="10" cols="30"
                                disabled><?php echo $event_info_4 ?></textarea>
                        </div>


                        <div class="form-group">
                            <label for="event_brochure">Brochure</label>
                            <br>
                            <embed src="../../files/<?php echo $event_brochure ?>" height="200" width="300"></embed>
                            <br>
                            <a href="../../files/<?php echo $event_brochure ?>">View PDF</a>
                        </div>


                        <div class="form-group">
                            <label for="event_regi_link">Registration Link</label>
                            <br>
                            <input class="form-control" type="text" name="event_regi_link"
                                value="<?php echo $event_regi_link ?>" disabled>
                        </div>

                        <a href="edit_events.php?edit=<?php echo $event_id ?>">
                            <button type="button" class="btn btn-default btn-custom">Edit</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php include 'includes/footer.php'; ?>