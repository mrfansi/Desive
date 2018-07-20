<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bahan extends CI_Model
{
    private $_table = 'tbl_bahan';

    public function all()
    {
        return $this->db->get($this->_table);
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function update($data)
    {
        return $this->db->replace($this->_table, $data);
    }

    public function get($id)
    {
        return $this->db->get_where($this->_table, array('id_bahan' => $id))->row();
    }

    public function delete($id)
    {
        return $this->db->where('id_bahan', $id)->delete($this->_table);
    }

}