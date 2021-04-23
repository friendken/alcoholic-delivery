<?php

class Orders
{
    private $_db,
            $_data;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function update($fields = array(), $id = null)
    {
        if (!$this->_db->update('orders', $id, $fields))
        {
            throw new Exception('Unable to update the order.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('orders', $fields))
        {
            throw new Exception("Unable to create the order.");
        }
        return $this->_db->getLastInsertId();
    }

    public function list()
    {
        return $this->_db->get('orders')->results();
    }

    public function map()
    {
        $_map = array();
        $results = $this->_db->get('orders')->results();
        foreach($results as $result) {
            $_map[$result->id] = $result;
        }
        return $_map;
    }

    public function get($id = null)
    {
        if ($id)
        {
            $data = $this->_db->get('orders', array('id', '=', $id));

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
        if (!$this->_db->delete('orders', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the order.');
        }
    }
}
