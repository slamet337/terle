<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class User_model extends CI_Model {
    // Get User by useername
	function cekuser($username){
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		return $query;
	}

	// Get User by useername and password
	public function ceklogin($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		return $query;
	}
	
	// Get user
	public function get($id = ''){
		$this->db->select('*');
		$this->db->from('user');
		if ($id != '') {
			$this->db->where('idppk', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	// Insert User
	public function insert($data){
		$this->db->set('idppk', 'UUID()', FALSE);
		$this->db->insert('user', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('idppk', $id);
		$this->db->update('user', $data);
	}

	// Konfirmasi Status User
	public function status($id, $status)
	{
		$this->db->set('status', $status);
		$this->db->where('idppk', $id);
		$this->db->update('user');
	}
}