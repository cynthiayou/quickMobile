<?php ob_start(); ?>
<?php
// security way to access to databse
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "retailproject";
$db['db_port'] = 3307;

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
// $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query = "SET NAMES utf8";
mysqli_query($connection, $query);
?>