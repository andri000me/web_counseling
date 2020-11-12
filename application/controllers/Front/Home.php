 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['content']			=	'front/page/home';
		$data['title']				=	'Halaman Profile';
		$data['page']				=	'E-Counseling STMIK BANDUNG';
		$data['article']			= 	$this->Marticle->get_article_limit();
		$this->load->view('front/app', $data);
	}
}
