<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $this->load->view("user/index");
    }

    public function ciri()
    {
        $data['cekdata'] = $this->Mcrud->cek('tbl_ciri');
        $data['ciri'] = $this->Mcrud->get_all_data('tbl_ciri')->result();
        $this->load->view("user/ciri/index", $data);
    }

    public function kepribadian()
    {
        $data['cekdata'] = $this->Mcrud->cek('tbl_kepribadian');
        $data['kepribadian'] = $this->Mcrud->get_all_data('tbl_kepribadian')->result();
        $this->load->view("user/kepribadian/index", $data);
    }

    public function diagnosa()
    {
        $data['cekdata'] = $this->Mcrud->cek('tbl_ciri');
        $data['ciri'] = $this->Mcrud->get_all_data('tbl_ciri')->result();
		$data['pilihan'] = $this->Mcrud->get_all_data('tbl_pilihan')->result();
        $this->load->view("user/diagnosa/index", $data);
    }

    public function diagnosa_action()
    {
        $nilai_cf = $this->input->post('cf_user');

        $data = array(
            'nilai_cf' => $nilai_cf
        );
    }
}
