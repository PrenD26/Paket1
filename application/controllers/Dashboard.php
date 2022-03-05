<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('nik') == null) {
            redirect('auth');
        }
        $data = [
            'title' => 'Dashboard',
        ];
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }

}

/* End of file Dashboard.php */
?>