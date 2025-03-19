<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Perusahaan_model extends CI_Model {
    private $_table = "perusahaan";

    public $id;
    public $nama;
    

    public function rules(){
        return [
            ['field' => 'nama','label' => 'nama','rules' => 'required'],
        ];
    }

    public function getByID($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    
    public function getAll(){
        $this->db->order_by('id','ASC');        
        return $this->db->get($this->_table)->result();
    }

    public function simpan(){

        $post = $this->input->post();
        $this->nama = $post['nama'];
        
        $this->db->insert($this->_table, $this);

    }
    public function getPeru(){
        $this->db->select('id, nama');
        //$this->db->where('nama','ASC');
        $query = $this->db->get('perusahaan');
    return $query->result();
    }
    
    public function get_penyedia() {
        $query = $this->db->get('perusahaan');
        return $query->result_array();
    }
    public function hapus($id){
        return $this->db->delete($this->_table, array('id' => $id));
    }

}

?>