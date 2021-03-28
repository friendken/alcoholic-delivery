<?php

class Product
{
    private $_db,
            $_user,
            $_data;

    public function __construct($user = null)
    {
        $this->_db = Database::getInstance();
        $this->_user = $user;
    }

    public function update($fields = array(), $id = null)
    {

        if (!$id && $this->_user->hasPermission())
        {
            throw new Exception('Permission is required to update the product.');
        }

        if (!$this->_db->update('product', $id, $fields))
        {
            throw new Exception('Unable to update the product.');
        }
    }

    public function create($fields = array())
    {
        if (!$id && $this->_user->hasPermission())
        {
          throw new Exception("Permission is required to create the product.");
        }

        if (!$this->_db->insert('product', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function find()
    {
        return $this->_db->get('product');
    }

    public function get($product_id = null)
    {
        if ($product_id)
        {
            $data = $this->_db->get('product', array('id', '=', $product_id));

            if ($data->count())
            {
                return $data->first();
            }
        }
    }

    public function data()
    {
        return $this->_data;
    }


    public function delete()
    {
        if (!$id && $this->_user->hasPermission())
        {
          throw new Exception("Permission is required to delete the product.");
        }
        if (!$this->_db->delete('product', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the product.');
        }
    }
}
