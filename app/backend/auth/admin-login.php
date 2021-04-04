<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$user = new User();

if ($user->isLoggedIn() && $user->isAdmin()) {
  Redirect::to('index.php');
}

if (Input::exists())
    {
      $validate   = new Validation();
      $validation = $validate->check($_POST, array(
        'email'  => array(
            'required'  => true,
            ),

        'password'  => array(
            'required'  => true
            ),
      ));

      if ($validation->passed())
      {
          $remember   = (Input::get('remember') === 'on') ? true : false;
          $login      = $user->login(Input::get('email'), Input::get('password'), $remember);

          if ($login)
          {
              Redirect::to('index.php');
          }
          else
          {
              echo '<div class="alert alert-danger"><strong></strong>Incorrect Credentials! Please try again...</div>';
          }
      }
      else
      {
          foreach ($validation->errors() as $error)
          {
              echo '<div class="alert alert-danger"><strong></strong>' . cleaner($error) . '</div>';
          }
      }
    }
