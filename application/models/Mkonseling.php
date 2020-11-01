<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkonseling extends CI_Model {

	var $table = 'ms_users_staff';
	var $order = array('u.id' => 'desc');

	public function __construct()
	{
		parent::__construct();
	}


	 // perwalian

	private function perwalian_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('u.id', 'u.nidn', 'u.name',);
		$this->db->select('*,u.id as id_users');
		$this->db->from('ms_users_staff as u');
		$this->db->where('u.kode_role','DSN');
		$this->db->join('ms_prodi', 'ms_prodi.id = u.id_prodi','left');
		$this->db->group_start();
		$this->db->like('u.name', $term);
		$this->db->or_like('u.nidn', $term);
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
	function perwalian_get_datatables(){
		$term = $_REQUEST['search']['value'];   
		$this->perwalian_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	function perwalian_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->perwalian_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}
	public function perwalian_count_all(){
	  $this->db->from($this->table);
	  return $this->db->count_all_results();  
	}

	function count_college(){
	$query = $this->db->get('ms_users_college');
	return $query->num_rows();
	}

	function count_dosen(){
		$this->db->where('kode_role','DSN');
	$query = $this->db->get('ms_users_staff');
	return $query->num_rows();
	}
	function count_perwali($wali_donsen){
	$this->db->where('id_wali',$wali_donsen);
	$query = $this->db->get('ms_users_college');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

	function get_staff_detail($nidn){
		$this->db->select('*');
		$this->db->from('ms_users_staff as staff');
		$this->db->join('ms_prodi', 'ms_prodi.id = staff.id_prodi','left');
		$this->db->where('nidn',$nidn);
		$query = $this->db->get();
		return $query->result();
	}
	function get_college_unselect($prod,$nidn){
		$this->db->select('*');
		$this->db->from('ms_users_college as college');
		$this->db->where('id_prodi',$prod);
		$this->db->where('id_wali !=',$nidn);
		$this->db->where('id_wali ','');
		$query = $this->db->get();
		return $query->result();
	}
	function get_college_selected($nidn){
		$this->db->select('*');
		$this->db->from('ms_users_college as college');
		$this->db->where('id_wali =',$nidn);
		$query = $this->db->get();
		return $query->result();
	}

    function proses_selected_college($nim,$nidn){
            $data  = array(
                'id_wali' => $nidn,
            );
            $this->db->where('nim',$nim);
            $this->db->update('ms_users_college', $data);
    }
    function proses_notselected_college($not_nim,$nidn){
            $data  = array(
                'id_wali' => '',
            );
            $this->db->where('nim',$not_nim);
            $this->db->update('ms_users_college', $data);
    }
}