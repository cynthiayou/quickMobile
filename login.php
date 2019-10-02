<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/12/2018
 * Time: 6:45 PM
 */
session_start();
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$query = "Select * from users where username = '$username'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
$db_password = $row['user_password'];
if(password_verify($password, $db_password)){
    $_SESSION['user_id'] = $row['user_id'];;
    $_SESSION['role'] = $row['admin'];
    $_SESSION['username'] = $username;
    setcookie('f', '0');
    header("Location: myMobile.php");
} else {
    setcookie('f', '1');
    header("Location: userLogin.php");
}
session_write_close();

