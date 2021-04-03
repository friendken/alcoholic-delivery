<?php
require_once dirname(dirname(__FILE__)).'/core/Init.php';
require_once dirname(dirname(__FILE__)).'/core/Input.php';

$products = new Product();
$product_id = $_GET['id'];
$product = $products->get($_GET['id']);

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
          $uploadImages = '';
          if (isset($_FILES['images']) && $_POST['images'])
          {
            $imageProducts = array();
            $total = count($_FILES['images']['name']);
            for( $i=0 ; $i < $total ; $i++ ) {
              $tmpFilePath = $_FILES['images']['tmp_name'][$i];
              if ($tmpFilePath != ""){
                $rootPath = '/assets/images/';
                $newFilePath = $rootPath . $_FILES['images']['name'][$i];
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                  $imageProducts[] = $newFilePath;
                }
              }
            }
            $uploadImages = implode(',', $imageProducts);
          } else {
            $uploadImages = Input::get('current_images');
          }

          $products->update($product_id, array(
            'name'  => Input::get('name'),
            'description'  => Input::get('description'),
            'category_id'  => Input::get('category_id'),
            'price'  => Input::get('price'),
            'is_available'  => Input::get('is_available') ? 1 : 0,
            'is_active'  => Input::get('is_active') ? 1 : 0,
            'images' => $uploadImages
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