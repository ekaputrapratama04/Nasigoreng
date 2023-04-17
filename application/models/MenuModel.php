<?php


class MenuModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getMenus()
    {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function getMenu($kode_menu)
    {
        $query = $this->db->get_where('menu', array('kode_menu' => $kode_menu));
        return $query->row_array();
    }

    public function createMenu($data)
    {
        $this->db->insert('menu', $data);
    }

    public function updateMenu($kode_menu, $data)
    {
        $this->db->where("kode_menu", $kode_menu);
        $this->db->update('menu', $data);
    }

    public function deleteMenu($kode_menu)
    {
        $this->db->where("kode_menu", $kode_menu);
        $this->db->delete('menu');
    }
}
