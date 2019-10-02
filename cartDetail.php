<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/14/2018
 * Time: 8:48 PM
 */
session_start();
global $connection;
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM cart, products  WHERE user_id = '$user_id' and cart.product_id = products.product_id";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result)) {
    $prod_num = $row['prod_num'];
    $inventory = $row['inventory'];
    $hidden = $row['product_hidden'];
    if ($prod_num > $inventory) {
        $prod_num = $inventory;
        $q = "update cart set prod_num = '$prod_num'";
        mysqli_query($connection, $q);
    } elseif ($prod_num == 0 && $inventory != 0) {
        $prod_num = 1;
        $q = "update cart set prod_num = '$prod_num'";
        mysqli_query($connection, $q);
    }

    echo '<tr>
                  <td><a href="proDetail.php?product_id='.$row['product_id'].'" >'.$row['product_title'].'</a></td>
                  <td>' . $row['product_color'] . '</td>
                  <td>' . $row['product_capacity'] . '</td>
                  <td>' . $row['product_price'] . '</td>';
    if($hidden == 1){
        echo '<td>Product is unavailable now!</td>';
    }elseif ($prod_num == 0) {
        echo '<td>Product is out of stock!</td>';
    } else {
        echo '<td><input type="text" id="' . $row['product_id'] . '" value="' . $prod_num . '"></td>';

    }
    echo '<td><button id="' . $row['product_id'] . '" class="btn btn-warning">Delete
                  </button></td>
                </tr>';
}