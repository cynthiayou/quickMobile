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
$email = $_POST['email'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$insert = "Insert into users (username, user_password, user_email) values ('$username', '$hash', '$email')";
mysqli_query($connection, $insert);
$query = "Select * from users where username = '$username'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
$id = $row['user_id'];
$role = $row['admin'];
$_SESSION['user_id'] = id;
$_SESSION['role'] = $role;
$_SESSION['username'] = $username;
header("Location: index.php");
session_write_close();
