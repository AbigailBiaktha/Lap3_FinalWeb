<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="./assets/js/materialize.min.js" defer></script>
  <script type="text/javascript" src="./../assets/js/pagination.js"></script>
  <link rel="stylesheet" href="./assets/css/base.css">

</head>

<?php
require_once "./includes/class_autoloader.php";
session_start();

if (isset($_SESSION["Member"])) {
  $member = $_SESSION["Member"];
  $member = Member::CreateMemberFromID($member->getMemberID());
  $_SESSION["Member"] = $member;
  $memberID = $member->getMemberID();
  $username = $member->getUsername();
  $email = $member->getEmail();
  $privilegeLevel = $member->getPrivilegeLevel();
  $cart = $member->getCart();
  $orderItemCount = count($cart->getOrderItems());
  $orders = $member->getOrders();
}

?>
<div class="nav-wrapper" style="height: 100px">
  <nav style="height: 100px;">
    <div class="nav-wrapper black" style="box-shadow: 0px 0px 2px white;">
      <a href="home.php">
        <div class="brand-logo" style="font-size: 24px; padding-left: 20px;">FitnessHub</div>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <?php
        if (isset($_SESSION["Member"])) { ?>
        <?php if ($privilegeLevel == 1)
            echo ("<li><a class='admin admin_manage_users admin_view_orders' href='admin.php' target='_blank'>Admin Panel</a></li>");
          echo ("
            <li>
              <a class='cart' href='cart.php?member_id=$memberID'>
                Cart<span class='new badge unglow' id='cart_badge'>$orderItemCount</span></a>
            </li>
            <li><a href='includes/logout.inc.php'>Logout</a></li>
            ");
        } else {
          echo ("
              <li><a class='login' href='login.php'>Login</a></li>
              <li><a class='signup' href='signup.php'>Sign Up</a></li>
            ");
        }
        ?>
      </ul>
    </div>
  </nav>
</div>

<script>
  // underline current page
  var path = window.location.pathname;
  var page = path.split("/").pop().split(".")[0];

  var links = document.getElementsByClassName(page);
  if (links[0] != null) links[0].classList.add("page_underline");

  // style search bar
  var style = document.getElementById("search-bar");
  style.classList.add("search");
</script>

</html>