<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Isidata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_user', 'user');
    }

    public function index()
    {
        if ($this->session->userdata('nik') == null) {
            redirect('auth');
        }
        $data = [
            'title' => 'Create Data',
        ];
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('isidata');
        $this->load->view('template/footer');
    }
    public function create()
    {
        $valid = $this->form_validation;
        $valid->set_rules('tanggal', 'Tanggal', 'required');
        $valid->set_rules('waktu', 'Waktu', 'required');
        $valid->set_rules('lokasi', 'Lokasi', 'required|strip_tags|trim');
        $valid->set_rules('suhu_tubuh', 'Suhu Tubuh', 'required|strip_tags|trim');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $data = [
                'id_user' => $this->session->userdata('id_user'),
                'tanggal' => $post['tanggal'],
                'waktu' => $post['waktu'],
                'lokasi' => $post['lokasi'],
                'suhu_tubuh' => $post['suhu_tubuh'],
            ];
            $this->user->createdata($data);
            redirect('riwayat');
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('isidata');
            $this->load->view('template/footer');
        }
    }
}

/* End of file Isidata.php */
