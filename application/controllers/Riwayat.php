<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Mod_user','users');
    
}

    public function index()
    {
        if ($this->session->userdata('nik') == null) {
            redirect('auth');
        }
        $data = [
            'riwayat' => $this->users->getdatabyuser(),
            'title' => 'Catatan Perjalanan',
        ];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('riwayat', $data);
        $this->load->view('template/footer', $data);
        
        
        
        
    }

}

/* End of file Riwayat.php */
?>