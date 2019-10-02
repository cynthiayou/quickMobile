<?php include "includes/db.php"; ?>
<?php include  "includes/functions.php";?>
<?php
session_start();
$login = false;
if(isset($_SESSION['user_id'])){
    $login = true;
    header("Location:myMobile.php");
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
          <li class="nav-item">
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
          <li class=\"nav-item active\">
            <a href=\"userLogin.php\" class=\"nav-link\"><i class=\"fa fa-user\" style=\"font-size:24px;\"></i>Login</a>
          </li>";
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Registration -->
  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i>Login</h1>
        </div>
      </div>
    </div>
  </header>
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
      </div>
   </div>
  </section>
  
  <section id="registration">
    <div class="container">
      <div class="row">
        <!-- login -->
        <div class="col-md-6 mx-auto">
          <div class="card h-100">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <br>
            <div class="card-body">
              <form action="login.php" id="login-form" role="form" method="post">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username">
                </div>
                <br>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <br>
                  <?php
                  if(isset($_COOKIE['f'])&&$_COOKIE['f'] == 1){
                      echo "<p>Username or password is not correct! Please try again.</p>";
                      setcookie('f', '0');
                  }
                  ?>
                <input type="submit" name="login" id="btn-login" class="btn btn-success btn-block" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br><br><br>


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
</body>
</html>
