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
        if (!$this->_db->update('product', $id, $fields))
        {
            throw new Exception('Unable to update the product.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('product', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function list()
    {
        return $this->_db->get('product')->results();
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
        if (!$this->_db->delete('product', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the product.');
        }
    }
}
