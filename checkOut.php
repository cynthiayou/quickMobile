<?php include "includes/db.php"; ?>
<?php
session_start();
global $connection;
$user_id = $_SESSION['user_id'];
$cart = "select * from cart,products where user_id = '$user_id' and cart.product_id = products.product_id";
$cartResult = mysqli_query($connection, $cart);
if(mysqli_num_rows($cartResult) == 0){
    echo "<script>window.alert('Shopping cart is empty, please add products.'); location.href='phone.php'</script>";

} else {
    $query = "insert into history (user_id) values ('$user_id')";
    mysqli_query($connection, $query);
    $q = "SELECT MAX(order_id) as max FROM history WHERE user_id = '$user_id'";
    $result = mysqli_query($connection, $q);
    $row = mysqli_fetch_array($result);
    $order_id = $row['max'];
    $total_price = 0;
    while($row = mysqli_fetch_array($cartResult)){
        $product_id = $row['product_id'];
        $num = $row['prod_num'];
        $price = $row['product_price'];
        $hidden = $row['product_hidden'];
        if($num == 0 || $hidden == 1){
            continue;
        }
        $total_price += $num * $price;
        $insert = "insert into orderdetail (order_id, prod_id, prod_num) values ('$order_id', '$product_id', '$num')";
        $remove = "delete from cart where user_id = '$user_id' and product_id = '$product_id'";
        $update = "update products set inventory = inventory - '$num' where product_id = '$product_id'";
        mysqli_query($connection, $insert);
        mysqli_query($connection, $remove);
        mysqli_query($connection,$update);
    }
    if($total_price == 0){
        $update_price = "delete from history where order_id ='$order_id'";
    } else {
        $update_price = "update history set total_price = '$total_price' where order_id ='$order_id'";
    }
    $cost = "Total cost is '$total_price'";
    mysqli_query($connection,$update_price);
    header("Location: order.php");
}
session_write_close();