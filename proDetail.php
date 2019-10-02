<?php session_start() ?>
<?php include "includes/db.php" ?>
<?php //include "admin/functions.php" ?>
<?php
global $connection;
$id = $_GET['product_id'];
$query = "select * from products where product_id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
$product_manufacture = $row['product_manufacturer'];
$product_title = $row['product_title'];
$product_color = $row['product_color'];
$product_capacity = $row['product_capacity'];
$product_counts = $row['inventory'];
$product_description = $row['product_description'];
$product_price = $row['product_price'];
$product_image = $row['product_image'];
$hidden=$row['product_hidden'];
$login = false;
$role = 0;
if(isset($_SESSION['user_id'])) {
    $login = true;
    if (isset($_SESSION['admin'])) {
        $role = $_SESSION['admin'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Best Mobile</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/title2.png">
</head>
<body id="home">
  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img src="img/title2.png" width="50" height="50" alt="">
        <h3 class="d-inline align-middle">Best Mobile</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>     
          <li class="nav-item active">
            <a href="phone.php" class="nav-link">Phone</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
            <?php
            if($login){
                echo "<li class=\"nav-item\">
                <a href=\"myMobile.php\" class=\"nav-link\">My-Mobile</a>
            </li>
          <li class=\"nav-item\">
            <a href=\"logout.php\" class=\"nav-link\"><i class=\"fa fa-user-times\" style=\"font-size:24px;\"></i>Logout</a>
          </li>";
            } else {
                echo "<li class=\"nav-item\">
            <a href=\"userRegistration.php\" class=\"nav-link\">Registration</a>
          </li>
          <li class=\"nav-item\">
            <a href=\"userLogin.php\" class=\"nav-link\"><i class=\"fa fa-user\" style=\"font-size:24px;\"></i>Login</a>
          </li>";
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>
    
    <br><br>
  <!--INFOR SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
       <div class="col-md-8">
          <img src="img/<?php echo $product_image?>" class="img-fluid d-none d-md-block" alt="">
        </div>
        <div class="col-md-4 align-self-center">
          <h3><?php echo $product_title ?></h3>
            <br>
            <br>
            <h4>Brand: <?php echo $product_manufacture?></h4>
            <br>
            <h4>Color: <?php echo $product_color?></h4>
            <br>
            <h4>Capacity: <?php echo $product_capacity?> GB</h4>
            <br>
            <h4>Price: $<?php echo $product_price ?></h4>
            <br><br><br>
            <?php
            if($hidden == 0){
                echo '<p>
              <a href="addCart.php?product_id='.$id.'" class="btn btn-warning btn-md mt-2"  role="button">Add to Cart</a>
          </p>
          <h5>'.$product_counts.' in stock</h5>';
            } else {
                echo '<h5>Product is unavailable now!</h5>';
            }
            ?>
            <br>
          <h4>Product Introduction:</h4>
          <p><?php echo $product_description?></p>
        </div>
      </div>
    </div>
  </section>

  
  <br><br><br><br><br><br><br><br><br>

  <!-- MAIN-FOOTER-->
  <footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 m-auto">
          <img src="img/title2.png" width="50" height="50" alt=""><h4 class="d-inline align-middle">Best Mobile</h4>
        </div>
        <div class="col-md-6 m-auto">
          <p class="lead">Copyright &copy; 2018 Best Mobile. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
</body>
</html>
