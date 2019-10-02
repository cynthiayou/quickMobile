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
} else {
    header("Location:userLogin.php");
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
<body id="home" >
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
          <li class="nav-item">
            <a href="phone.php" class="nav-link">Phone</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
            <?php
            if($login){
                echo "<li class=\"nav-item active\">
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
  
  <!-- CATEGORIES-->
  <br>

  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h4>Check All Your Order Here!</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>Order ID</th>
                  <th>Order Time</th>
                    <th>Total Cost</th>
                </tr>
              </thead>
              <tbody>
              <?php
              global $connection;
              $user_id = $_SESSION['user_id'];
              $query = "select * from history where user_id = '$user_id' order by order_id DESC";
              $result = mysqli_query($connection,$query);
              $n = 16;
              while($row = mysqli_fetch_array($result)){
                  $order_id = $row['order_id'];
                  $date = $row['order_date'];
                  $cost = $row['total_price'];
                  echo '<tr>';
                  echo '<td><a href="orderDetail.php?order_id='.$order_id.'">#'.$order_id.'</a></td>';
                  echo '<td>'.$date.'</td>';
                  echo '<td>'.$cost.'</td>';
                  echo '<tr>';
                  $n--;
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
for($i = 0; $i<$n;$i++){
    echo "<br>";
              }
?>
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
