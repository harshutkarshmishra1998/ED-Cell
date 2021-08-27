<div class="flex-wrap">

    <div class="col-lg-3 col-md-6">
        <!-- <div class="panel panel-primary"> -->
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM ca";
                        $select_all_ca = mysqli_query($connection, $query);
                        $ca_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$ca_counts}</div>";
                        ?>
                    <div>CA</div>
                    </div>
                </div>
            </div>
            <a href="control_ca/show_ca.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM ca_data";
                        $select_all_ca = mysqli_query($connection, $query);
                        $ca_data_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$ca_data_counts}</div>";
                        ?>
                    <div>CA Uploads</div>
                    </div>
                </div>
            </div>
            <a href="control_ca_data/list_ca_data.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM developers";
                        $select_all_ca = mysqli_query($connection, $query);
                        $developers_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$developers_counts}</div>";
                        ?>
                    <div>Developers</div>
                    </div>
                </div>
            </div>
            <a href="control_developers/show_developers.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM events";
                        $select_all_ca = mysqli_query($connection, $query);
                        $events_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$events_counts}</div>";
                        ?>
                    <div>Events</div>
                    </div>
                </div>
            </div>
            <a href="control_events/list_events.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM members";
                        $select_all_ca = mysqli_query($connection, $query);
                        $members_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$members_counts}</div>";
                        ?>
                    <div>Members</div>
                    </div>
                </div>
            </div>
            <a href="control_members/show_members.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM new_ca";
                        $select_all_ca = mysqli_query($connection, $query);
                        $new_ca_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$new_ca_counts}</div>";
                        ?>
                    <div>CA Registrations</div>
                    </div>
                </div>
            </div>
            <a href="control_new_ca/show_ca.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM sponsors";
                        $select_all_ca = mysqli_query($connection, $query);
                        $sponsors_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$sponsors_counts}</div>";
                        ?>
                    <div>Sponsors</div>
                    </div>
                </div>
            </div>
            <a href="control_sponsors/show_sponsors.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM subscribe";
                        $select_all_ca = mysqli_query($connection, $query);
                        $sponsors_counts = mysqli_num_rows($select_all_ca);
                        echo "<div class='huge'>{$sponsors_counts}</div>";
                        ?>
                    <div>Subcribers</div>
                    </div>
                </div>
            </div>
            <a href="control_subscribe/show_sub.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>