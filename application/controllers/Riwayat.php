<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
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
        $data['cekdata'] = $this->Mcrud->cek('tbl_riwayat');
        $data['riwayat'] = $this->Mcrud->getHistory();
        $this->load->view("admin/riwayat/index", $data);
    }
}
