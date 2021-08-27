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
                        MEMBERS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        if(isset($_GET['user_id']))
                        {
                            $user_id = $_GET['user_id'];
                            $query = "SELECT * FROM members WHERE user_id = {$user_id}";
                            $select_users = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_users))
                            {
                                $user_fullname = $row['user_fullname'];
                                $user_email = $row['user_email'];
                                $user_branch = $row['user_branch'];
                                $user_year = $row['user_year'];
                                $user_job = $row['user_job'];
                                $user_image = $row['user_image'];
                                $user_info_1 = $row['user_info_1'];
                                $user_info_2 = $row['user_info_2'];
                                $user_password = $row['user_password'];
                            }
                        }
                    ?>
                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img src="../../images/<?php echo $user_image ?>" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2>
                                            <?php echo $user_fullname; ?>
                                        </h2>
                                        <h4>
                                            <?php echo $user_job; ?>
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
                                    <a href="edit_members.php?edit=<?php echo $user_id ?>">
                                        <button type="button" class="btn btn-default btn-custom">Edit Member</button>
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
                                                    <p><?php echo $user_fullname; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_email; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Job</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_job; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Year</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_year; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Branch</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_branch; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_password; ?></p>
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
                                                    <p><?php echo $user_info_1; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Info II</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $user_info_2; ?></p>
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