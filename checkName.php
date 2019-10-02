<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/12/2018
 * Time: 5:18 PM
 */
session_start();
$username = $_GET["username"];
global $connection;
$query = "SELECT * from users Where username = '$username'";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0){
    echo "Username already been used!";
} else {
    echo "OK";
}