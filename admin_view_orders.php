<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Hub</title>
</head>
<?php
include "./template/header.php";
include "./template/side_nav.html";
include "./template/admin_nav.php";
?>

<body>
  <!-- manage users -->
  <div class="container" style="margin-top: 150px">
    <h3 class="page-title white-text">View Customers Cart/Orders </h3>
    <div class="row" style="padding-bottom: 10px;">
      <div class="rounded-card-parent">
        <div class="card rounded-card">
          <div class="card-content white-text">
            <span class="orange-text center" style="font-size: 24px">
              Customers Orders List - Sorted by latest
              <small style="font-size: 20px; margin-top: 10px">(Autosync table)</small>
            </span>
            <div class="grid" style="margin-right: 300px">
              <div class="grid" style="margin-right: 150px">
                <h6 class="blue-text bold center">Username</h6>
              </div>
              <div class="grid" style="margin-right: 150px">
                <h6 class="blue-text bold center">Email</h6>
              </div>
              <div class="grid" style="margin-right: 150px">
                <h6 class="blue-text bold center">OrderID</h6>
              </div>
              <div class="grid" style="margin-right: 150px">
                <h6 class="blue-text bold center">Payment Date</h6>
              </div>
            </div>
            <table class='responsive-table' style='table-layout: fixed; width: 100%;' id='pagination'>
              <tbody>
                <?php
                $admin = new adminContr();
                $admin->showSearchMember();
                ?>
              </tbody>
            </table>

            <div class='col-md-12 center text-center'>
              <span class='left' id='total_reg'></span>
              <ul class='pagination pager' id='myPager'></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- view cart/order details selected by admin -->
    <?php if (isset($_GET["view_order"])) { ?>
      <div class="rounded-card-parent">
        <div class="card rounded-card">
          <div class="card-content">
            <span class="card-title cyan-text bold">
              Cart/Order Details
              <?php echo ("[" . $_GET["username"] . "]"); ?>
            </span>
            <?php
            // View Selected Customer Cart/Orders 
            if (isset($_GET["view_order"])) {
              $uid = $_GET["view_order"];
              include_once "./logic/cart_items.php";
              include_once "./logic/order_items.php";
            }
            ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

<script type="text/javascript">
  window.onload = function() {
    var elems = document.querySelectorAll("input[type=range]");
    M.Range.init(elems);
  };
</script>


</html>