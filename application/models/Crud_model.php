<?php

class Crud_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function listData($table)
    {
        $query = $this->db->get($table);
        return $query;
    }

    public function addData($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function delData($table, $flag)
    {
        $this->db->where($flag);
        $query = $this->db->delete($table);
        return $query;
    }

    public function getData($table, $flag, $sort = NULL)
    {
        $this->db->where($flag);
        if ($sort != NULL) {
            # code...
            // print_r($sort);die();
            $this->db->order_by($sort[0], $sort[1]);
        }
        return $this->db->get($table);
    }

    public function editData($table, $data, $flag)
    {
        $this->db->where($flag);
        return $this->db->update($table, $data);
    }
}
