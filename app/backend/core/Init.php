<?php
@session_start();
$path = dirname(dirname(__FILE__));

require_once $path.'/auth/config.php';
require_once 'Helpers.php';

spl_autoload_register("autoload");

require_once $path.'/core/Config.php';
require_once $path.'/core/Session.php';
require_once $path.'/core/Cookie.php';
require_once $path.'/core/Database.php';
require_once $path.'/classes/User.php';
require_once $path.'/classes/Product.php';
require_once $path.'/classes/Category.php';
require_once $path.'/auth/user.php';
require_once $path.'/auth/product.php';
require_once $path.'/auth/category.php';
