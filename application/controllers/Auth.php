 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{

		$data['title']				=	'Halaman Login';
		$this->load->view('auth', $data);
	}

	public function proses_login(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[30]', array('required' => '{field} Harus Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[30]', array('required' => '{field} Harus Diisi'));
		if ($this->form_validation->run())
                {
                	$username = $this->input->post('username');
					$password = sha1($this->input->post('password', TRUE));

					$data = $this->Mauth->login($username, $password);

					if($data){
						foreach($data as $row) {

		                //looping data user
		                $user = array(
		                    'id'   => $row->id,
		                    'no_unique'   => $row->no_unique,
		                    'username'   => $row->username,
		                    'password'   => $row->password,
		                    'role'  => $row->role,
		                );
                        $this->session->set_userdata($user);
                    }
						$msg = array('success' => true,
									 'username' => '',
									 'password' => '');
						
					}else{
						$msg = array('error' => true,
                    				'password' => 'Password salah',
                    				);
					}
					echo json_encode($msg); 

					
                }else if($this->form_validation->run() == false) {

						
                	   $msg = array('error' => true,
                    				'username' => form_error('username'),
                    				'password' => form_error('password'),
                    				);
                    echo json_encode($msg);

                }else{

                	   $msg = array('error' => true,
                    				'username' => '',
                    				'password' => '',
                    				);
                    echo json_encode($msg);
                }
		
	}

	public function akses(){
		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		if ($sess == 'ADM'){
			redirect('admin/dashboard');
		}else if($sess == 'BKU' ){
			redirect('dosen/dashboard');
		}else if($sess == 'DSN' ){
			redirect('dosen/dashboard');
		
		}else if($sess == 'MHS'){
			redirect('college/dashboard');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
}