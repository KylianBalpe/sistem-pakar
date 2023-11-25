<?php

class Mcrud extends CI_Model
{

    public function get_all_data($table)
    {
        $q = $this->db->get($table);
        return $q;
    }

    public function cek($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        return $this->db->get()->num_rows();
    }

    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get_by_id($table, $id)
    {
        return $this->db->get_where($table, $id);
    }

    public function update($table, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // public function getRule()
    // {
    //     $query = $this->db->query("SELECT rule, REPLACE(GROUP_CONCAT(kode_ciri SEPARATOR ' AND '), ',', '') AS kode_ciri, kode_kepribadian, nilai_cf
    //                           FROM tbl_rule
    //                           GROUP BY kode_kepribadian, nilai_cf
    //                           ORDER BY `rule`");
    //     return $query;
    // }

    public function getRule()
    {
        $query = $this->db->query("SELECT MAX(rule) AS rule, REPLACE(GROUP_CONCAT(kode_ciri SEPARATOR ' AND '), ',', '') AS kode_ciri, kode_kepribadian, nilai_cf
                              FROM tbl_rule
                              GROUP BY kode_kepribadian, nilai_cf
                              ORDER BY rule");
        return $query;
    }

    public function dataRule()
    {
        $subquery = $this->db->select('DISTINCT rule', false)
            ->from('tbl_rule')
            ->get_compiled_select();

        $query = $this->db->query("SELECT COUNT(*) AS count_rule
                                  FROM ($subquery) AS subquery");

        $result = $query->row();

        return $result->count_rule;
    }

    public function dataKepribadian()
    {
        $query = $this->db->query("SELECT COUNT(kode) AS count_kode
                                  FROM tbl_kepribadian");

        $result = $query->row();

        return $result->count_kode;
    }

    public function dataCiri()
    {
        $query = $this->db->query("SELECT COUNT(kode) AS count_kode
                                  FROM tbl_ciri");

        $result = $query->row();

        return $result->count_kode;
    }

    public function dataHistory()
    {
        $query = $this->db->query("SELECT COUNT(id) AS count_id
								FROM tbl_riwayat
								WHERE hasil > 0");

        $result = $query->row();

        return $result->count_id;
    }

    function idTerakhir($table)
    {
        $this->db->select_max('id');
        $query = $this->db->get($table);
        return $query->row()->id;
    }

    public function cekCiri($nama)
    {
        $this->db->where('nama', $nama);
        $query = $this->db->get('tbl_ciri');
        return $query->num_rows() > 0;
    }

    public function cekKepribadian($nama)
    {
        $this->db->where('nama', $nama);
        $query = $this->db->get('tbl_kepribadian');
        return $query->num_rows() > 0;
    }

    public function getCFpakar($kode_ciri)
    {
        $query = $this->db->query("SELECT cf_pakar FROM tbl_ciri WHERE kode = '$kode_ciri'");
        return $query->row()->cf_pakar;
    }

    public function getNilaiRule1()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 01'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule2()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 02'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule3()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 03'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule4()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 04'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule5()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 05'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule6()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 06'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule7()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 07'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule8()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 08'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule9()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 09'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule10()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 10'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule11()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 11'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule12()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 12'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule13()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 13'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule14()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 14'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule15()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 15'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule16()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 16'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule17()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 17'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule18()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 18'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule19()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 19'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule20()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 20'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule21()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 21'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule22()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 22'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule23()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 23'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getNilaiRule24()
    {
        $query = $this->db->query("SELECT CFB.nilai_cf AS cf_baru, R.nilai_cf AS cf_rule
			FROM tbl_cfbaru CFB
			JOIN tbl_ciri C ON CFB.kode_ciri = C.kode
			JOIN tbl_rule R ON CFB.kode_ciri = R.kode_ciri
			WHERE R.rule = 'Rule 24'
			ORDER BY cf_baru ASC
			LIMIT 1");

        $result = $query->row();
        $cf_baru = $result->cf_baru;
        $cf_rule = $result->cf_rule;

        $cfRule = $cf_baru * $cf_rule;
        return $cfRule;
    }

    public function getHasil()
    {
        $query = $this->db->query("SELECT id, kode_kepribadian, nilai_cf 
		FROM tbl_hasil 
		ORDER BY nilai_cf DESC 
		LIMIT 1");

        return $query->row();
    }

    public function getHasilKepribadian()
    {
        $query = $this->db->query("SELECT K.nama AS nama_kepribadian, 
		K.detail AS detail_kepribadian, K.saran AS saran_kepribadian, 
		F.kode_kepribadian, F.nilai AS nilai FROM tbl_final F
		JOIN tbl_kepribadian K
		ON F.kode_kepribadian = K.kode");

        return $query->row();
    }

    public function getHistory()
    {
        $query = $this->db->query("SELECT R.id AS id, R.tanggal AS tanggal, R.kode_kepribadian AS kode_kepribadian, K.nama AS tipe_kepribadian, R.hasil AS nilai 
		FROM tbl_riwayat R
		JOIN tbl_kepribadian K ON R.kode_kepribadian = K.kode
		ORDER BY R.id ASC");

        return $query->result();
    }
}
