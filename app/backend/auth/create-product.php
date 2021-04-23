<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

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
      'price' => array(
          'required' => true,
      ),

      'category_id' => array(
          'required' => true,
      ),
    ));

    if ($validate->passed())
    {
        try
        {
          $imageProducts = array();
          if (isset($_FILES['images']))
          {
            $total = count($_FILES['images']['name']);
            for( $i=0 ; $i < $total ; $i++ ) {
              $tmpFilePath = $_FILES['images']['tmp_name'][$i];
              if ($tmpFilePath != ""){
                $rootPath = dirname(dirname(__DIR__)).'/frontend/assets/images/';
                $newFilePath = $rootPath . $_FILES['images']['name'][$i];
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                  $imageProducts[] = '/assets/images/'.$_FILES['images']['name'][$i];
                }
              }
            }
          }
          $products->create(array(
            'name'  => Input::get('name'),
            'description'  => Input::get('description'),
            'category_id'  => Input::get('category_id'),
            'price'  => Input::get('price'),
            'is_available'  => 1,
            'is_active'  => 1,
            'images' => implode(',', $imageProducts)
          ));

          Redirect::to('products.php');
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
