<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Termin_model extends CI_Model {
    private $_table = "termin";

    public $id;
    public $ket;
    public $kwit;
    public $sp2dt;
    public $no_sp2dt;
    public $sp2dpt;
    public $no_sp2dpt;
    public $bastt;
    public $ppnt;
    public $ppht;
    public $kode;

    public function rules(){
        return [
            ['field' => 'ket', 'label' => 'ket', 'rules' => 'required'],
            ['field' => 'kwit', 'label' => 'kwit', 'rules' => 'required'],
            ['field' => 'sp2dt', 'label' => 'sp2dt', 'rules' => 'required'],
            ['field' => 'no_sp2dt', 'label' => 'no_sp2dt', 'rules' => 'required'],
            ['field' => 'sp2dpt', 'label' => 'sp2dpt', 'rules' => 'required'],
            ['field' => 'no_sp2dpt', 'label' => 'no_sp2dpt', 'rules' => 'required'],
            ['field' => 'bastt', 'label' => 'bastt', 'rules' => 'required'],
            ['field' => 'bersiht', 'label' => 'bersiht', 'rules' => 'required'],
            ['field' => 'ppnt', 'label' => 'ppnt', 'rules' => 'required'],
            ['field' => 'ppht', 'label' => 'ppht', 'rules' => 'required'],
            ['field' => 'kode', 'label' => 'kode', 'rules' => 'required']
            
        ];
    }

      public function getByID($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function ambilData($id) {
        $query = $this->db->query('
            SELECT i.unit, i.kode, i.mak, i.pek, i.penye, i.spk, i.kalender, i.nilai_kon, i.nilai_kwi, i.sisa, 
                   i.sp2d, i.no_sp2d, i.sp2dp, i.no_sp2dp, i.bast, i.sumber, i.nilai, i.ppn, i.pph, 
                   i.kualifikasi, i.denda, t.kwit, t.sp2dt, t.no_sp2dt, t.sp2dpt, t.no_sp2dpt, 
                   t.bastt, t.bersiht, t.ppnt, t.ppht, t.kode 
            FROM input i 
            LEFT JOIN termin t ON i.nilai_kon = t.kode 
            WHERE t.kode = ?', array($id)
        );
    
        return $query->result();  // Mengembalikan hasil sebagai array objek
    }
    
    public function getAll(){
        $this->db->order_by('id','ASC');        
        return $this->db->get($this->_table)->result();
    }

    public function deleteData($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function saveData(){
        $post = $this->input->post();
        $this->ket = $post['ket'];
        $this->kwit = $post['kwit'];
        $this->sp2dt = $post['sp2dt'];
        $this->no_sp2dt = $post['no_sp2dt'];
        $this->sp2dpt = $post['sp2dpt'];
        $this->no_sp2dpt = $post['no_sp2dpt'];
        $this->bastt = $post['bastt'];
        $this->bersiht = $post['bersiht'];
        $this->ppnt = $post['ppnt'];
        $this->ppht = $post['ppht'];
        $this->kode = $post['kode'];
        $this->db->insert($this->_table, $this);
    }

    public function updateTermin(){
        $post = $this->input->post();
        $this->ket = $post['ket'];
        $this->kwit = $post['kwit'];
        $this->sp2dt = $post['sp2dt'];
        $this->no_sp2dt = $post['no_sp2dt'];
        $this->sp2dpt = $post['sp2dpt'];
        $this->no_sp2dpt = $post['no_sp2dpt'];
        $this->bastt = $post['bastt'];
        $this->bersiht = $post['bersiht'];
        $this->ppnt = $post['ppnt'];
        $this->ppht = $post['ppht'];
        $this->kode = $post['kode'];
        // $this->db->insert($this->_table, $this);
    
        $result = $this->db->update($this->_table, $this, array('id' => $post['id']));
    log_message('debug', $this->db->last_query()); // Menampilkan query terakhir
    return $result;
    }
}
?>