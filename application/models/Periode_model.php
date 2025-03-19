<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Periode_model extends CI_Model {
    private $_table = "tahun";

    public $id;
    public $periode;
    
    public function rules(){
        return [
            ['field' => 'periode', 'label' => 'periode', 'rules' => 'required']        
        ];
    }

      public function getByID($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    // public function ambilData($id) {
    //     $query = $this->db->query('
    //         SELECT i.unit, i.kode, i.mak, i.pek, i.penye, i.spk, i.kalender, i.nilai_kon, i.nilai_kwi, i.sisa, 
    //                i.sp2d, i.no_sp2d, i.sp2dp, i.no_sp2dp, i.bast, i.sumber, i.nilai, i.ppn, i.pph, 
    //                i.kualifikasi, i.denda, t.kwit, t.sp2dt, t.no_sp2dt, t.sp2dpt, t.no_sp2dpt, 
    //                t.bastt, t.bersiht, t.ppnt, t.ppht, t.kode 
    //         FROM input i 
    //         LEFT JOIN termin t ON i.nilai_kon = t.kode 
    //         WHERE t.kode = ?', array($id)
    //     );
    
    //     return $query->result();  // Mengembalikan hasil sebagai array objek
    // }
    
    public function getAll(){
        $this->db->order_by('id','ASC');        
        return $this->db->get($this->_table)->result();
    }

    public function deleteData($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function getJumlahStatus($status)
    {
        $this->db->where('status', $status);
        $this->db->from('tahun');
        return $this->db->result();
    }
    public function saveData(){
        $post = $this->input->post();
        $this->periode = $post['periode'];
        $this->db->insert($this->_table, $this);
    }
    public function status(){
        $this->db->where('status','YES');
        return $this->db->get($this->_table)->result();
    }
    public function aktif($data) {
        $this->db->where('id', $data['id']);
		$this->db->update('tahun', array('status' => $data['status']));
    }
    public function nonaktif($data) {
        $this->db->where('id', $data['id']);
		$this->db->update('tahun', array('status' => $data['status']));
    }
}
?>