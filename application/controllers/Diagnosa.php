<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['cekdata'] = $this->Mcrud->cek('tbl_ciri');
		$data['ciri'] = $this->Mcrud->get_all_data('tbl_ciri')->result();
		$this->load->view("admin/ciri/index", $data);
	}

	// public function proses()
	// {
	// 	$cf_user = $this->input->post('cf_user');
	// 	$kode_ciri = $this->input->post('kode_user');
	// 	$cf_pakar = $this->Mcrud->getCFpakar($kode_ciri);

	// 	// $cf_baru = $cf_user * $cf_pakar;

	// 	echo "CF User : . $cf_user . <br>";
	// 	echo "Kode Ciri : . $kode_ciri . <br>";
	// 	echo "CF Pakar : . $cf_pakar . <br>";
	// 	// echo "CF Baru : . $cf_baru . <br>";

	//     // $this->load->view('admin/ciri/form_add');
	// }

	// public function proses()
	// {
	// 	$cf_user = $this->input->post('cf_user');
	// 	$kode_ciri = $this->input->post('kode_ciri');
	// 	$data = array();

	// 	foreach ($kode_ciri as $index => $kdciri) {
	// 		$cf_pakar[$index] = $this->Mcrud->getCFpakar($kdciri);
	// 		// $cf_baru = $cf_user * $cf_pakar;

	// 		$data[] = array(
	// 			'cf_user' => $cf_user,
	// 			'kode_ciri' => $kdciri,
	// 			'cf_pakar' => $cf_pakar,
	// 			// 'cf_baru' => $cf_baru
	// 		);
	// 	}

	// 	foreach ($data as $item) {
	// 		echo "CF Pakar: " . $item['cf_pakar'] . "<br>";
	// 		echo "CF User: " . $item['cf_user'] . "<br>";
	// 		echo "Kode Ciri: " . $item['kode_ciri'] . "<br>";
	// 		// echo "CF Baru: " . $item['cf_baru'] . "<br>";
	// 		echo "<br>";
	// 	}
	// }

	public function proses()
	{
		$cf_user = $this->input->post('cf_user');
		$kode_ciri = $this->input->post('kode_ciri');
		$data = array();

		foreach ($kode_ciri as $index => $kdciri) {
			$cf_pakar = $this->Mcrud->getCFpakar($kdciri);

			$cf_baru = $cf_user[$index] * $cf_pakar;

			$data[] = array(
				'kode_ciri' => $kdciri,
				// 'cf_user' => $cf_user[$index],
				// 'cf_pakar' => $cf_pakar,
				'nilai_cf' => $cf_baru
			);
		}

		// foreach ($data as $item) {
		// 	echo "Kode Ciri: " . $item['kode_ciri'] . "<br>";
		// 	echo "CF User: " . $item['cf_user'] . "<br>";
		// 	echo "CF Pakar: " . $item['cf_pakar'] . "<br>";
		// 	echo "CF Baru: " . $item['nilai_cf'] . "<br>";
		// 	echo "<br>";
		// }


		// Mengosongkan tabel tbl_cfbaru
		$this->db->empty_table('tbl_cfbaru');

		// Melakukan operasi insert_batch ke tbl_ciri
		$this->db->insert_batch('tbl_cfbaru', $data);

		$cfRule1 = $this->Mcrud->getNilaiRule1();
		$cfRule2 = $this->Mcrud->getNilaiRule2();
		$cfRule3 = $this->Mcrud->getNilaiRule3();
		$cfRule4 = $this->Mcrud->getNilaiRule4();
		$cfRule5 = $this->Mcrud->getNilaiRule5();
		$cfRule6 = $this->Mcrud->getNilaiRule6();
		$cfRule7 = $this->Mcrud->getNilaiRule7();
		$cfRule8 = $this->Mcrud->getNilaiRule8();
		$cfRule9 = $this->Mcrud->getNilaiRule9();
		$cfRule10 = $this->Mcrud->getNilaiRule10();
		$cfRule11 = $this->Mcrud->getNilaiRule11();
		$cfRule12 = $this->Mcrud->getNilaiRule12();
		$cfRule13 = $this->Mcrud->getNilaiRule13();
		$cfRule14 = $this->Mcrud->getNilaiRule14();
		$cfRule15 = $this->Mcrud->getNilaiRule15();
		$cfRule16 = $this->Mcrud->getNilaiRule16();
		$cfRule17 = $this->Mcrud->getNilaiRule17();
		$cfRule18 = $this->Mcrud->getNilaiRule18();
		$cfRule19 = $this->Mcrud->getNilaiRule19();
		$cfRule20 = $this->Mcrud->getNilaiRule20();
		$cfRule21 = $this->Mcrud->getNilaiRule21();
		$cfRule22 = $this->Mcrud->getNilaiRule22();
		$cfRule23 = $this->Mcrud->getNilaiRule23();
		$cfRule24 = $this->Mcrud->getNilaiRule24();

		// echo "CF Baru R1 = " . $cfRule1  . "<br>";
		// echo "CF Baru R2 = " . $cfRule2  . "<br>";
		// echo "CF Baru R3 = " . $cfRule3  . "<br>";
		// echo "CF Baru R4 = " . $cfRule4  . "<br>";
		// echo "CF Baru R5 = " . $cfRule5  . "<br>";
		// echo "CF Baru R6 = " . $cfRule6  . "<br>";
		// echo "CF Baru R7 = " . $cfRule7  . "<br>";
		// echo "CF Baru R8 = " . $cfRule8  . "<br>";
		// echo "CF Baru R9 = " . $cfRule9  . "<br>";
		// echo "CF Baru R10 = " . $cfRule10  . "<br>";
		// echo "CF Baru R11 = " . $cfRule11  . "<br>";
		// echo "CF Baru R12 = " . $cfRule12  . "<br>";
		// echo "CF Baru R13 = " . $cfRule13  . "<br>";
		// echo "CF Baru R14 = " . $cfRule14  . "<br>";
		// echo "CF Baru R15 = " . $cfRule15  . "<br>";
		// echo "CF Baru R16 = " . $cfRule16  . "<br>";
		// echo "CF Baru R17 = " . $cfRule17  . "<br>";
		// echo "CF Baru R18 = " . $cfRule18  . "<br>";
		// echo "CF Baru R19 = " . $cfRule19  . "<br>";
		// echo "CF Baru R20 = " . $cfRule20  . "<br>";
		// echo "CF Baru R21 = " . $cfRule21  . "<br>";
		// echo "CF Baru R22 = " . $cfRule22  . "<br>";
		// echo "CF Baru R23 = " . $cfRule23  . "<br>";
		// echo "CF Baru R24 = " . $cfRule24  . "<br>";
		// echo "<br>";

		$xyK1 = ($cfRule1 + $cfRule2) - ($cfRule1 * $cfRule2);
		$xy2K1 = ($xyK1 + $cfRule3) - ($xyK1 * $cfRule3);
		$xy3K1 = ($xy2K1 + $cfRule4) - ($xy2K1 * $cfRule4);
		$xy4K1 = ($xy3K1 + $cfRule5) - ($xy3K1 * $cfRule5);
		$hasilK1 = (($xy4K1 + $cfRule6) - ($xy4K1 * $cfRule6)) * 100;

		$xyK2 = ($cfRule7 + $cfRule8) - ($cfRule7 * $cfRule8);
		$xy2K2 = ($xyK2 + $cfRule9) - ($xyK2 * $cfRule9);
		$xy3K2 = ($xy2K2 + $cfRule10) - ($xy2K2 * $cfRule10);
		$xy4K2 = ($xy3K2 + $cfRule11) - ($xy3K2 * $cfRule11);
		$hasilK2 = (($xy4K2 + $cfRule12) - ($xy4K2 * $cfRule12)) * 100;

		$xyK3 = ($cfRule13 + $cfRule14) - ($cfRule13 * $cfRule14);
		$xy2K3 = ($xyK3 + $cfRule15) - ($xyK3 * $cfRule15);
		$xy3K3 = ($xy2K3 + $cfRule16) - ($xy2K3 * $cfRule16);
		$xy4K3 = ($xy3K3 + $cfRule17) - ($xy3K3 * $cfRule17);
		$hasilK3 = (($xy4K3 + $cfRule18) - ($xy4K3 * $cfRule18)) * 100;

		$xyK4 = ($cfRule19 + $cfRule20) - ($cfRule19 * $cfRule20);
		$xy2K4 = ($xyK4 + $cfRule21) - ($xyK4 * $cfRule21);
		$xy3K4 = ($xy2K4 + $cfRule22) - ($xy2K4 * $cfRule22);
		$xy4K4 = ($xy3K4 + $cfRule23) - ($xy3K4 * $cfRule23);
		$hasilK4 = (($xy4K4 + $cfRule24) - ($xy4K4 * $cfRule24)) * 100;

		// echo "Hasil Akhir K1 = " . number_format($hasilK1, 2) . "%<br>";
		// echo "Hasil Akhir K2 = " . number_format($hasilK2, 2) . "%<br>";
		// echo "Hasil Akhir K3 = " . number_format($hasilK3, 2) . "%<br>";
		// echo "Hasil Akhir K4 = " . number_format($hasilK4, 2) . "%<br>";
		// echo "<br>";

		$data = array(
			array(
				'kode_kepribadian' => 'K001',
				'nilai_cf' => number_format($hasilK1, 2)
			),
			array(
				'kode_kepribadian' => 'K002',
				'nilai_cf' => number_format($hasilK2, 2)
			),
			array(
				'kode_kepribadian' => 'K003',
				'nilai_cf' => number_format($hasilK3, 2)
			),
			array(
				'kode_kepribadian' => 'K004',
				'nilai_cf' => number_format($hasilK4, 2)
			)
		);

		$this->db->empty_table('tbl_hasil');


		$this->db->insert_batch('tbl_hasil', $data);

		$final = $this->Mcrud->getHasil();


		$data = array(
			'kode_kepribadian' => $final->kode_kepribadian,
			'nilai' => $final->nilai_cf
		);

		$this->db->empty_table('tbl_final');

		$this->Mcrud->insert('tbl_final', $data);

		$tanggal = date('Y-m-d');

		$data = array(
			'tanggal' => $tanggal,
			'kode_kepribadian' => $final->kode_kepribadian,
			'hasil' => $final->nilai_cf
		);

		$this->Mcrud->insert('tbl_riwayat', $data);
		redirect('Diagnosa/hasil');
	}

	public function hasil()
	{
		$data['hasil'] = $this->Mcrud->getHasilKepribadian();
		$this->load->view("user/diagnosa/hasil", $data);
	}
}
