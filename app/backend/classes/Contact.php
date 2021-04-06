<?php

class Contact
{
    private $_db,
            $_data;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('contact', $fields))
        {
            throw new Exception("Unable to create the contact.");
        }
    }

    public function list()
    {
        return $this->_db->get('contact')->results();
    }

    public function get($category_id = null)
    {
        if ($category_id)
        {
            $data = $this->_db->get('contact', array('id', '=', $category_id));

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
        if (!$this->_db->delete('contact', array('id', '=', $id)))
        {
            throw new Exception('Unable to delete the contact.');
        }
    }
}
