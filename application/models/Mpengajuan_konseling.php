<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengajuan_konseling extends CI_Model {

	var $table = 'ms_consult';
	var $order = array('c.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
	}

	private function pengajuan_konseling_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('college.name', 'c.id_consult_status', 's.status', 'c.nim');
		$this->db->select('*,c.id as id_consult');
		$this->db->from('ms_consult as c');
		$this->db->join('ms_users_college as college', 'college.nim = c.nim','left');
		$this->db->join('ms_consult_selection as selection', 'selection.id = c.id_consult_selection','left');
		$this->db->join('ms_consult_status as s', 's.id = c.id_consult_status','left');
		$this->db->where('c.id_consult_status !=','2');
		$this->db->where('c.id_consult_status !=','3');
		$this->db->group_start();
		$this->db->like('c.id', $term);
		$this->db->or_like('c.nim', $term);
		$this->db->or_like('s.status_consult', $term);
		$this->db->or_like('college.name', $term);
		$this->db->or_like('c.date', $term);
		$this->db->group_end();
		if(isset($_REQUEST['order'])) // here order processing
		{
		   $this->db->order_by($column[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
		   $order = $this->order;
		   $this->db->order_by(key($order), $order[key($order)]);
		}
	}

	//semua data
	function pengajuan_konseling_get_datatables(){
		$term = $_REQUEST['search']['value'];   
		$this->pengajuan_konseling_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	//filter by

	function orderby_pengajuan_get_datatables($id){
		$term = $_REQUEST['search']['value'];   
		$this->pengajuan_konseling_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->where('c.id_consult_status',$id);
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}


	function pengajuan_konseling_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->pengajuan_konseling_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}

	public function pengajuan_konseling_count_all(){
	  $this->db->from($this->table);
	  return $this->db->count_all_results();  
	}


	public function delete_pengajuan_konseling($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	function delete_pengajuan($id)
	{
	  $this->db->where('id', $id);
	  $this->db->delete($this->table);
	}
	


}