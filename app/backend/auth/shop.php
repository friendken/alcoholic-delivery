<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$products = new Product();
$page = $_GET['page'];

if (!isset($page)) Redirect::to('shop.php?page=1');
$page_limit = 6;
$product_list = $products->pagination(($page - 1) * $page_limit, $page_limit);

$pagination = round(count($products->list()) / $page_limit);

if (count($products->list()) % $page_limit != 0) {
  $pagination += 1;
}

$pagination_array = array();

for ($i = 0; $i < $pagination; $i++) {
  array_push($pagination_array, $i + 1);
}
