<?php

function escape($string) {
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function confirmQuery($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED!" . mysqli_error($connection));
    }
}

function insert_categories() {
    global $connection;
     if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];

        if($cat_title == "" || empty($cat_title)){
            echo "This field should not ne empty!";
        } else {
            $stmt = mysqli_prepare($connection, "INSERT INTO categories(cat_title) VALUES(?) ");
            mysqli_stmt_bind_param($stmt, 's', $cat_title);
            mysqli_stmt_execute($stmt);

            if(!$stmt)
                die('QUERY FAILED ' . mysqli_error($connection));
        }
         mysqli_stmt_close($stmt);
    }
}

function findAllCategories() {
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);
     while($row = mysqli_fetch_assoc($select_categories)){
         $cat_id = $row['cat_id'];
         $cat_title = $row['cat_title'];
         echo "<tr>";
         echo "<td>{$cat_id}</td>";
         echo "<td>{$cat_title}</td>";
         echo "<td><a href='categories.php?delete={$cat_id}'> Delete </a></td>";
         echo "<td><a href='categories.php?edit={$cat_id}'> Edit </a></td>";
         echo "<tr>";
     }
}

function updateCategories() {
    global $connection;
    if(isset($_GET['edit'])){
        $cat_id = $_GET['edit'];
        include "includes/update_categories.php";
    }
}

function deleteCategories() {
    global $connection;
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
        $delete_query = mysqli_query($connection, $query);
        // refresh page, otherwise need to type delte twice to delte
        header("Location: categories.php");
    }
}

function recordCount($table) {
    global $connection;
    $query = "SELECT * FROM " . $table;
    $select_all_post = mysqli_query($connection, $query);
    $result = mysqli_num_rows($select_all_post);
    confirmQuery($result);
    
    return $result;
}

function checkUserRole($table, $col, $role) {
    global $connection;
    $query = "SELECT * FROM $table WHERE $col = '$role' ";
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result);
}

function username_exists($username) {
    global $connection;
    $query = "SELECT username FROM users WHERE username = '{$username}' ";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    
    if(mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function email_exists($email) {
    global $connection;
    $query = "SELECT user_email FROM users WHERE user_email = '{$email}' ";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    
    if(mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

function redirect($location) {
    header("Location: " . $location);
    exit;
}

function ifItIsMethod($method=null) {
    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {
        return true;
    }
    return false;
}

function isLoggedIn() {
    if(isset($_SESSION['user_role'])) {
        return true;
    }
    return false;
}

function checkIfUserIsLoggedInAndRedirect($redirectLocation=null) {
    if(isLoggedIn()) {
        redirect($redirectLocation);
    }
}

function register_user($username, $email, $password) {
    global $connection;
    // clean
    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    // 10 is the time take the function to give a new hash
    // num bigger, slower the function work
    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

    $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
    $query .= "VALUES('{$username}', '{$email}', '{$password}', 'admin' )";
    $register_user_query = mysqli_query($connection, $query); 
    confirmQuery($register_user_query);
}

function login_user($username, $password) {
    global $connection;
    session_start();
    $query = "SELECT * FROM users WHERE username = '$username' ";
    $select_user_query = mysqli_query($connection, $query);
    
    if(!$select_user_query) {
        die("query failed" . mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($select_user_query)) { 
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_role = $row['admin'];
        // if(password_verify($password, $db_user_password))
        if(password_verify($password,$db_user_password)) {
        
            // admin can use all of the _SESSION values
            $_SESSION['username'] = $db_username;
            $_SESSION['user_id'] = $db_user_id;
            $_SESSION['role'] = $db_user_role;
            header("Location: myMobile.php");
            session_write_close();
            return true;
        } else {
            return false;
        }
    }
    return false;
}

?>