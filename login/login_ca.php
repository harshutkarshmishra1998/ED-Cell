<?php include '../includes/db.php'; ?>
<?php session_start(); ?>
<?php header('Location: login_ca/index.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <h4>Login CA</h4>

        <form action = "" method="post">
            <div>
                <input name="ca_username" type="text" placeholder="USERNAME">
            </div>
            <div>
                <input name="ca_password" type="password" placeholder="PASSWORD">
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
    $username = $_POST['ca_username'];
    $password = $_POST['ca_password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM ca WHERE ca_username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_ca_id = "";
    $db_ca_name = "";
    $db_ca_username = "";
    $db_ca_password = "";

    while($row = mysqli_fetch_array($select_user_query))
    {
        $db_ca_id = $row['ca_id'];
        $db_ca_name = $row['ca_fullname'];
        $db_ca_username = $row['ca_username'];
        $db_ca_password = $row['ca_password'];
    }

    if($username == $db_ca_username && $password == $db_ca_password)
    {
        $_SESSION['ca_id'] = $db_ca_id;
        $_SESSION['ca_fullname'] = $db_ca_name;
        $_SESSION['ca_username'] = $db_ca_username;
        $_SESSION['ca_password'] = $db_ca_password;
        header("Location: ../panel_ca/");
        exit;
    }

    else
    {
        echo "Invalid";
        // header("Location: login_ca.php");
    }
}
?>