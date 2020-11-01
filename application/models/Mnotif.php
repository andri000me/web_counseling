<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnotif extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function count_consult($nidn){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*');
		$this->db->from('ms_consult as consult');
		$this->db->where('consult.nidn',$nidn);
		$this->db->where('consult.id_consult_status', '5');
		$this->db->where('consult.readed', '0');
		$this->db->order_by('consult.id','DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function getnotifconsult($no_unique){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*, consult.id as id_consult');
		$this->db->from('ms_consult as consult');
		$this->db->where('consult.nidn',$no_unique);
		$this->db->where('consult.id_consult_status', '5');
		$this->db->join('ms_users_college as college', 'college.nim = consult.nim','LEFT');
		$this->db->order_by('consult.id','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_readed_consult($id_consult){
		$this->db->set('readed', '1');
		$this->db->where('id', $id_consult);
		$this->db->update('ms_consult');
	}

}