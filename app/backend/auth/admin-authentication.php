<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';

$user = new User();

if (!$user->isLoggedIn() || !$user->isAdmin()) {
  Redirect::to('login.php');
}