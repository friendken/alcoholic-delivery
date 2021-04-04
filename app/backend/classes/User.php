<?php

class User
{
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $_isLoggedIn;

    public function __construct($user = null)
    {
        $this->_db = Database::getInstance();

        $this->_sessionName = Config::get('session/session_name');

        $this->_cookieName  = Config::get('remember/cookie_name');

        if (! $user)
        {
            if (Session::exists($this->_sessionName))
            {
                $user = Session::get($this->_sessionName);
                // var_dump($user); die('here');

                if ($this->get($user))
                {
                    $this->_isLoggedIn = true;
                }
            }

        }
        else
        {
            $this->get($user);
        }
    }

    public function find($user = null)
    {
        if ($user)
        {
            $data = $this->_db->get('user', array('email', '=', $user));
            // var_dump($data->results()); die;
            if ($data->count())
            {
                $this->_data = $data->first();
                return true;
            }
        }
    }

    public function update($fields = array(), $id = null)
    {
        if (!$id && $this->isLoggedIn())
        {
            $id = $this->data()->id;
        }

        if (!$this->_db->update('user', $id, $fields))
        {
            throw new Exception('Unable to update the user.');
        }
    }

    public function create($fields = array())
    {   
        if (!$this->_db->insert('user', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function get($user = null)
    {
        if ($user)
        {
            $data = $this->_db->get('user', array('id', '=', $user));

            if ($data->count())
            {
                $this->_data = $data->first();
                return true;
            }
        }
    }

    public function list()
    {
        return $this->_db->get('user')->results();
    }

    public function login($email = null, $password = null, $remember = false)
    {
        if (! $email && ! $password && $this->exists())
        {
            Session::put($this->_sessionName, $this->data()->id);
        }
        else
        {
            // die($email);
            $user = $this->find($email);
            if ($user)
            {
                // var_dump($user); die('here');
                if (Password::check($password, $this->data()->password))
                {
                    Session::put($this->_sessionName, $this->data()->id);

                    if ($remember)
                    {
                        $hash       = Hash::unique();
                        $hashCheck  = $this->_db->get('user_session', array('user_id', '=', $this->data()->id));

                        if (!$hashCheck->count())
                        {
                            $this->_db->insert('user_session', array(
                                'user_id'   => $this->data()->id,
                                'hash'      => $hash
                            ));
                        }
                        else
                        {
                            $hash = $hashCheck->first()->hash;
                        }

                        Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                    }

                    return true;
                }
            }
        }

        return false;
    }

    public function hasPermission($key)
    {
        $group = $this->_db->get('groups', array('gid', '=', $this->data()->groups));

        if  ($group->count())
        {
            $permissions = json_decode($group->first()->permissions, true);

            if ($permissions[$key] == true)
            {
                return true;
            }
        }

        return false;
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout()
    {
        $this->_db->delete('user_session', array('user_id', '=', $this->data()->id));

        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
    }

    public function data()
    {
        return $this->_data;
    }

    public function isLoggedIn()
    {
        return $this->_isLoggedIn;
    }

    public function isAdmin()
    {
        return $this->_data->role == 2;
    }

    public function deleteMe()
    {
        if ($this->isLoggedIn())
        {
            $id = $this->data()->id;
        }

        if (!$this->_db->delete('user', array('id', '=', $id)))
        {
            throw new Exception('Unable to update the user.');
        }
    }
}
