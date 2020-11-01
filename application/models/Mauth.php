<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mauth extends CI_Model {

		public function login($username, $password){
			$query = $this->db->get_where('ms_auth', array('username'=>$username, 'password'=>$password));
			return $query->result();
		}

	}
?>