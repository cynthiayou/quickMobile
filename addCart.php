<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/14/2018
 * Time: 8:15 PM
 */
session_start();
global $connection;
$user_id=$_SESSION['user_id'];
$product_id=$_GET["product_id"];
echo $user_id;
echo "<br>";
echo $product_id;
echo "<br>";
$query = "select * from cart where user_id = '$user_id' and product_id = '$product_id'";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) == 0){
    $q = "insert into cart (user_id, product_id, prod_num) values ('$user_id', '$product_id','1')";
} else {
    $row = mysqli_fetch_array($result);
    $num = $row['prod_num'] + 1;

    $q = "update cart set prod_num = '$num' where user_id = '$user_id' and product_id = '$product_id' ";
}
echo $q;
echo "<br>";
mysqli_query($connection, $q);
header("Location: cart.php");
session_write_close();