 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		$data['content']			=	'college/page/dashboard';
		$data['title']				=	'Halaman Mahasiswa - Dashboard';
		$data['user']				= 	$this->Mcollege->get_user($sess_no);
		$this->load->view('college/app', $data);

	}
}