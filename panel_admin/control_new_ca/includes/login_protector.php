<?php
    // echo $_SESSION['developer_name'];
    // echo "<br>";
    // echo $_SESSION['developer_username'];
    // echo "<br>";
    // echo $_SESSION['developer_password'];

    if($_SESSION['user_email'] == "")
    {
        header("Location: ../../login/login_admin.php");
        exit;
    }
?>
