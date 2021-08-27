<?php
    // echo $_SESSION['developer_name'];
    // echo "<br>";
    // echo $_SESSION['developer_username'];
    // echo "<br>";
    // echo $_SESSION['developer_password'];

    if($_SESSION['developer_username'] == "")
    {
        header("Location: ../../login/login_developers.php");
        exit;
    }
?>
