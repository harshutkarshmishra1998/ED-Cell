<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>EDCELL | Members</title>
    <link rel="stylesheet" href="css/style_2.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <div class="main_box">
        <input type="checkbox" id="check" />
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="logo">
                <a href="#">ED-CELL</a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <i class="fas fa-qrcode"></i>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <i class="fas fa-calendar-week"></i>
                        <a href="events/index.php?event=latest">Events</a>
                    </li>
                    <li>
                        <i class="fas fa-stream"></i>
                        <a href="archives.php">Archives</a>
                    </li>
                    <li>
                        <i class="fas fa-sliders-h"></i>
                        <a href="teams.php">Teams</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-volume"></i>
                        <a href="login/login_ca/index.php">CA Login</a>
                    </li>
                    <!-- <li>
                        <i class="far fa-comments"></i>
                        <a href="login/login_admin/index.php">Members Login</a>
                    </li>
                    <li>
                        <i class="far fa-comments"></i>
                        <a href="login/login_developers/index.php">Developers Login</a>
                    </li> -->
                </ul>
            </div>
            <div class="social_media">
                <br />
                <ul>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </ul>
            </div>
        </div>
    </div>


    <div class="main-team">
        <h1>ALL EVENTS</h1>
        <div class="contwrap">

            <?php
            $query = "SELECT * FROM events ORDER BY event_id DESC";
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

            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="images/<?php echo $event_header_image; ?>" alt="" />
                    </div>
                </div>
                <div class="name" style="text-align: center;"><?php echo $event_name; ?></div>
                <div class="social-icons">
                    <?php 
                        if(!empty($event_regi_link))
                        {
                            echo "<a href='$event_brochure' class='twitter' title='Download Bronchure'><i
                            class='fas fa-file-download'></i></a>";
                        }
                        if(!empty($event_brochure))
                        {
                            echo "<a href='$event_regi_link' class='twitter' title='Download Bronchure'><i
                            class='fas fa-file-download'></i></a>";
                        }
                    ?>
                </div>
                <div class="buttons">
                    <button><a href="events/index.php?event=<?php echo $event_id ?>">Show Details</a></button>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <script src="js/index_2.js" type="text/javascript"></script>
</body>

</html>