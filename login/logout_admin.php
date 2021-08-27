<?php session_start(); ?>

<?php
    $_SESSION['user_id'] = "";
    $_SESSION['user_fullname'] = "";
    $_SESSION['user_email'] = "";
    $_SESSION['user_password'] = "";

    header("Location: login_admin.php");
?>