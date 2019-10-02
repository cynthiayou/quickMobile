<?php include "includes/db.php" ?>
<?php //include "admin/functions.php" ?>
<?php
session_start();
global $connection;
$order_id = $_GET['order_id'];
echo $order_id;
$query = "select * from orderdetail, products where order_id = '$order_id' and prod_id = product_id";
$result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_array($result)){
                            echo '<tr>
                                <td>'.$row['product_title'].'</td>
                                <td>'.$row['product_price'].'</td>
                                <td>'.$row['prod_num'].'</td>
                            </tr>';
                        }
