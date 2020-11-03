<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofile extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_users_staff($sess_no){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*');
		$this->db->from('ms_users_staff as staff');
		$this->db->where('nidn',$sess_no);
		$this->db->join('ms_role as role', 'role.kode_role = staff.kode_role','left');
		$this->db->join('ms_prodi', 'ms_prodi.id = staff.id_prodi','left');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_auth($sess_no){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*');
		$this->db->from('ms_auth as auth');
		$this->db->where('no_unique',$sess_no);
		$query = $this->db->get();
		return $query->result();
	}

	public function change_profile($data,$no_unique){
		$this->db->where('nidn',$no_unique);
		$this->db->update('ms_users_staff',$data);

	}

	public function change_auth($data,$no_unique){
		$this->db->where('no_unique',$no_unique);
		$this->db->update('ms_auth',$data);

	}

	public function change_photo($data,$sess_no){

		$this->db->where('ms_users_staff.nidn', $sess_no);
		$this->db->update('ms_users_staff',$data);
	}
}