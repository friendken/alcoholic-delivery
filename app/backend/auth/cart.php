<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';

$products = new Product();

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
  // Set the post variables so we easily identify them, also make sure they are integer
  $product_id = (int)$_POST['product_id'];
  $quantity = (int)$_POST['quantity'];

  $product = $products->get($product_id);
  // Check if the product exists (array is not empty)
  if ($product && $quantity > 0) {
      // Product exists in database, now we can create/update the session variable for the cart
      if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
          if (array_key_exists($product_id, $_SESSION['cart'])) {
              // Product exists in cart so just update the quanity
              $_SESSION['cart'][$product_id] += $quantity;
          } else {
              // Product is not in cart so add it
              $_SESSION['cart'][$product_id] = $quantity;
          }
      } else {
          // There are no products in cart, this will add the first product to cart
          $_SESSION['cart'] = array($product_id => $quantity);
      }
  }
  // Prevent form resubmission...
  header('location: cart.php');
  exit;
}