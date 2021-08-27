<?php session_start(); ?>

<?php
    $_SESSION['ca_id'] = "";
    $_SESSION['ca_name'] = "";
    $_SESSION['ca_username'] = "";
    $_SESSION['ca_password'] = "";

    header("Location: login_ca.php");
?>