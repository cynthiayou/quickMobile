<?php include "includes/db.php" ?>
<?php //include "admin/functions.php" ?>
<?php
session_start();
$login = false;
$role = 0;
if(isset($_SESSION['user_id'])){
    $login = true;
    if(isset($_SESSION['admin'])){
        $role =  $_SESSION['admin'];
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

  <!-- PHONE-HEADER-->
  <header>
    <div class="container" id="phone-header">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <br>
          <h1>Phones</h1>
          <p>Check different phones online and a perfect plan in store!</p>
        </div>
      </div>
    </div>
  </header>
  
  <!-- SEARCH -->
  <section id="action" class="py-4 mb-4 bg-light">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class = "input-group">
                          <select class="form-control" id="filter">
                              <option value=""></option>
                              <option value="apple">Apple</option>
                              <option value="samsung">Samsung</option>
                              <option value="google">Google</option>
                          </select>
                  <div class="input-group-append">
                      <button class="btn btn-warning btn-block" id="btn-login" type="button">Choose Brand</button>
                  </div>
              </div>
              </div>

              <div class="col-md-4 ml-auto">
                      <div class="input-group">
                          <input type="text" id = "productSearch" class="form-control" placeholder="Search">

                  <div class="input-group-append">
                      <button class="btn btn-warning btn-block" id="search">Search</button>
                  </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <?php
          if(isset($_SESSION['user_id']) && $_SESSION['role'] == 1) {
              echo '<div class="col-md-2"><a href="addProduct.php" class="btn btn-warning btn-block"  role="button">Add</a></div>';
          }
          ?>
          </div>
      </div>
  </section>
  
  <!-- MANUFACTURE & ADD -->
  <section id="manufacture">     
    <div class="container">
     <div class="row mb-4">
     
      <div class="col-sm-6"></div>

    </div>
      </div>
  </section>

  <!--PHONE SECTION-->
  <section id="phone" class="py-5">
      <a id="phonestart"></a>
    <div class="container-fluid" id="allPhone">
    </div>
  </section>

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

  <script src="js/ekko-lightbox.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/main.js"></script> <!-- must come after slick.js-->
  <script src="js/allPhone.js"></script>
</body>
</html>
