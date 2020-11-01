<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function get_user($sess_no){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*');
		$this->db->from('ms_users_staff as staff');
		$this->db->where('nidn',$sess_no);
		$query = $this->db->get();
		return $query->result();
	}

}