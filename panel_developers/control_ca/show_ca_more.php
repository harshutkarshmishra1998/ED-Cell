<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="includes/show_ca_more.css">

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
                    <?php
                        if(isset($_GET['ca_id']))
                        {
                            $ca_id = $_GET['ca_id'];
                            $query = "SELECT * FROM ca WHERE ca_id = {$ca_id}";
                            $select_ca = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_ca))
                            {
                                $ca_fullname = $row['ca_fullname'];
                                $ca_email = $row['ca_email'];
                                $ca_mob = $row['ca_mob'];
                                $ca_branch = $row['ca_branch'];
                                $ca_year = $row['ca_year'];
                                $ca_college = $row['ca_college'];
                                $ca_image = $row['ca_image'];
                                $ca_info_1 = $row['ca_info_1'];
                                $ca_info_2 = $row['ca_info_2'];
                                $ca_username = $row['ca_username'];
                                $ca_password = $row['ca_password'];
                            }
                        }
                    ?>
                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img src="../../images/<?php echo $ca_image ?>" height="200"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2>
                                            <?php echo $ca_fullname; ?>
                                        </h2>
                                        <h4>
                                            <?php echo $ca_college; ?>
                                        </h4>
                                        <br><br>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">More
                                                    Info</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="edit_ca.php?edit=<?php echo $ca_id ?>">
                                        <button type="button" class="btn btn-default btn-custom">Edit Profile</button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_fullname; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_email; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mobile</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_mob; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>College</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_college; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Year</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_year; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Branch</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_branch; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Username</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_username; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_password; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Info I</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_info_1; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Info II</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $ca_info_2; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>