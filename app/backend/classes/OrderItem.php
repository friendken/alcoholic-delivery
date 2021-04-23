<?php

class OrderItem
{
    private $_db,
            $_data;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function update($fields = array(), $id = null)
    {
        if (!$this->_db->update('order_item', $id, $fields))
        {
            throw new Exception('Unable to update the order item.');
        }
    }

    public function create($fields = array())
    {
        $order_item = $this->_db->insert('order_item', $fields);
        if (!$order_item)
        {
            throw new Exception("Unable to create the order item.");
        }
        return $order_item;
    }

    public function list()
    {
        return $this->_db->get('order_item')->results();
    }

    public function map()
    {
        $_map = array();
        $results = $this->_db->get('order_item')->results();
        foreach($results as $result) {
            $_map[$result->id] = $result;
        }
        return $_map;
    }

    public function get($id = null)
    {
        if ($id)
        {
            $data = $this->_db->get('order_item', array('id', '=', $id));

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

    public function delete($id)
    {
        if (!$this->_db->delete('order_item', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the order item.');
        }
    }
}
