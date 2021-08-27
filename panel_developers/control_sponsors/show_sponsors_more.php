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
                        SPONSORS
                        <small>Developers</small>
                    </h1>
                    <?php include 'includes/login_protector.php'; ?>
                    <?php
                        if(isset($_GET['sponsor_id']))
                        {
                            $sponsor_id = $_GET['sponsor_id'];
                            $query = "SELECT * FROM sponsors WHERE sponsor_id = {$sponsor_id}";
                            $select_sponsors = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_sponsors))
                            {
                                $sponsor_name = $row['sponsor_name'];
                                $sponsor_image = $row['sponsor_image'];
                                $sponsor_content = $row['sponsor_content'];
                                $sponsor_info_1 = $row['sponsor_info_1'];
                                $sponsor_info_2 = $row['sponsor_info_2'];
                            }
                        }
                    ?>
                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img src="../../images/<?php echo $sponsor_image ?>" alt="" height="200"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h2>
                                            <?php echo $sponsor_name; ?>
                                        </h2>
                                        <br><br>
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
                                    <a href="edit_sponsors.php?edit=<?php echo $sponsor_id ?>">
                                        <button type="button" class="btn btn-default btn-custom">Edit Sponsor</button>
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
                                                    <p><?php echo $sponsor_name; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Content</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $sponsor_content; ?></p>
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
                                                    <p><?php echo $sponsor_info_1; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Info II</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $sponsor_info_2; ?></p>
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