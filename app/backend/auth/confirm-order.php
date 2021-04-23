<?php
$path = dirname(dirname(__FILE__));
require_once $path.'/core/Init.php';
require_once $path.'/classes/Order.php';

$order_ref = new Orders();
$order_id = $_GET['id'];

if (!isset($order_id)) Redirect::to('cart.php');

$order = $order_ref->get($order_id);
