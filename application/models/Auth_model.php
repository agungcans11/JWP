<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function tampil_data($id_user)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('tb_user');
        $query->row();
    }
}
