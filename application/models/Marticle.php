<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marticle extends CI_Model {

	var $table = 'ms_article';
	var $order = array('a.date' => 'DESC'); // default order 

	public function __construct()
	{
		parent::__construct();
	}

	private function article_datatables_query($term=''){ //term is value of $_REQUEST['search']['value']
		$column = array('a.title','a.author','a.content','a.id');
		$this->db->select('*,a.id as id_article');
		$this->db->from('ms_article as a');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = a.author','left');
		$this->db->group_start();
		$this->db->like('a.id', $term);
		$this->db->like('a.title', $term);
		$this->db->like('a.author', $term);
		$this->db->like('a.content', $term);
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
	function article_get_datatables(){
		$term = $_REQUEST['search']['value'];   
		$this->article_datatables_query($term);
		if($_REQUEST['length'] != -1)
		$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		$query = $this->db->get();
		return $query->result(); 
	}

	function article_count_filtered(){
	  $term = $_REQUEST['search']['value']; 
	  $this->article_datatables_query($term);
	  $query = $this->db->get();
	  return $query->num_rows();  
	}

	public function article_count_all(){
	  $this->db->from($this->table);
	  return $this->db->count_all_results();  
	}


	public function update_status($id,$value)
	{
		$this->db->where('id', $id);
		$this->db->update('ms_article',$value);
	}

	public function delete_article($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function get_article_dashboard(){
		$this->db->select('*,a.id as id_article');
		$this->db->from('ms_article as a');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = a.author','left');
		$this->db->order_by('a.date','DESC');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_article(){
		$this->db->select('*,a.id as id_article');
		$this->db->from('ms_article as a');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = a.author','left');
		$this->db->where('a.status','1');
		$this->db->order_by('a.date','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_article_id($id_article){
		$this->db->select('*,a.id as id_article');
		$this->db->from('ms_article as a');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = a.author','left');
		$this->db->where('a.status','1');
		$this->db->where('a.id',$id_article);
		$this->db->order_by('a.date','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_article_limit(){
		$this->db->select('*,a.id as id_article');
		$this->db->from('ms_article as a');
		$this->db->join('ms_users_staff as staff', 'staff.nidn = a.author','left');
		$this->db->where('a.status','1');
		$this->db->order_by('a.date','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
}