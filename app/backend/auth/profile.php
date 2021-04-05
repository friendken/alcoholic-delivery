<?php
require_once 'app/backend/core/Init.php';

if (! $user->isLoggedIn())
{
     Redirect::to('index.php');
}

$data = $user->data();


if (Input::exists())
{
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'first_name'  => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 50
                ),
            'last_name'  => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 20
                ),
            ));

        if ($validation->passed())
        {
             try
                {
                    $user->update(array(
                        'first_name'  => Input::get('first_name'),
                        'last_name'  => Input::get('last_name'),
                    ));
                    Session::flash('update-success', 'Profile successfully updated!');
                    $data = $user->data();
                }
             catch(Exception $e)
                {
                    die($e->getMessage());
                }
            }

        else
        {
            echo '<div class="alert alert-danger"><strong></strong>' . cleaner($validation->error()) . '</div>';
        }
}
