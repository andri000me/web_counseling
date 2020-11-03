 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function profile_admin()
	{
		
		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		$data['users_staff']		=	$this->Mprofile->get_users_staff($sess_no);
		$data['auth']				=	$this->Mprofile->get_auth($sess_no);
		$data['content']			=	'profile/profile';
		$data['title']				=	'Halaman Profile';
		$data['page']				=	'Profil Saya';
		$this->load->view('admin/app', $data);
	}

	public function profile_dosen()
	{
		
		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		$data['content']			=	'profile/profile';
		$data['title']				=	'Halaman Profile';
		$this->load->view('dosen/app', $data);
	}


	public function change_profile()
	{		
			$no_unique = $this->session->userdata('no_unique');
			$email = $this->input->post('email');
			$ori_email = $this->db->query("SELECT email FROM ms_users_staff WHERE nidn = $no_unique ")->row()->email ;
			if ($email != $ori_email) {
			   	$this->form_validation->set_rules('email', 'Email', 'trim|is_unique[ms_users_staff.email]|valid_email|required|max_length[40]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar',
													'valid_email' => 'Email Tidak Valid'
												));
			}
			
			$this->form_validation->set_rules('name', 'Nama', 'required|max_length[30]', array('required' => '{field} Harus Diisi',));
			
			$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
			$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required|max_length[15]', 
												array(
													'required' => '{field} Harus Diisi',
												));
			if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                        			'name' => form_error('name'),
                    				'email' => form_error('email'),
                    				'gender' => form_error('gender'),
                    				'no_telp' => form_error('no_telp'),
                    				);
                        echo json_encode($msg);
                }
			else if($this->form_validation->run())
	             	{
								$data = array(
										'name' => $this->input->post('name'),
										'email' => $this->input->post('email'),
										'gender' => $this->input->post('gender'),
										'no_telp' => $this->input->post('no_telp'),
									);
		$this->Mprofile->change_profile($data,$no_unique);
		echo json_encode(array("success" => TRUE));
		}
	}


	public function change_auth()
	{		
			$no_unique = $this->input->post('no_unique');
			$username = $this->input->post('username');
			$ori_username = $this->db->query("SELECT username FROM ms_auth WHERE no_unique = $no_unique ")->row()->username ;
			if ($username != $ori_username) {
			   	$this->form_validation->set_rules('username', 'Username', 'trim|is_unique[ms_auth.username]|required|max_length[40]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar',
												));
			}
			
			$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[25]', 
												array(
													'required' => '{field} Harus Diisi',
												));
			if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                    				'username' => form_error('username'),
                    				'password' => form_error('password'),
                    				);
                        echo json_encode($msg);
                }
			else if($this->form_validation->run())
	             	{
								$data = array(
										'username' => $this->input->post('username'),
										'password' => sha1($this->input->post('password',TRUE)),
									);
		$this->Mprofile->change_auth($data,$no_unique);
		echo json_encode(array("success" => TRUE));
		}
	}

	public function change_photo()
	{

		$sess_no = $this->session->userdata('no_unique');
        $config['upload_path']          = './assets/user_profile/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('input_photo')) {
              $data_upload = $this->upload->data();
              $location = 'assets/user_profile/';
              //resize
             	$config['image_library']='gd2';
                $config['source_image']='./assets/user_profile/'.$data_upload['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 128;
                $config['height']= 128;
                $config['new_image']= './assets/user_profile/'.$data_upload['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

              $data = array(
		      'photo' => $location.$data_upload['file_name'],
		    );
             $query =  $this->Mprofile->change_photo($data,$sess_no);

          }
	}

}