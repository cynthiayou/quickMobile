<?php include "includes/db.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/15/2018
 * Time: 8:17 AM
 */
session_start();
global $connection;
$product_title = $_POST['title'];
$product_manufacture = $_POST['manufacture'];
$product_price = $_POST['price'];
$product_color = $_POST['color'];
$product_capacity = $_POST['capacity'];
$inventory = $_POST['inventory'];
$description = mysqli_real_escape_string($connection,$_POST['description']);
$image_name = "";
if(!empty($_FILES["image"]["name"])){
    for($i = 0; $i < 8; $i++){
        $image_name.= chr(mt_rand(97, 122));
    }
    $temp = explode(".", $_FILES["image"]["name"]);
    $image_name.=".";
    $image_name.=end($temp);
    $fileName = './img/';
    $fileName .= $image_name;
    move_uploaded_file($_FILES["image"]["tmp_name"], $fileName);
} else {
    $image_name = "noimage.png";
}
if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $query = "update products set product_title ='$product_title', product_manufacturer = '$product_manufacture', 
product_price = '$product_price', product_color='$product_color', product_capacity='$product_capacity', 
inventory = '$inventory', product_description ='$description' where product_id = '$product_id'";
    mysqli_query($connection, $query);
    if(!empty($_FILES['image']['name'])){
        $q = "update products set product_image = '$image_name' where product_id = '$product_id'";
        mysqli_query($connection, $q);
    }
    $target = "Location:proDetail.php?product_id=";
    $target .= $product_id;
} else {
    $query = "insert into products (product_title, product_manufacturer, product_price, product_color, 
product_capacity, inventory, product_image, product_description) values ('$product_title',  '$product_manufacture', '$product_price','$product_color','$product_capacity','$inventory', '$image_name','$description')";

    $target = "Location:phone.php#allPhone";
}
mysqli_query($connection, $query);
header($target);
session_write_close();
