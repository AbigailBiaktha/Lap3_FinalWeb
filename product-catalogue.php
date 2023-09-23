<!DOCTYPE html>
<html lang="en">

<body>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Hub</title>
    <?php
    require_once "./template/header.php";
    require_once "./includes/product_catalogue.inc.php";
    ?>
  </head>

  <main>
    <div class="row" style="padding-top: 15px;">
      <div class="col s2 center">

        <div id="rgb_hover" style="position: fixed;">
          <form id="form-filter" action="" method="GET">
            <input type="hidden" name="query" value="<?php if (isset($_GET["query"]))
                                                        echo ($_GET["query"]); ?>">

            <div class="section" style="margin-bottom: 100px;">
              <div class="col unglow">
                <ul id="filter_dropdown" class="dropdown-content black">
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Clear</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Mat</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Gym Clothes</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Equipment</a></li>
                </ul>
                <a class="btn dropdown-trigger cyan" data-target="filter_dropdown" style="margin-top: 5px;">
                  <?php
                  $category = -1;
                  if (isset($_GET["category"])) $category = $_GET["category"];

                  if ($category != -1) echo (CATEGORY_NAMES[$category]);
                  else echo ("Select Category");
                  echo ("<input type='hidden' name='category' value=$category>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>

            <div class="section" style="margin-bottom: 100px">
              <div class="col unglow">
                <ul id="sort_dropdown" class="dropdown-content black">
                  <li><a class="page-title" onclick="select_sort(this)">Clear</a></li>
                  <li><a class="page-title" onclick="select_sort(this)">Price low to high</a></li>
                  <li><a class="page-title" onclick="select_sort(this)">Price high to low</a></li>
                </ul>
                <a class="btn dropdown-trigger" data-target="sort_dropdown" style="margin-top: 5px;">
                  <?php
                  $sort = -1;
                  if (isset($_GET["sort"])) $sort = $_GET["sort"];
                  if ($sort != -1) echo (SORT_NAMES[$sort]);
                  else echo ("Select Sort Type");
                  echo ("<input type='hidden' name='sort' value=$sort>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>

            <div class="section">
              <div class="col unglow">
                <ul id="choose_dropdown" class="dropdown-content black">
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Clear</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Nike</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Adidas</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Puma</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Under Armour</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Reebok</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">New Balance</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Fila</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Converse</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Vans</a></li>

                </ul>
                <a class="btn dropdown-trigger cyan" data-target="choose_dropdown" style="margin-top: 5px;">
                  <?php
                  $brand = -1;
                  if (isset($_GET["brand"])) $brand = $_GET["brand"];

                  if ($brand != -1) echo (BRAND_NAMES[$brand]);
                  else echo ("Select Brand");
                  echo ("<input type='hidden' name='brand' value=$brand>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col s9" style="margin-bottom: 80px">
        <!-- item list start -->
        <?php
        searchItems($category, $brand, $sort);
        ?>
      </div>
    </div>
  </main>
</body>

<script>
  $(document).ready(function() {
    $('.dropdown-trigger').dropdown();
    // Other initialization code here
  });


  $(document).ready(() => {
    form = document.getElementById("form-filter");
    category = document.getElementsByName("category")[0];
    brand = document.getElementsByName("brand")[0];
    sort = document.getElementsByName("sort")[0];
  });

  // dropdown
  var categoryBy = {
    "Clear": -1,
    "Mat": 0,
    "Gym Clothes": 1,
    "Equipment": 2
  };
  var brandBy = {
    "Clear": -1,
    "Nike": 0,
    "Adidas": 1,
    "Puma": 2,
    "Under Armour": 3,
    "Reebok": 4,
    "New Balance": 5,
    "Fila": 6,
    "Converse": 7,
    "Vans": 8
  };



  var sortBy = {
    "Clear": -1,
    "Price low to high": 0,
    "Price high to low": 1
  };

  function select_category(selectedItem) {
    // get current onclick event index
    var categoryID = categoryBy[selectedItem.textContent];
    // assign current mapped index and output to url with GET method to handle form
    category.value = categoryID;
    form.submit();
  }

  function select_brand(selectedBrand) {
    // get current onclick event index
    var brandID = brandBy[selectedBrand.textContent];
    // assign current mapped index and output to url with GET method to handle form
    brand.value = brandID;
    form.submit();
  }

  function select_sort(selectedSort) {
    // get current onclick event index
    var sortID = sortBy[selectedSort.textContent];
    // assign current mapped index and output to url with GET method to handle form
    sort.value = sortID;
    form.submit();
  }
</script>

</html>