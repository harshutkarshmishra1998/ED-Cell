<?php session_start(); ?>

<?php
    $_SESSION['developer_id'] = "";
    $_SESSION['developer_name'] = "";
    $_SESSION['developer_username'] = "";
    $_SESSION['developer_password'] = "";

    header("Location: login_developers.php");
?>