<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
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
        $data['cekdata'] = $this->Mcrud->cek('tbl_rule');
        $data['rule'] = $this->Mcrud->getRule()->result();
        $this->load->view("admin/rule/index", $data);
    }

    public function add()
    {
        $this->load->view('admin/rule/form_add');
    }

    public function save()
    {
        $config['upload_path']          = './upload/gambar/';
        $config['allowed_types']        = 'gif|jpg|JPG|png|PNG';
        $config['max_size']             = 10000; // maksimal ukuran
        $config['max_width']            = 10000; //lebar maksimal
        $config['max_height']           = 10000; //tinggi maksimal
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        $this->upload->do_upload('gambar');

        $nama = $this->input->post('nama');
        $desc = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $gambar = $this->upload->data();
        $gambar = $gambar['file_name'];

        if ($nama == NULL && $desc == NULL && $harga == NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data belum diisi!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('rule');
        } else {
            $data = array(
                'nama' => $nama,
                'harga' => $harga,
                'deskripsi' => $desc,
                'gambar' => $gambar
            );

            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data baru berhasil ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            $this->Mcrud->insert('tbl_rule', $data);
            redirect('Rule');
        }
    }

    public function getid($id)
    {
        $dataWhere = array('id' => $id);
        $data['rule'] = $this->Mcrud->get_by_id('tbl_rule', $dataWhere)->row_object();
        $this->load->view('admin/rule/form_edit', $data);
    }

    public function edit()
    {
        $config['upload_path']          = './upload/gambar/';
        $config['allowed_types']        = 'gif|jpg|JPG|png|PNG';
        $config['max_size']             = 10000; // maksimal ukuran
        $config['max_width']            = 10000; //lebar maksimal
        $config['max_height']           = 10000; //tinggi maksimal
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        $this->upload->do_upload('gambar');

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $desc = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $gambar = $this->upload->data();
        $gambar = $gambar['file_name'];

        if ($nama == NULL && $desc == NULL && $harga == NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data belum diisi!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('rule');
        } else {
            $data = array(
                'nama' => $nama,
                'harga' => $harga,
                'deskripsi' => $desc,
                'gambar' => $gambar
            );

            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diubah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            $this->Mcrud->update('tbl_rule', $data, 'id', $id);
            redirect('Rule');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mcrud->delete($where, 'tbl_rule');
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Rule');
    }
}
