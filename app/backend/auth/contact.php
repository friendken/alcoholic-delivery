<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/classes/Contact.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$contact = new Contact();
$success = '';

$errors = array();

if (Input::exists('POST'))
  {
    $validate   = new Validation();
    $validation = $validate->check($_POST, array(
      'name' => array(
          'required' => true,
          'min' => 2,
          'max' => 50
      ),
      'email' => array(
        'required' => true,
        'min' => 2,
        'max' => 50
      ),
      'message' => array(
        'required' => true,
      ),
    ));

    if ($validate->passed())
    {
        try
        {
          $contact->create(array(
            'name'  => Input::get('name'),
            'email'  => Input::get('email'),
            'message'  => Input::get('message'),
          ));
          $success = '<div class="alert alert-success"><strong></strong>Your request has been received</div>';
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    else
    {
        $errors = $validate->errors();
    }
  }
