<?php include "includes/db.php" ?>
<?php //include "admin/functions.php" ?>
<?php
  session_start();
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
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img src="img/title2.png" width="50" height="50" alt="">
        <h3 class="d-inline align-middle">Best Mobile</h3>
        <!-- <img src="img/title2.png" width="50" height="50" alt="" class="d-inline-block align-top">
        Best Mobile -->
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
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
            <a href=\"logout.php\" class=\"nav-link\"><i class=\"fa fa-user-times\" style=\"font-size:24px;\"></i> Logout</a>
          </li>";
            } else {
                echo "<li class=\"nav-item\">
            <a href=\"userRegistration.php\" class=\"nav-link\">Registration</a>
          </li>
          <li class=\"nav-item\">
            <a href=\"userLogin.php\" class=\"nav-link\"><i class=\"fa fa-user\" style=\"font-size:24px;\"></i> Login</a>
          </li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE SLIDER-->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Galaxy S9 and S9+</h1>
              <p class="lead">The revolutionary design of the Galaxy S9 and S9+ begins from the inside out. It's the biggest, most immersive screen on a Galaxy smartphone of this size. And it's easy to hold in one hand.</p>
              <a href="userRegistration.php" class="btn btn-primary btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3 dark">iphone 8 Plus</h1>
              <p class="lead">The most durable glass ever in a smartphone, front and back. A color‑matched, aerospace‑grade aluminum band. New space gray, silver, and gold finishes.</p>
              <a href="userRegistration.php" class="btn btn-primary btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">iphone X</h1>
              <p class="lead">Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience.</p>
              <a href="userRegistration.php" class="btn btn-primary btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!--INFOR SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 align-self-center">
          <h3>About Best-Mobile US, Inc.</h3>
          <p>As America's Un-carrier, Best-Mobile US, Inc. (NASDAQ: TMUS) is redefining the way consumers and businesses buy wireless services through leading product and service innovation. Our advanced nationwide 4G LTE network delivers outstanding wireless experiences to 72.6 million customers who are unwilling to compromise on quality and value.</p>
          <div class="d-flex fex-row">
            <div class="p-2 align-self-start">
              <i class="fa fa-check"></i>
            </div>
            <div class="p-4 align-self-end">
              Coverage: Best-Mobile USA is a national provider of wireless voice, messaging, and data services capable of reaching over 322 million people where they live, work, and play.
            </div>
          </div>

          <div class="d-flex fex-row">
            <div class="p-2 align-self-start">
              <i class="fa fa-check"></i>
            </div>
            <div class="p-4 align-self-end">
              Number of Employees: Approximately 51,000 at the end of 2017.
            </div>
          </div>

          <div class="d-flex fex-row">
            <div class="p-2 align-self-start">
              <i class="fa fa-check"></i>
            </div>
            <div class="p-4 align-self-end">
              Customers: 72.6 million.
            </div>
          </div>

          <p>Based in Bellevue, Washington, Best-Mobile US provides services through its subsidiaries and operates its flagship brands, Best-Mobile and MetroPCS.</p>
        </div>
        <div class="col-md-4">
          <img src="img/ss1.jpg" class="img-fluid d-none d-md-block" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO PLAY SECTION -->
  <section id="video-play">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a
              href="#"
              class="video"
              data-video="https://www.youtube.com/embed/IWzQ6sCtTUQ"
              data-toggle="modal"
              data-target="#videoModal"
            >
              <i class="fa fa-play"></i>
            </a>
            <h1>See What We Do</h1>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ICON BOXES-->
  <section id="icon-boxes" class="p-3">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card bg-secondary text-center">
            <div class="card-body">
              <i class="fa fa-search"></i>
              <br><br>
              <h3>Discovery</h3>
              <br>
              <p>Discover our new products. We sell iphone, Samsung, and Google phone</p>
            </div>
            <div class="card-footer">
              <a href="phone.php" class="btn btn-outline-success btn-lg bottom-align-btn">Discovery New Phones</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-secondary text-center">
            <div class="card-body">
              <i class="fa fa-shopping-cart"></i>
              <br><br>
              <h3>Buy</h3>
              <br>
              <p>Buy your new phone from Best Mobile. We have high-quality products and services.</p>
            </div>
            <div class="card-footer">
              <a href="phone.php" class="btn btn-outline-success btn-lg bottom-align-btn">Buy New Phone Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card bg-secondary text-center">
            <div class="card-body">
              <i class="fa fa-refresh"></i>
              <br><br>
              <h3>Return</h3>
              <br>
              <p>Easy buy, easy return. We make the convenient return policy for you.</p>
            </div>
            <div class="card-footer">
              <a href="contact.php#faq" class="btn btn-outline-success btn-lg bottom-align-btn">Check Return Policy</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-secondary text-center">
            <div class="card-body">
              <i class="fa fa-truck"></i>
              <br><br>
              <h3>Shipping</h3>
              <br>
              <p>For most area, shipping will take 2 to 3 days.</p>
            </div>
            <div class="card-footer">
              <a href="contact.php#faq" class="btn btn-outline-success btn-lg bottom-align-btn">Check Shipping Policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AWARD -->
  <section id="award-heading" class="p-5">
      <div class="dark-overlay">
        <div class="row">
          <div class="col">
            <div class="container pt-5">
              <h1>Best Group for Best Services</h1>
              <p class="d-none d-md-block">We achieve the best result with most advanced Hi-Tech equipments and technology!</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- AWARD GALLERY-->
  <section id="award" class="py-5">
    <div class="container">
      <h1 class="text-center">Award Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="img/award1.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award1.jpg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="img/award2.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award2.jpg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="img/award3.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award3.jpg" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <a href="img/award4.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award4.jpg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="img/award5.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award5.jpg" class="img-fluid">
          </a>
        </div>
        <div class="col-md-4">
          <a href="img/award6.jpg"
            data-toggle="lightbox" data-gallery="img-gallery">
              <img src="img/award6.jpg" class="img-fluid">
          </a>
        </div>
      </div>

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

  <!-- VIDEO MODAL-->
  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
          <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
</body>
</html>
