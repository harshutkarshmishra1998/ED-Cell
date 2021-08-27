<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="includes/fonts.css">

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        DASHBOARD
                        <small>Developers</small>
                    </h1>

                    <?php include 'boxes.php'; ?>

                    <?php //include 'charts.php'; ?>
                    
                    <?php include 'includes/login_protector.php'; ?>

                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'includes/footer.php'; ?>
