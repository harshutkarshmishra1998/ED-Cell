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
                    <li>
                        <i class="far fa-comments"></i>
                        <a href="login/login_admin/index.php">Members Login</a>
                    </li>
                    <li>
                        <i class="far fa-comments"></i>
                        <a href="login/login_developers/index.php">Developers Login</a>
                    </li>
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


    <div class="faculty">
        <h1>FACULTY COORDINATOR</h1>
        <div class="facultywrap">
            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="img/akb.jpg" alt="" />
                    </div>
                </div>
                <div class="name">Dr. Akhilesh Barve</div>
                <div class="about">Associate Professor M.E.</div>
                <div class="social-icons">
                    <!-- <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="#" class="twitter"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="buttons">
                    <button><a href="mailto: akhileshbarve@yahoo.com">Message</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------------------- -->

    <?php
        $search = "President";
        $query = "SELECT * FROM members WHERE user_job LIKE '%$search%'";
        $select_users = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_users))
        {
            $user_id = $row['user_id'];
            $user_name = $row['user_fullname'];
            $user_email = $row['user_email'];
            $user_branch = $row['user_branch'];
            $user_year = $row['user_year'];
            $user_job = $row['user_job'];
            $user_image = $row['user_image'];
            $user_info_1 = $row['user_info_1'];
            $user_info_2 = $row['user_info_2'];
        }
    ?>

    <div class="president">
        <h1>PRESIDENT</h1>
        <div class="pwrap">
            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="images/<?php echo $user_image; ?>" alt="" />
                    </div>
                </div>
                <div class="name"><?php echo $user_name; ?></div>
                <div class="about"><?php echo $user_branch; ?></div>
                <div class="social-icons">
                    <!-- <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="<?php echo $user_info_1; ?>" class="twitter"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo $user_info_2; ?>" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="buttons">
                    <button><a href="mailto: <?php echo $user_email; ?>">Message</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------------------- -->

    <div class="vertical-heads">
        <h1>VICE PRESIDENT</h1>
        <div class="vhwrap">

            <?php
            $search = "VP";
            $query = "SELECT * FROM members WHERE user_job LIKE '%$search%'";
            $select_users = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_users))
            {
                $user_id = $row['user_id'];
                $user_name = $row['user_fullname'];
                $user_email = $row['user_email'];
                $user_branch = $row['user_branch'];
                $user_year = $row['user_year'];
                $user_job = $row['user_job'];
                $user_image = $row['user_image'];
                $user_info_1 = $row['user_info_1'];
                $user_info_2 = $row['user_info_2'];
            // }
        ?>

            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="images/<?php echo $user_image; ?>" alt="" />
                    </div>
                </div>
                <div class="name"><?php echo $user_name; ?></div>
                <div class="about"><?php echo $user_branch; ?></div>
                <div class="social-icons">
                    <!-- <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="<?php echo $user_info_1; ?>" class="twitter"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo $user_info_2; ?>" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="buttons">
                    <button><a href=" mailto: <?php echo $user_email; ?>">Message</a></button>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>

    <!-- --------------------------------------------------------------------------------------------- -->


    <div class="vertical-heads">
        <h1>VERTICAL HEADS</h1>
        <div class="vhwrap">

            <?php
            $search = "Head";
            $year = 3;
            $count = 0;
            $query = "SELECT * FROM members WHERE user_year LIKE '%$year%' AND user_job LIKE '%$search%'";
            $select_users = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_users))
            {
                $user_id = $row['user_id'];
                $user_name = $row['user_fullname'];
                $user_email = $row['user_email'];
                $user_branch = $row['user_branch'];
                $user_year = $row['user_year'];
                $user_job = $row['user_job'];
                $user_image = $row['user_image'];
                $user_info_1 = $row['user_info_1'];
                $user_info_2 = $row['user_info_2'];
            // }
        ?>

            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="images/<?php echo $user_image; ?>" alt="" />
                    </div>
                </div>
                <div class="name"><?php echo $user_name; ?></div>
                <div class="about"><?php echo $user_job; ?></div>
                <div class="social-icons">
                    <!-- <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="<?php echo $user_info_1; ?>" class="twitter"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo $user_info_2; ?>" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="buttons">
                    <button><a href=" mailto: <?php echo $user_email; ?>">Message</a></button>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>

    <!-- --------------------------------------------------------------------------------------------- -->

    <div class="main-team">
        <h1>CORE TEAM</h1>
        <div class="contwrap">
            <?php
                $search = "Head";
                $year = 4;
                $query = "SELECT * FROM members WHERE user_job NOT LIKE '%$search%' AND user_year NOT LIKE '%$year%'";
                $select_users = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_users))
                {
                    $user_id = $row['user_id'];
                    $user_name = $row['user_fullname'];
                    $user_email = $row['user_email'];
                    $user_branch = $row['user_branch'];
                    $user_year = $row['user_year'];
                    $user_job = $row['user_job'];
                    $user_image = $row['user_image'];
                    $user_info_1 = $row['user_info_1'];
                    $user_info_2 = $row['user_info_2'];
                // }
            ?>

            <div class="wrapper">
                <div class="img-area">
                    <div class="inner-area">
                        <img src="images/<?php echo $user_image; ?>" alt="" />
                    </div>
                </div>
                <div class="name"><?php echo $user_name; ?></div>
                <div class="about"><?php echo $user_job; ?></div>
                <div class="social-icons">
                    <!-- <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a> -->
                    <a href="<?php echo $user_info_1; ?>" class="twitter"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo $user_info_2; ?>" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="buttons">
                    <button><a href="mailto:<?php echo $user_email; ?>">Message</a></button>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
    <script src="js/index_2.js" type="text/javascript"></script>
</body>

</html>