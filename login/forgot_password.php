<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include '../includes/db.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <script type="application/x-javascript">
    function on() {
        document.getElementById("overlay").style.display = "block";
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }
    </script>
    <!-- Custom Theme files -->
    <link href="css/forgot_password.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>RECOVER PASSWORD</h1>
        <br>
        <div>
            <p class="m-none text-semibold h6" style="text-align: center; color:white;">Enter your e-mail below and we
                will send you reset instructions !</p>
        </div>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="post">
                    <input class="text" type="email" name="ca_email" placeholder="Enter your email address"
                        required="">
                    <br>
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="RESET" name="login">
                </form>
                <p>Remembered? <a href="login_ca/index.php"> Login Now!</a></p>
            </div>
        </div>
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['ca_email'];
    
    $email = mysqli_real_escape_string($connection, $email);

    $query = "SELECT * FROM ca WHERE ca_email = '{$email}' ";
    $select_ca_query = mysqli_query($connection, $query);

    if(!$select_ca_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_ca_name = "";
    $db_ca_email = "";
    $db_ca_password = "";

    while($row = mysqli_fetch_array($select_ca_query))
    {
        $db_ca_name = $row['ca_name'];
        $db_ca_email = $row['ca_email'];
        $db_ca_password = $row['ca_password'];
    }

    if($email == $db_ca_email)
    {
        //the subject
        $sub = "NO REPLY - PASSWORD";
        //the message
        $msg = "
        Mr/Ms. $db_ca_name,

        The password requested by you for your ONCAMPUS account is $db_ca_password.
        Thank you.
        Regards,
        ED Cell MANIT";
        //recipient email
        $rec = $db_ca_email;
        //send email
        if(mail($rec,$sub,$msg))
        {
            echo "<div id='overlay' onclick='off()' >
                <div class='overlay' ></div>
                    <div class='modal_1'>
                    <img src='images/success.png' width='200'>
                    <h5 style='text-align: center; font-weight: bold;'>PLEASE CHECK YOUR EMAIL !</h5>
                </div>
            </div>";
        }
    }

    else
    {
        echo "<div id='overlay' onclick='off()' >
                <div class='overlay' ></div>
                    <div class='modal_2'>
                    <img src='images/error.png' width='200'>
                    <h5 style='text-align: center; font-weight: bold;'>WE ARE UNABLE TO FIND YOUR EMAIL !</h5>
                    <h5 style='text-align: center; font-weight: bold;'>FEEL FREE TO CONTACT US</h5>
                    <h5 style='text-align: center; font-weight: bold;'><a href='mailto: '>Contact Us</a></h5>
                </div>
            </div>";
    }
}
?>

</html>