<?php include '../../includes/db.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ED Cell | Members</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../../img/logo.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title">
                        MEMBER LOGIN
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="user_email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="user_password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <!-- <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a> -->
                    </div>

                    <div class="text-center p-t-136">
                        <!-- <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
if(isset($_POST['login']))
{
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    //echo $email;

    $query = "SELECT * FROM members WHERE user_email = '{$email}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_user_id = "";
    $db_user_name = "";
    $db_user_email = "";
    $db_user_password = "";

    while($row = mysqli_fetch_array($select_user_query))
    {
        $db_user_id = $row['user_id'];
        $db_user_name = $row['user_fullname'];
        $db_user_email = $row['user_email'];
        $db_user_password = $row['user_password'];
    }

    if($email == $db_user_email && $password == $db_user_password)
    {
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['user_fullname'] = $db_user_name;
        $_SESSION['user_email'] = $db_user_email;
        $_SESSION['user_password'] = $db_user_password;
        header("Location: ../../panel_admin/");
        exit;
    }

    else
    {
        //echo "Invalid";
        // header("Location: login_ca.php");
    }
}
?>



    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script> -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>