<?php include '../../includes/db.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ED Cell | CA</title>
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
                        CA LOGIN
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="ca_username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="ca_password" placeholder="Password">
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
                        <a class="txt2" href="../forgot_password.php">
                            Forgot Password
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                        <br>
                        <a class="txt2" href="../../ca_registration/index.php">
                            New Registration
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
if(isset($_POST['login']))
{
    $username = $_POST['ca_username'];
    $password = $_POST['ca_password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM ca WHERE ca_username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_ca_id = "";
    $db_ca_name = "";
    $db_ca_username = "";
    $db_ca_password = "";

    while($row = mysqli_fetch_array($select_user_query))
    {
        $db_ca_id = $row['ca_id'];
        $db_ca_name = $row['ca_fullname'];
        $db_ca_username = $row['ca_username'];
        $db_ca_password = $row['ca_password'];
    }

    if($username == $db_ca_username && $password == $db_ca_password)
    {
        $_SESSION['ca_id'] = $db_ca_id;
        $_SESSION['ca_fullname'] = $db_ca_name;
        $_SESSION['ca_username'] = $db_ca_username;
        $_SESSION['ca_password'] = $db_ca_password;
        header("Location: ../../panel_ca/");
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