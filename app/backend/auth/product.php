<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$products = new Product();
$product_list = $products->pagination(0, 8);

if (Input::exists('POST'))
{
  if (Input::get('product_id') && Input::get('delete_product') == 1 ) {
    $products->delete(Input::get('product_id'));
  }
}