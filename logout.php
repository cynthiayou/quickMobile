<?php
/**
 * Created by PhpStorm.
 * User: lurcker
 * Date: 4/12/2018
 * Time: 10:04 PM
 */
session_start();
session_destroy();
header("location: index.php");
