<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';

$products = new Product();

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$fetched_products_in_cart = array();
$subtotal = 0.00;

if ($products_in_cart) {
  $fetched_products_in_cart = $products->getProductByIds($products_in_cart);
  // Calculate the subtotal
  foreach ($fetched_products_in_cart as $product) {
      $subtotal += (float)$product->price * (int)$products_in_cart[$product->id];
  }
}