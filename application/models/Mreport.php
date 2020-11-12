<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mreport extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	public function get_consult_byid($id_consult){
 		$this->db->select('*, c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
		$this->db->from('ms_consult as c');
		$this->db->where('c.id',$id_consult);
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi ','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');
		$query = $this->db->get();
 		return $query->result();
 	}
 	public function get_chat_byid($id_consult){
 		$this->db->select('*,cc.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, college.name as name_college, college.photo as photo_college');
		$this->db->from('ms_consult_chat as cc');
		$this->db->where('cc.id_consult',$id_consult);
		$this->db->join('ms_users_staff as staff','staff.nidn = cc.id_user','left');
		$this->db->join('ms_users_college as college','college.nim = cc.id_user','left');
		$query = $this->db->get();
 		return $query->result();
 	}

 	public function get_report_bycollege($nidn){
        $this->db->select('*');
        $this->db->from('ms_consult as c');
        $this->db->where('c.nidn',$nidn);
        $this->db->join('ms_users_college as college','college.nim = c.nim','left');
        $this->db->group_by('name');
        $query = $this->db->get();
 		return $query->result();
    }

    public function report_all($nidn){
        $this->db->select('*,c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
        $this->db->from('ms_consult as c');
        $this->db->where('c.nidn',$nidn);
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi ','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');	
		$this->db->order_by('date','DESC');
        $query = $this->db->get();
 		return $query->result();
    }

    public function report_all_college($nim,$nidn){
        $this->db->select('*,c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
        $this->db->from('ms_consult as c');
        $this->db->where('c.nidn',$nidn);
        $this->db->where('c.nim',$nim);
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi ','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');	
		$this->db->order_by('date','DESC');
        $query = $this->db->get();
 		return $query->result();
    }

    public function get_report_wali_bycollege($nidn){
        $this->db->select('*');
        $this->db->from('ms_consult as c');
        $this->db->join('ms_users_college as college','college.nim = c.nim','left');
        $this->db->where('college.id_wali',$nidn);
        $this->db->group_by('name');
        $query = $this->db->get();
 		return $query->result();
    }

    public function report_all_wali($nidn,$nim){
        $this->db->select('*,c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
        $this->db->from('ms_consult as c');
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.id_wali = c.nidn','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi ','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');	
        $this->db->where('c.nim',$nim);
		$this->db->order_by('date','DESC');
        $query = $this->db->get();
 		return $query->result();
    }

    public function report_all_college_wali($nim,$nidn){
        $this->db->select('*,c.id as id_consult, staff.name as name_staff, staff.photo as photo_staff, staff.email as email_staff, staff.id_prodi as id_prodi_staff,  staff.no_telp as no_telp_staff, staff.gender as gender_staff , 
 			college.name as name_college, college.photo as photo_college , college.email as email_college, college.no_telp as no_telp_college, college.gender as gender_college , college.id_prodi as id_prodi_college');
        $this->db->from('ms_consult as c');
		$this->db->join('ms_users_staff as staff','staff.nidn = c.nidn','left');
		$this->db->join('ms_users_college as college','college.nim = c.nim','left');
		$this->db->join('ms_prodi as prodi','prodi.id = college.id_prodi ','left');
		$this->db->join('ms_role as role','role.kode_role = staff.kode_role','left');
		$this->db->join('ms_consult_selection as cs','cs.kode_selection = c.kode_selection','left');
		$this->db->join('ms_consult_status as css','css.id = c.id_consult_status','left');
		$this->db->where('c.nim',$nim);
		$this->db->order_by('date','DESC');
        $query = $this->db->get();
 		return $query->result();
    }


}