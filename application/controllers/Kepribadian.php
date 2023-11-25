<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepribadian extends CI_Controller
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
        $data['cekdata'] = $this->Mcrud->cek('tbl_kepribadian');
        $data['kepribadian'] = $this->Mcrud->get_all_data('tbl_kepribadian')->result();
        $this->load->view("admin/kepribadian/index", $data);
    }

    public function add()
    {
        $this->load->view('admin/kepribadian/form_add');
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
            redirect('kepribadian');
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
            $this->Mcrud->insert('tbl_kepribadian', $data);
            redirect('Kepribadian');
        }
    }

    public function getid($id)
    {
        $dataWhere = array('kode' => $id);
        $data['kepribadian'] = $this->Mcrud->get_by_id('tbl_kepribadian', $dataWhere)->row_object();
        $this->load->view('admin/kepribadian/form_edit', $data);
    }

    public function edit()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $detail = $this->input->post('detail');
        $saran = $this->input->post('saran');

        $data = array(
            'nama' => $nama,
            'detail' => $detail,
            'saran' => $saran
        );

        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diubah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        $this->Mcrud->update('tbl_kepribadian', $data, 'kode', $kode);
        redirect('Kepribadian');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mcrud->delete($where, 'tbl_kepribadian');
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Kepribadian');
    }
}
