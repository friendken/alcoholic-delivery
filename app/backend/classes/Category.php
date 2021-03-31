<?php

class Category
{
    private $_db,
            $_data;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function update($fields = array(), $id = null)
    {
        if (!$this->_db->update('category', $id, $fields))
        {
            throw new Exception('Unable to update the category.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('category', $fields))
        {
            throw new Exception("Unable to create the category.");
        }
    }

    public function list()
    {
        return $this->_db->get('category')->results();
    }

    public function get($category_id = null)
    {
        if ($category_id)
        {
            $data = $this->_db->get('category', array('id', '=', $category_id));

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
        if (!$this->_db->delete('category', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the category.');
        }
    }
}
