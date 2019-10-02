<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/14/2018
 * Time: 9:13 PM
 */
session_start();
global $connection;
$user_id = $_SESSION['user_id'];
$product_id = $_GET['product_id'];
$prod_num = $_GET['prod_num'];
$message = "Update Success!";
$q = "select * from products where product_id = '$product_id'";
$result = mysqli_query($connection, $q);
$row = mysqli_fetch_array($result);
$inventory = $row['inventory'];
if($prod_num > $inventory){
    $prod_num = $inventory;
    $message = "The max Item number is '$inventory'";
}
if($prod_num != 0){
    $query = "update cart set prod_num = '$prod_num' where user_id = '$user_id' and product_id = '$product_id' ";
} else {
    $query = "DELETE FROM `cart` WHERE `user_id` = '$user_id' and `product_id` = '$product_id'";
}
mysqli_query($connection, $query);
echo $message;
session_write_close();