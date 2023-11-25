<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ciri extends CI_Controller
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
        $data['cekdata'] = $this->Mcrud->cek('tbl_ciri');
        $data['ciri'] = $this->Mcrud->get_all_data('tbl_ciri')->result();
        $this->load->view("admin/ciri/index", $data);
    }

    public function add()
    {
        $this->load->view('admin/ciri/form_add');
    }

    // public function save()
    // {
    //     $idTerakhir = $this->Mcrud->idTerakhir('tbl_ciri');
    //     $idTerakhir = intval(str_replace('C', '', $idTerakhir)); // Hapus prefiks 'C' dan konversi ke tipe data int

    //     $idTerbaru = $idTerakhir + 1;
    //     $kode = "C" . sprintf("%03d", $idTerbaru);

    //     $nama = $this->input->post('nama');
    //     $nilai_cf = $this->input->post('nilai_cf');

    //     $ciriAda = $this->Mcrud->cekCiri($nama);

    //     if ($nama == NULL) {
    //         $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //                 <strong>Data belum diisi!</strong>
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                     <span aria-hidden="true">&times;</span>
    //                 </button>
    //             </div>');
    //         redirect('Ciri');
    //     } else if ($ciriAda) {
    //         $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //                 <strong>Ciri - ciri sudah ada!</strong>
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                     <span aria-hidden="true">&times;</span>
    //                 </button>
    //             </div>');
    //         redirect('Ciri');
    //     } else {
    //         $data = array(
    //             'kode' => $kode,
    //             'nama' => $nama,
    //             'nilai_cf' => $nilai_cf
    //         );

    //         $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //                 <strong>Data baru berhasil ditambahkan!</strong>
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                     <span aria-hidden="true">&times;</span>
    //                 </button>
    //             </div>');
    //         $this->Mcrud->insert('tbl_ciri', $data);
    //         redirect('Ciri');
    //     }
    // }

    public function getid($id)
    {
        $dataWhere = array('kode' => $id);
        $data['ciri'] = $this->Mcrud->get_by_id('tbl_ciri', $dataWhere)->row_object();
        $this->load->view('admin/ciri/form_edit', $data);
    }

    public function edit()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $cf_pakar = $this->input->post('cf_pakar');

        $data = array(
            'nama' => $nama,
            'cf_pakar' => $cf_pakar
        );

        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diubah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        $this->Mcrud->update('tbl_ciri', $data, 'kode', $kode);
        redirect('Ciri');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Mcrud->delete($where, 'tbl_ciri');
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('Ciri');
    }
}
