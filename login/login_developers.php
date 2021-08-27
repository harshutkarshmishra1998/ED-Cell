<?php include '../includes/db.php'; ?>
<?php session_start(); ?>
<?php header('Location: login_developers/index.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <h4>Login</h4>

        <form action = "" method="post">
            <div>
                <input name="username" type="text" placeholder="USERNAME">
            </div>
            <div>
                <input name="password" type="password" placeholder="PASSWORD">
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM developers WHERE developer_username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

    if(!$select_user_query)
    {
        die("QUERY FAILED"." ".mysqli_error($connection));
    }

    $db_developer_id = "";
    $db_developer_name = "";
    $db_developer_username = "";
    $db_developer_password = "";

    while($row = mysqli_fetch_array($select_user_query))
    {
        $db_developer_id = $row['developer_id'];
        $db_developer_name = $row['developer_name'];
        $db_developer_username = $row['developer_username'];
        $db_developer_password = $row['developer_password'];
    }

    if($username == $db_developer_username && $password == $db_developer_password)
    {
        $_SESSION['developer_id'] = $db_developer_id;
        $_SESSION['developer_name'] = $db_developer_name;
        $_SESSION['developer_username'] = $db_developer_username;
        $_SESSION['developer_password'] = $db_developer_password;
        header("Location: ../panel_developers/");
        exit;
    }

    else
    {
        echo "Invalid";
        // header("Location: login_developers.php");
    }
}
?>