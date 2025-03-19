<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Ppk_model extends CI_Model {
    private $_table = "input";

    public $id;
    public $unit;
    public $kode;
    public $mak;
    public $pek;
    public $penye;
    public $sp2dp;
    public $no_sp2dp;
    public $spk;
    public $kalender;
    public $nilai_kon;
    public $nilai_kwi;
    public $sisa;
    public $sp2d;
    public $no_sp2d;
    public $bast;
    public $sumber;
    public $nilai;
    public $ppn;
    public $pph;
    public $kualifikasi;
    public $denda;
    public $status;
    public $tahun;

    public function rules(){
        return [
            ['field' => 'unit', 'label' => 'unit', 'rules' => 'required'],
            ['field' => 'kode', 'label' => 'kode', 'rules' => 'required'],
            ['field' => 'mak', 'label' => 'mak', 'rules' => 'required'],
            ['field' => 'pek', 'label' => 'pek', 'rules' => 'required'],
            ['field' => 'penye', 'label' => 'penye', 'rules' => 'required'],
            ['field' => 'spk', 'label' => 'spk', 'rules' => 'required'],
            ['field' => 'kalender', 'label' => 'kalender', 'rules' => 'required'],
            ['field' => 'nilai_kon', 'label' => 'nilai_kon', 'rules' => 'required'],
            ['field' => 'nilai_kwi', 'label' => 'nilai_kwi', 'rules' => 'required'],
            ['field' => 'sisa', 'label' => 'sisa', 'rules' => 'required'],
            ['field' => 'sp2d', 'label' => 'sp2d', 'rules' => 'required'],
            ['field' => 'no_sp2d', 'label' => 'no_sp2d', 'rules' => 'required'],
            ['field' => 'sp2dp', 'label' => 'sp2dp', 'rules' => 'required'],
            ['field' => 'no_sp2dp', 'label' => 'no_sp2dp', 'rules' => 'required'],
            ['field' => 'bast', 'label' => 'bast', 'rules' => 'required'],
            ['field' => 'sumber', 'label' => 'sumber', 'rules' => 'required'],
            ['field' => 'nilai', 'label' => 'nilai', 'rules' => 'required'],
            ['field' => 'ppn', 'label' => 'ppn', 'rules' => 'required'],     
            ['field' => 'pph', 'label' => 'pph', 'rules' => 'required'],
            ['field' => 'kualifikasi', 'label' => 'kualifikasi', 'rules' => 'required'],
            ['field' => 'denda', 'label' => 'denda', 'rules' => 'required'],
            ['field' => 'status', 'label' => 'status', 'rules' => 'required'],
            ['field' => 'tahun', 'label' => 'tahun', 'rules' => 'required']
        ];
    }

    public function getAll(){
        $this->db->order_by('id','ASC');        
        $this->db->where('tahun','1');        
        return $this->db->get($this->_table)->result();
    }
   
    public function view() {
        return $this->db->get('input')->result();
    }
    public function getTotal($tahun = '1') {
        $this->db->select_sum('nilai_kon', 'total_nilai');
    $this->db->where('tahun', $tahun);
    $query = $this->db->get('input');
    $result = $query->row();
    return $result ? $result->total_nilai : 0;
    }
    
    public function getRm($sumber = '', $tahun ='1') {
        if ($sumber != '') {
            $this->db->LIKE('sumber', $sumber);
        }
        $this->db->select_sum('nilai_kon');
        $this->db->where('tahun', $tahun);
        $query = $this->db->get('input');
        return $query->row()->nilai_kon;
    }
    public function getRm1($tahun = '1') {
        $this->db->where('sumber', 'RM');
        $this->db->where('tahun', $tahun);
		$query = $this->db->get('input');
		return $query;
    }

    
    public function getBlu($tahun = '1') {
        $this->db->where('sumber', 'BLU');
        $this->db->where('tahun', $tahun);
		$query = $this->db->get('input');
		return $query;
    }
    public function getData($id = '', $tahun = '1')
{
    $this->db->where('tahun', $tahun);

    if ($id != '') {
        $this->db->where('id', $id);
    }

    $query = $this->db->get('input');
    return $query;
}

public function ambilData($tahun = '1')
{
    $this->db->select('p.nama, i.nilai, i.nilai_kon, SUM(i.nilai_kon) as nilai_kon, COUNT(i.penye) as total, SUM(i.nilai) as nilai');
    $this->db->from('perusahaan p');
    $this->db->join('input i', 'p.nama = i.penye', 'left');
    $this->db->where('i.tahun', $tahun); // Tambahkan filter berdasarkan tahun
    $this->db->group_by('p.nama');

    $query = $this->db->get();
    return $query;
}
   

    public function getByID($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function saveData(){
        $post = $this->input->post();
        $this->unit = $post['unit'];
        $this->kode = $post['kode'];
        $this->mak = $post['mak'];
        $this->pek = $post['pek'];
        $this->penye = $post['penye'];
        $this->spk = $post['spk'];
        $this->kalender = $post['kalender'];
        $this->nilai_kon = $post['nilai_kon'];
        $this->nilai_kwi = $post['nilai_kwi'];
        $this->sisa = $post['sisa'];
        $this->sp2d = $post['sp2d'];
        $this->no_sp2d = $post['no_sp2d'];
        $this->sp2dp = $post['sp2dp'];
        $this->no_sp2dp = $post['no_sp2dp'];
        $this->bast = $post['bast'];
        $this->sumber = $post['sumber'];
        $this->nilai = $post['nilai'];
        $this->ppn = $post['ppn'];
        $this->pph = $post['pph'];
        $this->kualifikasi = $post['kualifikasi'];
        $this->denda = $post['denda'];
        $this->status = $post['status'];
        $this->tahun = $post['tahun'];
        $this->db->insert($this->_table, $this);
    }

    public function updatePpk() {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->unit = $post['unit'];
        $this->kode = $post['kode'];
        $this->mak = $post['mak'];
        $this->pek = $post['pek'];
        $this->penye = $post['penye'];
        $this->spk = $post['spk'];
        $this->kalender = $post['kalender'];
        $this->nilai_kon = $post['nilai_kon'];
        $this->nilai_kwi = $post['nilai_kwi'];
        $this->sisa = $post['sisa'];
        $this->sp2d = $post['sp2d'];
        $this->no_sp2d = $post['no_sp2d'];
        $this->sp2dp = $post['sp2dp'];
        $this->no_sp2dp = $post['no_sp2dp'];
        $this->bast = $post['bast'];
        $this->sumber = $post['sumber'];
        $this->nilai = $post['nilai'];
        $this->ppn = $post['ppn'];
        $this->pph = $post['pph'];
        $this->kualifikasi = $post['kualifikasi'];
        $this->denda = $post['denda'];
        $this->status = $post['status'];
        $this->tahun = $post['tahun'];
    
        $result = $this->db->update($this->_table, $this, array('id' => $post['id']));
    log_message('debug', $this->db->last_query()); // Menampilkan query terakhir
    return $result;
    }
    

    public function deleteData($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }


    // public function rekak() {

    // }
}
?>