<?php include "includes/db.php"; ?>
<?php session_start();
global $connection;
$query = "select * from products where product_hidden = 0 ";
$filter = $_GET['filter'];
$search = $_GET['search'];
$page = $_GET['page'];
$perPage = 4;
if(!empty($filter)) {
    $query .= "and product_manufacturer like '$filter'";
}
if(!empty($search)){
    $query .= "and (product_manufacturer like '%$search%' or product_title like '%$search%' 
    or product_description like '%$search%' or product_color like '%$search%' or product_capacity like '%$search%')";
}
$result = mysqli_query($connection, $query);
$totalNum = mysqli_num_rows($result);
$totalPage = ceil($totalNum / $perPage);
$start = ($page -1)* $perPage;
$end = $start + $perPage;
$n = 0;
echo '<div class="row">';
while($row = mysqli_fetch_array($result)){
    if($n >= $start && $n<$end) {

        echo '<div class="col-md-3">
          <div class="card text-center">
            <div class="card-header">
              <h3>' . $row['product_title'] . '</h3>
            </div>
            <a href="proDetail.php?product_id='.$row['product_id'].'">
                <div class="card-body">
                <img src="img/' . $row['product_image'] . '" width="150" height="300" alt="phone image">
                <h4 class="card-title">$' . $row['product_price'] . '</h4>
                <p>Color: ' . $row['product_color'] . '</p>
                <p>Capacity: ' . $row['product_capacity'] . 'GB</p>
                </div>
            </a>
            <div class="card-footer text-muted">';
        if(isset($_SESSION['user_id']) && $_SESSION['role'] == 1) {
            echo '<a href="edit.php?product_id=' . $row['product_id'] . '" class="btn btn-secondary btn-md mt-2"  role="button">Edit</a>
              <a href="delete.php?product_id=' . $row['product_id'] . '" class="btn btn-danger btn-md mt-2"  role="button">Delete</a>';
        }
         echo   '</div></div></div>';
    }
    $n++;
}
echo "</div><div class='row'>";
echo '<nav class="m-auto">';
echo   '<ul id="currentPage" class="pagination pagination-lg align-items-md-center">';
if($totalPage > 1) {
    for ($i = 1; $i <= $totalPage; $i++) {
        if($i == $page) {
            echo "<li class='page-item pageIndex active py-5' value='$i'><a class='page-link'>$i</a></li>";
        } else {
            echo "<li class='page-item pageIndex py-5' value='$i'><a class='page-link'>$i</a></li>";
        }
    }
}
echo  '</ul>';
echo '</nav>';
echo '</div>';
