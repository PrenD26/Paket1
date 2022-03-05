<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_user', 'users');
    }


    public function index()
    {
        if ($this->session->userdata('nik')) {
            redirect('dashboard');
        }
        $this->load->view('auth/login');
    }
    public function login()
    {
        $post = $this->input->post();

        $nik = $this->input->post('nik', TRUE);
        $nama = $this->input->post('nama', TRUE);


        $user = $this->users->getuser($nik);
        if ($user) {
            if ($user['nama'] == $nama) {
                $data = [
                    'id_user' => $user['id_user'],
                    'nik' => $user['nik'],
                    'nama' => $user['nama'],
                ];
                $this->session->set_userdata($data);
                redirect('dashboard', 'refresh');
            } else {
                $this->session->set_flashdata('amogus', 'Nama Yang Anda Masukkan Salah!');
                redirect('auth', 'refresh');
            }
        } else {
            $this->session->set_flashdata('amogus', 'NIK Yang Anda Masukkan Salah / Tidak Terdaftar!');
          
            redirect('auth');
        }
    }
    public function register()
    {
        if ($this->session->userdata('nik')) {
            redirect('dashboard');
        }
        $this->load->view('auth/register');
    }
    public function daftar()
    {
        $valid = $this->form_validation;

        $valid->set_rules('nama', 'NAMA', 'trim|required|strip_tags');
        $valid->set_rules('email', 'EMAIL', 'required|trim|strip_tags|is_unique[user.email]');
        $valid->set_rules('nik', 'NIK', 'trim|required|strip_tags|is_unique[user.nik]|max_length[16]|min_length[16]');
        $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $valid->set_rules('jk', 'Jenis Kelamin', 'required');
        $valid->set_rules('no_telepon', 'Nomor Telepon', 'trim|required|strip_tags');
        $valid->set_rules('alamat', 'Alamat', 'trim|required|strip_tags');

        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $tanggal_lahir = new DateTime($post['tanggal_lahir']);
            $sekarang = new DateTime("today");
            if ($tanggal_lahir > $sekarang) {
                $thn = "0";
            }
            $thn = $sekarang->diff($tanggal_lahir)->y;


            $data = array(
                'nama' => $post['nama'],
                'email' => $post['email'],
                'nik' => $post['nik'],
                'tanggal_lahir' => $post['tanggal_lahir'],
                'jk' => $post['jk'],
                'umur' => $thn,
                'no_telepon' => $post['no_telepon'],
                'alamat' => $post['alamat']
            );
            $this->users->tambah($data);
            redirect('auth', 'refresh');
        } else {
            $this->load->view('auth/register');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}

/* End of file Auth.php */
