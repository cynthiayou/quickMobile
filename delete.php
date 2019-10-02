<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/15/2018
 * Time: 10:25 AM
 */
global $connection;
session_start();
$product_id = $_GET['product_id'];
$query = "update products set product_hidden=1 where product_id='$product_id'";
mysqli_query($connection,$query);
header("Location:phone.php");