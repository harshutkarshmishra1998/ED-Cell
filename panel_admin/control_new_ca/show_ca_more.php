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
                        NEW CA REGISTRATIONS
                        <small>Admin</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        if(isset($_GET['new_ca_id']))
                        {
                            $new_ca_id = $_GET['new_ca_id'];
                            $query = "SELECT * FROM new_ca WHERE new_ca_id = {$new_ca_id}";
                            $select_ca = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_ca))
                            {
                                $new_ca_fullname = $row['new_ca_fullname'];
                                $new_ca_email = $row['new_ca_email'];
                                $new_ca_mob = $row['new_ca_mob'];
                                $new_ca_branch = $row['new_ca_branch'];
                                $new_ca_year = $row['new_ca_year'];
                                $new_ca_college = $row['new_ca_college'];
                                $new_ca_image = $row['new_ca_image'];
                                $new_ca_info_1 = $row['new_ca_info_1'];
                                $new_ca_info_2 = $row['new_ca_info_2'];
                                $new_ca_username = $row['new_ca_username'];
                                $new_ca_password = $row['new_ca_password'];
                            }
                        }
                    ?>
                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img src="../../images/<?php echo $new_ca_image ?>" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2>
                                            <?php echo $new_ca_fullname; ?>
                                        </h2>
                                        <h4>
                                            <?php echo $new_ca_college; ?>
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
                                    <a href="../../images/<?php echo $new_ca_image ?>">
                                        <button type="button" class="btn btn-default btn-custom">View Photo</button>
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
                                                    <p><?php echo $new_ca_fullname; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_email; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mobile</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_mob; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>College</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_college; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Year</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_year; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Branch</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_branch; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Username</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_username; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_password; ?></p>
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
                                                    <p><?php echo $new_ca_info_1; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Info II</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $new_ca_info_2; ?></p>
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