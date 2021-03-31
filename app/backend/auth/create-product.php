<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

if (Input::exists('POST'))
  {
    var_dump($_POST);
    // $validate   = new Validation();
  }
