<?php 
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

$num_items_in_cart = count($products_in_cart);