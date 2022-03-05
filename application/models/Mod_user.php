<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mod_user extends CI_Model
{
    private $_tableuser = 'user';
    private $_tableriwayat = 'riwayat';

    public function tambah($data)
    {
        $this->db->insert($this->_tableuser, ($data));
    }
    public function getuser($nik)
    {
        return $this->db->get_where('user', ['nik' => $nik])->row_array();
    }
    public function getdata()
    {
        $query = $this->db->get($this->_tableriwayat);
        return $query->result_array();
    }
    public function getdatabyuser()

    {
        $query = $this->db->get_where($this->_tableriwayat, ['id_user' => $this->session->userdata('id_user')]);
        return $query->result_array();
    }
    public function createdata($data)
    {
        $this->db->insert($this->_tableriwayat, $data);
    }
}

/* End of file Mod_user.php */
