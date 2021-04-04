<?php
$activeMenuMap = array(
  'products.php' => 'products',
  'create-product.php' => 'products',
  'edit-product.php' => 'products',
  'index.php' => 'dashboard',
);
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$activeMenu = '';
if (isset($activeMenuMap[$curPageName]))
{
  $activeMenu = $activeMenuMap[$curPageName];
}
