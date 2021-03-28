<?php
require_once 'app/backend/core/Init.php';

if (Input::exists())
    {
        if (Token::check(Input::get('csrf_token')))
        {
            $validate   = new Validation();
            switch (Input::get('authentication_type')) {
                case 'login':
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
                    break;
                case 'register':
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
                        ),
            
                        'last_name' => array(
                            'required' => true,
                            'min' => 2,
                            'max' => 20,
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
                            $user->login(Input::get('email'), Input::get('password'), false);
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
                    break;
            }
        }
    }
