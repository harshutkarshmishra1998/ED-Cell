<?php include '../includes/db.php'; ?>
<?php session_start(); ?>
<?php header('Location: login_admin/index.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <h4>Login Admin</h4>

        <form action = "" method="post">
            <div>
                <input name="user_email" type="text" placeholder="email">
            </div>
            <div>
                <input name="user_password" type="password" placeholder="PASSWORD">
            </div>
            <span>
                <button name="login" type="submit">Submit</button>
            </span>
        </form>

    </div>
</body>
</html>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    //echo $email;

    $query = "SELECT * FROM members WHERE user_email = '{$email}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_user_id = "";
    $db_user_name = "";
    $db_user_email = "";
    $db_user_password = "";

    while($row = mysqli_fetch_array($select_user_query))
    {
        $db_user_id = $row['user_id'];
        $db_user_name = $row['user_fullname'];
        $db_user_email = $row['user_email'];
        $db_user_password = $row['user_password'];
    }

    if($email == $db_user_email && $password == $db_user_password)
    {
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['user_fullname'] = $db_user_name;
        $_SESSION['user_email'] = $db_user_email;
        $_SESSION['user_password'] = $db_user_password;
        header("Location: ../panel_admin/");
        exit;
    }

    else
    {
        //echo "Invalid";
        echo $db_user_email;
        echo $db_user_password;
        // header("Location: login_ca.php");
    }
}
?>