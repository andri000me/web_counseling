<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcollege extends CI_Model {

	var $table = 'ms_consult';
	var $order = array('c.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
	}
	public function get_user($sess_no){ //term is value of $_REQUEST['search']['value']
		
		$this->db->select('*');
		$this->db->from('ms_users_college');
		$this->db->where('nim',$sess_no);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_consult_selection(){
		$this->db->select('*');
		$this->db->from('ms_consult_selection as selection');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_last_consult($sess_no){
		$this->db->select('*');
		$this->db->from('ms_consult as c');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = c.nidn','left');
		$this->db->join('ms_consult_selection as selection', 'selection.kode_selection = c.kode_selection','left');
		$this->db->where('c.nim',$sess_no);
		$this->db->limit(1);
		$this->db->order_by('c.date','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	private function konseling_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('staff.name', 'c.id_consult_status', 's.status', 'c.nidn');
		$this->db->select('*,c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, college.name as name_college, college.photo as photo_college');
		$this->db->from('ms_consult as c');
		$this->db->join('ms_users_college as college', 'college.nim = c.nim','left');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = c.nidn','left');
		$this->db->join('ms_consult_selection as selection', 'selection.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as s', 's.id = c.id_consult_status','left');
		$this->db->group_start();
		$this->db->like('c.id', $term);
		$this->db->or_like('c.nidn', $term);
		$this->db->or_like('s.status_consult', $term);
		$this->db->or_like('staff.name', $term);
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
	function konseling_get_datatables($nim){
		$term = $_REQUEST['search']['value'];   
		$this->konseling_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$this->db->where('c.nim',$nim);
		$query = $this->db->get();
		return $query->result(); 
	}

	//filter by

	function filterby_get_datatables($kode_selection,$nim){
		$term = $_REQUEST['search']['value'];   
		$this->konseling_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->where('c.nim',$nim);
		$this->db->where('c.kode_selection',$kode_selection);
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	function status_get_datatables($id_consult_status,$nim){
			$term = $_REQUEST['search']['value'];   
		$this->konseling_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->where('c.nim',$nim);
		$this->db->where('c.id_consult_status',$id_consult_status);
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result();

		
	}



	function konseling_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->konseling_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}

	public function konseling_count_all(){
	  $this->db->from($this->table);
	  return $this->db->count_all_results();  
	}


	public function delete_konseling($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	function get_selection(){
        return $this->db->from('ms_consult_selection')
            ->get()
            ->result();
    }
    function get_konselor($kode_selection){
		if ($kode_selection == 'SL008'){
			$this->db->where('kode_role ', 'BKU');
			return $this->db->from('ms_users_staff')
            ->get()
            ->result();
		}else{
			$this->db->where('kode_role ', 'DSN');
			return $this->db->from('ms_users_staff')
            ->get()
            ->result();
		}
        
    }


    //=== action consult

    function acc_konseling($id,$status){
            $data  = array(
                'id_consult_status' => $status,
            );
            $this->db->where('id',$id);
            $this->db->update('ms_consult', $data);
    }

    function start_konseling($id,$status){
            $data  = array(
                'id_consult_status' => $status,
            );
            $this->db->where('id',$id);
            $this->db->update('ms_consult', $data);
    }
    //==== pengajuan === 

     function get_college($nim){
     	$this->db->select('*');
		$this->db->from('ms_users_college');
		$this->db->where('nim', $nim);
    	$query = $this->db->get();
	  	return $query->result();  
	  }

	  function add_pengajuan($data){
	  	$this->db->insert('ms_consult', $data);
		return $this->db->insert_id();
	  }

	  //report consult

 	public function report_consult($id){
 		$this->db->select('*, c.id as id_consult,staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , staff.id_prodi as id_prodi_staff, 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
		$this->db->from('ms_consult as c');
		$this->db->where('c.id',$id);
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');

   		$query = $this->db->get();
 		return $query->result();
 	}
 	public function get_historychat($id_consult){
 		$this->db->select('*,cc.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, college.name as name_college, college.photo as photo_college');
		$this->db->from('ms_consult_chat as cc');
		$this->db->where('cc.id_consult',$id_consult);
		$this->db->join('ms_users_staff as staff','staff.nidn = cc.id_user','left');
		$this->db->join('ms_users_college as college','college.nim = cc.id_user','left');
		$query = $this->db->get();
 		return $query->result();
 	}

 	//detail consult
	public function detail_consult($id_consult){
 		$this->db->select('*, c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college ');
		$this->db->from('ms_consult as c');
		$this->db->where('c.id',$id_consult);
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
   		$query = $this->db->get();
 		return $query->result();
 	}

 	 //======== chat =========

    function get_id_consult($id){

    	$this->db->select('*');
		$this->db->from('ms_consult');
		$this->db->where('ms_consult.id',$id);
		$query = $this->db->get();
	 	return $query->result(); 
    }

    public function SendTxtMessage($data){
  		$res = $this->db->insert('ms_consult_chat', $data ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
	}

	public function GetReciverChatHistory($id_consult){


		$this->db->select('*, staff.name as name_staff, staff.photo as photo_staff, college.name as name_college, college.photo as photo_college');
		$this->db->from('ms_consult_chat as cc');
		$this->db->where('id_consult',$id_consult);
		$this->db->join('ms_users_staff as staff','staff.nidn = cc.id_user','left');
		$this->db->join('ms_users_college as college','college.nim = cc.id_user','left');
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
	}

	public function get_file($id){
		$this->db->select('*,cf.id as id_file, staff.name as name_staff, staff.photo as photo_staff, college.name as name_college, college.photo as photo_college');
		$this->db->from('ms_consult_file as cf');
		$this->db->where('id_consult',$id);
		$this->db->join('ms_users_staff as staff','staff.nidn = cf.id_user','left');
		$this->db->join('ms_users_college as college','college.nim = cf.id_user','left');
		$this->db->order_by('cf.id','DESC');
   		$query = $this->db->get();
 		return $query->result();
	}

		
	
	public function download_file($id_file){
	  $query = $this->db->get_where('ms_consult_file',array('id'=>$id_file));
	  return $query->row();
 	}

 	public function catatan($data,$id_consult){
 		 	$this->db->where('id',$id_consult);
            $this->db->update('ms_consult', $data);
 	}

 	public function deletefile($id){
 		$this->db->where('id',$id);
        $this->db->delete('ms_consult_file');
 	}
}