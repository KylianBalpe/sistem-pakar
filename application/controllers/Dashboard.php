<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        if (empty($this->session->userdata('userName'))) {
            redirect('Admin');
        }
    }

    public function index()
    {
        $data['dataRule'] = $this->Mcrud->dataRule();
        $data['dataKepribadian'] = $this->Mcrud->dataKepribadian();
        $data['dataCiri'] = $this->Mcrud->dataCiri();
        $data['dataRiwayat'] = $this->Mcrud->dataHistory();
        $this->load->view("admin/dashboard", $data);
    }
}
