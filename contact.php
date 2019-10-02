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
          <li class="nav-item active">
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

  <!-- STAFF SECTION -->
  <section id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Our Staff</h1>
      <br>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
        <div class="col-md-3">
          <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
        </div>
      </div>
    </div>
  </section>

  <!-- STAFF -->
  <section id="staff" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              We have the best team!
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Jane Austen</h3>
              <h5 class="text-muted">Sales</h5>
              <h5 class="text-muted">Assistant</h5>
              <br>
              <p>Jane is enthusiastic and brilliant with all her customers. She has more than twenty years experience as a sales assistant.</p><br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Nicole Cabell</h3>
              <h5 class="text-muted">Sales</h5>
              <h5 class="text-muted">Assistant</h5>
              <br>
              <p>Ms. Cabell is always friendly with, greeting, serving and advising our customers on all of our products and events.</p><br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Nicholas Hall</h3>
              <h5 class="text-muted">Customer</h5>
              <h5 class="text-muted">Assistant</h5>
              <br>
              <p>Mr. Hall is the one who keep customers happy, satisfied, shelves stocked, tills manned and displays looking beautiful.</p><br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Bob Allison</h3>
              <h5 class="text-muted">Store</h5>
              <h5 class="text-muted">Manager</h5>
              <br>
              <p>Mr. Allison earned his B.S. in Math from New Mexico State University, his M.A. in Business from the University of Texas.</p><br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->

  <!--CONTACT SECTION-->
  <section id="contact-infor" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
              <h4>Address</h4>
              <p>1 Hacker Way, Menlo Park, CA 94025</p>
              <h4>Email</h4>
              <p>bestMobile@bestMobile.com</p>
              <h4>Phone</h4>
              <p>(543)555-8988</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <img src="img/map.png" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Get In Touch</h3>
          <p class="lead">Leave a message here!</p>
          <form>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" placeholder="Message" rows="5"></textarea>
              </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="img/title2.png" alt="" class="img-fluid d-none d-lg-block">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="p-5 text-white">
    <div class="container">
      <h1 class="text-center">Frequently Asked Questions</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="accordion1">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion1">
                    What is Best-Mobile’s Return and Exchange Policy?
                  </a>
                </h5>
              </div>
              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  <ul>
                    Our Return and exchange policies are based on where your device was purchased.
                    <li>
                      If your phone or device is purchased in a store – Returns or exchanges must be made within 14 days of the purchase or lease date of the original device. You may have to pay a restocking fee. If your device was purchased from an authorized dealer, it must be returned to them.
                    </li>
                    <li>
                      Online or over the phone – Returns or exchanges must be made within 20 calendar days of the date you received your order. If your phone is not returned in time, you may have to pay a restocking fee.
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion1">
                    How fast will I get my order?
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse">
                <div class="card-body">
                  <P>We offer free, overnight shipping on select models of new phones and devices. Otherwise, we will send your purchase using standard 2-4 business days shipping.</P>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion1">
                    Can I trade in my old phone?
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse">
                <div class="card-body">
                  <P>Absolutely. When you purchase any of our new phones, we’ll offer you a great price for your old one. Just tell us the make, model, and condition of your old phone and we’ll give you a quote for your trade-in value. First, get a Trade-in Estimate. If you like the offer, get the Best-Mobile app. We’ll send you a prepaid shipping label for you to send us your old phone along with the receipt from your new one. Within 3 billing cycles, you’ll receive a credit to your account for the amount of the trade?in value.</P>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion2">
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <a href="#collapseFour" data-toggle="collapse" data-parent="#accordion2">
                    How do I activate my new phone when it arrives?
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse">
                <div class="card-body">
                  When your new phone arrives, simply follow the manufacturer’s set-up procedure and begin using your phone. If you purchased a new Best-Mobile SIM card to use in your own device, insert the new card, and you should be good to go.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <a href="#collapseFive" data-toggle="collapse" data-parent="#accordion2">
                    Should I get Device Protection? Can I add it later?
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse">
                <div class="card-body">
                  For your peace of mind, and to protect your device from loss, theft, accidental damage, Device Protection covers mechanical or electrical breakdown, and provides fast delivery of replacement devices. You can also add Device Protection during a “qualifying event”. Typically, this is within 14 days of the purchase (order date) of a Best-Mobile USA branded device from an authorized Best-Mobile channel (Best-Mobile retail stores nationwide, authorized postpaid dealers, Costco, Customer Care, or for existing customers, Best-Mobile.com, and Telesales, 1-800-BEST-MOBILE). Additionally, there are occasional “open enrollment” periods. Qualifying events apply to new customers and existing customers who are upgrading their device.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <a href="#collapseSix" data-toggle="collapse" data-parent="#accordion2">
                    Once I get my new phone, how do I set it up?
                  </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse">
                <div class="card-body">
                  Setting up your new device is easy. Just follow our activation guides to quickly have your device ready to go! Contact Customer Care at 1-877-746-0909 if you have any problems.
                </div>
              </div>
            </div>
          </div>
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

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/main.js"></script> <!-- must come after slick.js-->
</body>
</html>
