<?php include "includes/db.php" ?>
<?php //include "admin/functions.php" ?>
<?php
session_start();
$login = false;
$role = 0;
if(isset($_SESSION['user_id'])) {
    $login = true;
    if (isset($_SESSION['role'])) {
        $role = $_SESSION['role'];
    }
} else {
    header("Location:userLogin.php");
}
if($role == 0){
    header("Location:phone.php");
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

<!-- EDIT -->
<br>
<section id="registration">
    <div class="container">
        <div class="row">
            <!-- login -->
            <div class="col-md-6 mx-auto">
                <div class="card h-110">
                    <div class="card-header">
                        <h4>Add a New Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="productEdit.php" id="login-form" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="manufacture">Manufacture</label>
                                <input type="text" name="manufacture" id="manufacture" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" id="color" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="capacity">Capacity</label>
                                <input type="text" name="capacity" id="capacity" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inventory">Inventory</label>
                                <input type="text" name="inventory" id="inventory" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                            </div>
                            <br>
                            <input type="submit" name="submit" id="btn-login" class="btn btn-success btn-block" value="Submit">
                        </form>
                    </div>
                </div>
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
