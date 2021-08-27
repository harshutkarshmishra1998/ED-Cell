<?php include '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ED Cell | CA Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">

            <form class="contact100-form validate-form" action="" method="post" enctype="multipart/form-data">
                <span class="contact100-form-title">
                    CA REGISTRATION
                </span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name</span>
                    <input class="input100" type="text" name="new_ca_fullname">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Email Address is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="new_ca_email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Mobile Number is required">
                    <span class="label-input100">Mobile</span>
                    <input class="input100" type="text" name="new_ca_mob">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="College is required">
                    <span class="label-input100">College</span>
                    <input class="input100" type="text" name="new_ca_college">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Year is required">
                    <span class="label-input100">Year</span>
                    <input class="input100" type="text" name="new_ca_year">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Branch is required">
                    <span class="label-input100">Branch</span>
                    <input class="input100" type="text" name="new_ca_branch">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Image</span>
                    <br>
                    <br>
                    <input class="input100" type="file" name="image">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="new_ca_username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="text" name="new_ca_password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Comment</span>
                    <textarea class="input100" name="new_ca_info_1"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" name="submit">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
		if(isset($_POST['submit']))
		{  
			$new_ca_fullname = mysqli_real_escape_string($connection, $_POST['new_ca_fullname']);
			$new_ca_email = mysqli_real_escape_string($connection, $_POST['new_ca_email']);
			$new_ca_mob = mysqli_real_escape_string($connection, $_POST['new_ca_mob']);
			$new_ca_branch = mysqli_real_escape_string($connection, $_POST['new_ca_branch']);
			$new_ca_year = mysqli_real_escape_string($connection, $_POST['new_ca_year']);
			$new_ca_college = mysqli_real_escape_string($connection, $_POST['new_ca_college']);

			$new_ca_image = $_FILES['image']['name'];
			if(empty($new_ca_image))
			{
				$new_ca_image = "default_DVcG2eAw3E.jpg";
			}
			$new_ca_image_temp = $_FILES['image']['tmp_name'];

			$new_ca_info_1 = mysqli_real_escape_string($connection, $_POST['new_ca_info_1']);
			$new_ca_info_2 = "";

			$new_ca_username = mysqli_real_escape_string($connection, $_POST['new_ca_username']);
			$new_ca_password = mysqli_real_escape_string($connection, $_POST['new_ca_password']);

			move_uploaded_file($new_ca_image_temp, "../images/".$new_ca_image);

			$query = "INSERT INTO new_ca (new_ca_fullname, new_ca_email, new_ca_branch, new_ca_year, new_ca_college, new_ca_image, new_ca_info_1, new_ca_info_2, new_ca_username, new_ca_password, new_ca_mob)";

			$query .= "VALUES('{$new_ca_fullname}', '{$new_ca_email}', '{$new_ca_branch}', '{$new_ca_year}', '{$new_ca_college}', '{$new_ca_image}', '{$new_ca_info_1}', '{$new_ca_info_2}', '{$new_ca_username}', '{$new_ca_password}', '{$new_ca_mob}')";

			$create_post_query  = mysqli_query($connection, $query);

			if(!$create_post_query)
			{
				die("QUERY FAILED ".mysqli_error($connection));
			}

			if($create_post_query)
			{
				//header("Location: show_ca.php");
			}
		}
		// else
		// {
		//     header("Location: show_ca.php");
		// }
	?>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>