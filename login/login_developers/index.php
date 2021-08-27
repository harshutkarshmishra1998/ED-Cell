<?php include '../../includes/db.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ED Cell | Developers</title>
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
                        DEVELOPER LOGIN
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
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
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		$query = "SELECT * FROM developers WHERE developer_username = '{$username}' ";
		$select_user_query = mysqli_query($connection, $query);

		if(!$select_user_query)
		{
			die("QUERY FAILED"." ".mysqli_error($connection));
		}

		$db_developer_id = "";
		$db_developer_name = "";
		$db_developer_username = "";
		$db_developer_password = "";

		while($row = mysqli_fetch_array($select_user_query))
		{
			$db_developer_id = $row['developer_id'];
			$db_developer_name = $row['developer_name'];
			$db_developer_username = $row['developer_username'];
			$db_developer_password = $row['developer_password'];
		}

		if($username == $db_developer_username && $password == $db_developer_password)
		{
			$_SESSION['developer_id'] = $db_developer_id;
			$_SESSION['developer_name'] = $db_developer_name;
			$_SESSION['developer_username'] = $db_developer_username;
			$_SESSION['developer_password'] = $db_developer_password;
			header("Location: ../../panel_developers/");
			exit;
		}

		else
		{
			//echo "Invalid";
			//header("Location: ../login_developers.php");
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
    <!-- <script src="vendor/tilt/tilt.jquery.min.js"></script> -->
    <!-- <script>
    $('.js-tilt').tilt({
        scale: 1.0
    })
    </script> -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>