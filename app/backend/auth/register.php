<?php
require_once 'app/backend/core/Init.php';

if(Input::exists())
{
    if(Token::check(Input::get('csrf_token')) )
    {
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'email' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),

            'first_name' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),

            'last_name' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),

            'password' => array(
                'required' => true,
                'min' => 6
            ),

            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            )
        ));

        if ($validate->passed())
        {
            try
            {
                $user->create(array(
                    'email'  => Input::get('email'),
                    'first_name'  => Input::get('first_name'),
                    'last_name'  => Input::get('last_name'),
                    'password'  => Password::hash(Input::get('password')),
                    'role' => 1
                    ));

                Session::flash('register-success', 'Thanks for registering! You can login now.');
                Redirect::to('index.php');
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
}
