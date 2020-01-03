<?php
/* [INIT - GET PRODUCTS] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-db.php";
require PATH_LIB . "3a-lib-products.php";
$pdtLib = new Products();
$products = $pdtLib->get();

/* [HTML] */ ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cart
    </title>
    <link rel="stylesheet" href="public/3c-theme.css">
    <script src="public/4a-cart.js"></script>
  </head>
  <body>
    <header id="page-header">
      <div id="page-cart-icon" onclick="cart.toggle();">
        &#128722; <span id="page-cart-count">0</span>
      </div>
    </header>

    <!-- [PRODUCTS] -->	
    <div id="page-products"><?php
      if (is_array($products)) {
        foreach ($products as $id => $row) { ?>
          <div class="pdt">
            <img class="pdt-img" src="photos/<?= $row['product_image'] ?>"/>
            <h3 class="pdt-name"><?= $row['product_name'] ?></h3>
            <div class="pdt-price">Rs. <?= $row['product_price'] ?></div>
            <div class="pdt-desc"><?= $row['product_description'] ?></div>
            <input class="pdt-add" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php }
      } else {
        echo "No products found.";
      }
      ?></div>

    <!-- [CART] -->
    <div id="page-cart" class="ninja"></div>
  </body>
</html>