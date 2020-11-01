<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

	var $table = 'ms_users_staff';
	var $table_college = 'ms_users_college';
	var $order = array('u.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
	}

	private function user_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('u.id', 'u.nidn', 'u.name', 'u.email');
		$this->db->select('*,u.id as id_users');
		$this->db->from('ms_users_staff as u');
		$this->db->join('ms_role as r', 'r.kode_role = u.kode_role','left');
		$this->db->join('ms_prodi', 'ms_prodi.id = u.id_prodi','left');
		$this->db->like('u.name', $term);
		$this->db->or_like('u.nidn', $term);
		$this->db->or_like('u.email', $term);
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
	function user_get_datatables(){
		$term = $_REQUEST['search']['value'];   
		$this->user_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	function user_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->user_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}

	public function user_count_all(){
	  $this->db->from($this->table);
	  return $this->db->count_all_results();  
	}

	public function add_user($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_detail_user($id_users){
		$this->db->select('*');
		$this->db->from('ms_users_staff as staff');
		$this->db->where('staff.id', $id_users);
		$this->db->join('ms_prodi as prodi', 'prodi.id = staff.id_prodi', 'LEFT');
		$this->db->join('ms_role as role', 'role.kode_role = staff.kode_role', 'LEFT');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_users($where){
		$this->db->from($this->table);
		$this->db->where($where);
		$query = $this->db->get();

		return $query;
	}
	public function get_user_edit($id)
	{
		$this->db->select('*,staff.id as id_users');
		$this->db->from('ms_users_staff as staff');
		$this->db->where('staff.id', $id);
		$this->db->join('ms_prodi as prodi', 'prodi.id = staff.id_prodi', 'LEFT');
		$this->db->join('ms_role as role', 'role.kode_role = staff.kode_role', 'LEFT');
		$query = $this->db->get();

		return $query->row();
	}

	public function edit_user($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function edit_auth($where, $auth)
	{
		$this->db->update('ms_auth', $auth, $where);
		return $this->db->affected_rows();
	}
	public function edit_wali($where, $wali)
	{
		$this->db->update('ms_users_college', $wali, $where);
		return $this->db->affected_rows();
	}


	public function delete_user($nidn)
	{
		$this->db->where('nidn', $nidn);
		$this->db->delete('ms_users_staff');
		$this->db->where('no_unique', $nidn);
		$this->db->delete('ms_auth');
	}

	function get_role_staff(){
        $this->db->where('ms_role.id !=', '6');
        return $this->db->from('ms_role')
            ->get()
            ->result();
    }
    function get_prodi_select(){
        $this->db->where('ms_prodi.id !=', '6');
        return $this->db->from('ms_prodi')
            ->get()
            ->result();
    }
    function get_prodi($id_role){
        $this->db->order_by('id', 'ASC');
        return $this->db->from('ms_prodi')
            ->get()
            ->result();

	}

	public function report_data_user(){
		$this->db->from('ms_users_staff as staff');
		$this->db->join('ms_prodi as prodi', 'prodi.id = staff.id_prodi', 'LEFT');
		$this->db->join('ms_role as role', 'role.kode_role = staff.kode_role', 'LEFT');
		$query = $this->db->get();
 		return $query->result();
 	}

	public function report_data_userbyrole($kode_role){
		$this->db->from('ms_users_staff as staff');
		$this->db->where('staff.kode_role', $kode_role);
		$this->db->join('ms_prodi as prodi', 'prodi.id = staff.id_prodi', 'LEFT');
		$this->db->join('ms_role as role', 'role.kode_role = staff.kode_role', 'LEFT');
		$query = $this->db->get();
 		return $query->result();
 	}

	


	//===========================college====================================

	private function college_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('u.id', 'u.nim', 'u.name', 'u.email');
		$this->db->select('*,u.id as id_college');
		$this->db->from('ms_users_college as u');
		$this->db->join('ms_prodi as i', 'i.id = u.id_prodi','left');
		$this->db->join('ms_role as r', 'r.kode_role = u.kode_role','left');
		$this->db->like('u.name', $term);
		$this->db->or_like('u.nim', $term);
		$this->db->or_like('u.email', $term);
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
	function college_get_datatables(){
		$term = $_REQUEST['search']['value'];   
		$this->college_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	function college_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->college_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}

	public function college_count_all(){
	  $this->db->from('ms_users_college');
	  return $this->db->count_all_results();  
	}

	function get_identity_college_list(){
        $query = $this->db->get('ms_identity_college');
        return $query->result();  
    }
 
    public function add_college($data)
	{
		$this->db->insert('ms_users_college', $data);
		return $this->db->insert_id();
	}

	public function get_detail_college($id_college){
		$this->db->select('*');
		$this->db->from('ms_users_college as college');
		$this->db->where('college.id', $id_college);
		$this->db->join('ms_prodi as prodi', 'prodi.id = college.id_prodi', 'LEFT');
		$this->db->join('ms_users_status as status', 'status.id = college.id_users_status', 'LEFT');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_college_edit($id)
	{
		$this->db->select('*,college.id as id_college');
		$this->db->from('ms_users_college as college');
		$this->db->where('college.id', $id);
		$this->db->join('ms_prodi as prodi', 'prodi.id = college.id_prodi', 'LEFT');
		$this->db->join('ms_users_status as status', 'status.id = college.id_users_status', 'LEFT');
		$query = $this->db->get();

		return $query->row();
	}

	public function edit_college($where, $data)
	{
		$this->db->update($this->table_college, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_college($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('ms_users_college');
		$this->db->where('no_unique', $nim);
		$this->db->delete('ms_auth');
	}

	public function report_data_college(){
		$this->db->from('ms_users_college as college');
		$this->db->join('ms_prodi as prodi', 'prodi.id = college.id_prodi', 'LEFT');
		$this->db->join('ms_users_status as status', 'status.id = college.id_users_status', 'LEFT');
		$query = $this->db->get();
 		return $query->result();
 	}


}