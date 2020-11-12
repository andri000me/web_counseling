 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function count_consult()
	{
		$nidn = $this->session->userdata('no_unique');
		$count_consult = $this->Mnotif->count_consult($nidn);
		$data['count_consult']		= 	$count_consult;

		echo json_encode($data);
	}

	public function count_message()
	{
		$nidn = $this->session->userdata('no_unique');
		$count_message = $this->Mnotif->count_message();
		$data['count_message']		= 	$count_message;

		echo json_encode($data);
	}

}
