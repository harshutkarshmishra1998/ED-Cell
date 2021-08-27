<?php
    // echo $_SESSION['ca_fullname'];
    // echo "<br>";
    // echo $_SESSION['ca_username'];
    // echo "<br>";
    // echo $_SESSION['ca_password'];

    if($_SESSION['ca_username'] == "")
    {
        header("Location: ../login/login_ca.php");
        exit;
    }
?>
