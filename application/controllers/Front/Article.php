 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{
		$data['content']			=	'front/page/article';
		$data['title']				=	'Artikel';
		$data['page']				=	'E-Counseling STMIK BANDUNG';
		$data['breadcumbs']			=	'Artikel';
		$data['article']			= 	$this->Marticle->get_article();
		$this->load->view('front/app', $data);
	}

	public function detail_article($id_article)
	{
		$data['content']			=	'front/page/detail_article';
		$data['title']				=	'Artikel';
		$data['page']				=	'E-Counseling STMIK BANDUNG';
		$data['breadcumbs']			=	'Detail Artikel';
		$data['article']			= 	$this->Marticle->get_article_id($id_article);
		$this->load->view('front/app', $data);
	}
}
