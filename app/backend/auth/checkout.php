<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
$path = dirname(dirname(__FILE__));
require_once $path.'/classes/Order.php';
require_once $path.'/classes/OrderItem.php';

$products = new Product();
$order_ref = new Orders();
$order_item_ref = new OrderItem();
$userLogged = $user->data();
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

if (Input::exists()) {
  $validate   = new Validation();
  $validation = $validate->check($_POST, array(
    'email'  => array(
      'required'  => true,
    ),
    'first_name'  => array(
      'required'  => true
    ),
    'last_name'  => array(
      'required'  => true
    ),
    'address'  => array(
      'required'  => true
    ),
    'city'  => array(
      'required'  => true
    ),
    'country'  => array(
      'required'  => true
    ),
    'phone'  => array(
      'required'  => true
    ),
  ));

  if ($validate->passed())
  {
      try
      {
        $prepare_data = array(
          'email'  => Input::get('email'),
          'first_name'  => Input::get('first_name'),
          'last_name'  => Input::get('last_name'),
          'address'  => Input::get('address'),
          'city'  => Input::get('city'),
          'country'  => Input::get('country'),
          'phone'  => Input::get('phone'),
          'total' => $subtotal,
        );

        if ($user->isLoggedIn()) {
          $prepare_data['user_id'] = $user->data()->id;
        }

        $order_id = $order_ref->create($prepare_data);

        foreach($fetched_products_in_cart as $product) {
          $order_item_ref->create(array(
            'order_id'  => $order_id,
            'product_id'  => $product->id,
            'quantity'  => $products_in_cart[$product->id],
          ));
        }
        $_SESSION['cart'] = array(); // clear the cart session
        Redirect::to('confirm-order.php?id='.$order_id);
      }
      catch(Exception $e)
      {
          die($e->getMessage());
      }
  }
  else
  {
      foreach ($validate->errors() as $error)
      {
          echo '<div class="alert alert-danger"><strong></strong>' . cleaner($error) . '</div>';
      }
  }
}