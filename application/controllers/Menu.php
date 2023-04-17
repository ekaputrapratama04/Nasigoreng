<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['menus'] = $this->MenuModel->getmenus();
        $this->load->view('menu/index', $data);
    }


    public function create()
    {

        $this->load->view('menu/create');
    }

    public function store()
    {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max-size'] = 2048;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_menu' => $this->input->post('namaMenu'),
                'harga' => $this->input->post('harga'),
                'gambar' => $upload_data['file_name'] // Nama file gambar yang diunggah
            );
            $this->MenuModel->createMenu($data);
            redirect('menu');
        } else {
            // Jika terjadi error pada proses pengunggahan file
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

    public function edit($kode_menu)
    {
        $data['menu'] = $this->MenuModel->getMenu($kode_menu);
        $this->load->view('menu/edit', $data);
    }

    public function update($kode_menu)
    {
        $data = array(
            'nama_menu' => $this->input->post('namaMenu'),
            'harga' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
        );
        $this->MenuModel->updateMenu($kode_menu, $data);
        redirect('menu');
    }

    // Untuk menghapus menu dari field kode_menu
    public function delete($kode_menu)
    {
        $this->MenuModel->deleteMenu($kode_menu);
        redirect('menu');
    }
}
