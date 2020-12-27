 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	//---------------staff------------------

		public function data_user()
	{

		$data['content']			=	'admin/page/data_user_staff';
		$data['title']				=	'Halaman Admin - Data Pendidik';
		$data['page']				=	'Data Pendidik';
		$data['role']				=	$this->Muser->get_role_staff();
		$data['prodi']				=	$this->Muser->get_prodi_select();
		$this->load->view('admin/app', $data);
		
		}

		public function list_user()
	{
		$list = $this->Muser->user_get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $isi) {
			$base_url =  base_url();
			$photo =  base_url().$isi->photo;
			$no++;
			$row = array();
			$row[] = '<div class="btn-group">
					    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        <i class="ti-settings"></i>
					    </button>
					    <div class="dropdown-menu ">
					    	<a class="dropdown-item" href="'.$base_url.'Admin/user/detail_user/'.$isi->id_users.'"><i class="mdi mdi-eye-outline"></i> Detail</a>
					        <a class="dropdown-item" href="javascript:void(0)" onclick="edit_user('."'".$isi->id_users."'".')"><i class="mdi mdi-grease-pencil"></i> Edit</a>
					        <a class="dropdown-item" href="javascript:void(0)" onclick="delete_user('."'".$isi->nidn."'".')"><i class="mdi mdi-delete"></i> Hapus</a>
					     </div>';

			$row[] = '<img src="'.$photo.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name.'';
			$row[] = '<small>'.$isi->nidn;
			$row[] = '<small>'.$isi->role;
			$row[] = '<small>'.$isi->prodi;
			$row[] = '<small>'.$isi->email;
			$row[] = '<small>'.$isi->gender;
			$row[] = '<small>'.$isi->no_telp;

			//add html for action
					
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Muser->user_count_all(),
						"recordsFiltered" => $this->Muser->user_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//report data user

	public function report_data_user($kode_role){
		$data['data'] 		= $this->Muser->report_data_user($kode_role);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('admin/report/report_data_user', $data);
	}

	//crud
	function get_prodi(){

		$id_role=$this->input->post('id_role');
        $data=$this->Muser->get_prodi($id_role);
        echo json_encode($data);
	}
	//add user
	public function add_user(){
			$this->form_validation->set_rules('name', 'Nama', 'required|max_length[30]', array('required' => '{field} Harus Diisi',));
			$this->form_validation->set_rules('nidn', 'NIDN', 'trim|is_unique[ms_users_staff.nidn]|required|max_length[20]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar'
												));
			$this->form_validation->set_rules('email', 'Email', 'trim|is_unique[ms_users_staff.email]|valid_email|required|max_length[30]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar',
													'valid_email' => 'Email Tidak Valid'
												));
			$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
			$this->form_validation->set_rules('role', 'Hak Akses', 'required', 
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
                    				'nidn' => form_error('nidn'),
                    				'email' => form_error('email'),
                    				'gender' => form_error('gender'),
                    				'role' => form_error('role'),
                    				'no_telp' => form_error('no_telp'),
                    				);
                        echo json_encode($msg);
                }
             else if($this->form_validation->run())
             	{
			                $nidn = $this->input->post("nidn", true);
			                if($this->input->post("prodi") != 0 ){
			                	$prodi = $this->input->post('prodi');
			                }else{
			                	$prodi = '99';
			                }
							$data = array(
									'id'		=> '',
									'name' => $this->input->post('name'),
									'nidn' => $this->input->post('nidn'),
									'email' => $this->input->post('email'),
									'gender' => $this->input->post('gender'),
									'kode_role' => $this->input->post('role'),
									'id_prodi' => $prodi,
									'no_telp' => $this->input->post('no_telp'),
									'id_users_status' => '1',
									'photo' => 'assets/assets/images/logo/d2.jpg',
								);
							$login = array(
									'id'		=> '',
									'no_unique' => $this->input->post('nidn'),
									'username' => $this->input->post('nidn'),
									'password'=> sha1($this->input->post('nidn',TRUE)),
									'role' => $this->input->post('role'),
								);
							$auth = $this->db->insert('ms_auth',$login);
							$add_user = $this->Muser->add_user($data);
							echo json_encode(array("success" => TRUE));
			           
            }


	}
	public function get_user($id)
	{
		$data = $this->Muser->get_user_edit($id);
		echo json_encode($data);
	}
	public function edit_user()
	{		
			$id = $this->input->post('id');
			$nidn = $this->input->post('nidn');
			$email = $this->input->post('email');
			$ori_email = $this->db->query("SELECT email FROM ms_users_staff WHERE id = $id ")->row()->email ;
			$ori_nidn = $this->db->query("SELECT nidn FROM ms_users_staff WHERE id = $id")->row()->nidn ;
			if ($email != $ori_email) {
			   	$this->form_validation->set_rules('email', 'Email', 'trim|is_unique[ms_users_staff.email]|valid_email|required|max_length[40]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar',
													'valid_email' => 'Email Tidak Valid'
												));
			}
			if ($nidn != $ori_nidn) {
			   	$this->form_validation->set_rules('nidn', 'NIDN', 'trim|is_unique[ms_users_staff.nidn]|required|max_length[30]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar'
												));
			
			}
			
			$this->form_validation->set_rules('name', 'Nama', 'required|max_length[30]', array('required' => '{field} Harus Diisi',));
			
			$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
			$this->form_validation->set_rules('role', 'Hak Akses', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
			$this->form_validation->set_rules('prodi', 'Prodi', 'required', 
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
                    				'nidn' => form_error('nidn'),
                    				'email' => form_error('email'),
                    				'gender' => form_error('gender'),
                    				'role' => form_error('role'),
                    				'prodi' => form_error('prodi'),
                    				'no_telp' => form_error('no_telp'),
                    				);
                        echo json_encode($msg);
                }
			else if($this->form_validation->run())
	             	{
								$data = array(
										'name' => $this->input->post('name'),
										'nidn' => $this->input->post('nidn'),
										'email' => $this->input->post('email'),
										'gender' => $this->input->post('gender'),
										'kode_role' => $this->input->post('role'),
										'id_prodi' => $this->input->post('prodi'),
										'no_telp' => $this->input->post('no_telp'),
										'id_users_status' => '1',
									);
								$auth = array(
									'no_unique' => $nidn,
									'username' => $nidn,
									'password'=> sha1($this->input->post('nidn',TRUE)),
									'role' => $this->input->post('role'),
								);
								$wali = array(
									'id_wali' => $nidn,
								);
		$this->Muser->edit_wali(array('id_wali' => $ori_nidn), $wali);	
		$this->Muser->edit_auth(array('no_unique' => $ori_nidn), $auth);						
		$this->Muser->edit_user(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("success" => TRUE));
		}
	}
	
	public function delete_user($nidn)
	{
		$data = array('id_wali' => '', );
		$this->Muser->delete_wali($nidn,$data);
		$this->Muser->delete_user($nidn);
		echo json_encode(array("status" => TRUE));
	}

	public function detail_user ($id_users)
	{
		$data['content']			=	'admin/page/detail_user';
		$data['title']				=	'Halaman Admin - Detail User';
		$data['page']				=	'Detail User';
		$data['user']	=	$this->Muser->get_detail_user($id_users);
		$this->load->view('admin/app', $data);
	}


	//==== mahasiswa ====

	public function data_user_college()
	{

		$data['content']			=	'admin/page/data_user_college';
		$data['title']				=	'Halaman Admin - Data Mahasiswa';
		$data['page']				=	'Data Mahasiswa';
		$this->load->view('admin/app', $data);
		
		}

	public function list_user_college()
	{
		$list = $this->Muser->college_get_datatables();
		$data = array();
		
		$no = $_POST['start'];
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo;
			$base_url = base_url();	
			$no++;
			$row = array();
			$row[] = '<div class="btn-group">
					    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        <i class="ti-settings"></i>
					    </button>
					    <div class="dropdown-menu ">
					    	<a class="dropdown-item" href="'.$base_url.'Admin/user/detail_college/'.$isi->id_college.'"><i class="mdi mdi-eye-outline"></i> Detail</a>
					        <a class="dropdown-item" href="javascript:void(0)" onclick="edit_college('."'".$isi->id_college."'".')"><i class="mdi mdi-grease-pencil"></i> Edit</a>
					        <a class="dropdown-item" href="javascript:void(0)" onclick="delete_college('."'".$isi->nim."'".')"><i class="mdi mdi-delete"></i> Hapus</a>
					     </div>';

			$row[] = '<img src="'.$photo.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name.'';
			$row[] = '<small>'.$isi->nim;
			$row[] = '<small>'.$isi->prodi;
			$row[] = '<small>'.$isi->generation;
			$row[] = '<small>'.$isi->gender;
			$row[] = '<small>'.$isi->email;
			$row[] = '<small>'.$isi->no_telp;

			//add html for action
					
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Muser->college_count_all(),
						"recordsFiltered" => $this->Muser->college_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//add user
	public function add_college(){
			$this->form_validation->set_rules('name', 'Nama', 'required|max_length[30]', array('required' => '{field} Harus Diisi',));
			$this->form_validation->set_rules('nim', 'NIM', 'trim|is_unique[ms_users_college.nim]|required|max_length[20]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar'
												));

			$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
			 if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                    				'name' => form_error('name'),
                    				'nim' => form_error('nim'),
                    				'gender' => form_error('gender'),
                    				);
                        echo json_encode($msg);
                }
             else if($this->form_validation->run())
             	{
			                $nim = $this->input->post("nim", true);
			                $prodi=substr($nim,0,2);
			                $ang=substr($nim,2,2);
			                $angkatan = '20'.$ang;
							$data = array(
									'id'		=> '',
									'nim' => $this->input->post('nim'),
									'name' => $this->input->post('name'),
									'gender' => $this->input->post('gender'),
									'kode_role' => 'MHS',
									'id_prodi' => $prodi ,
									'id_users_status' => '1',
									'generation' => $angkatan,
									'photo' => 'assets/assets/images/logo/d1.jpg',
								);
							$login = array(
									'id'		=> '',
									'no_unique' => $this->input->post('nim'),
									'username' => $this->input->post('nim'),
									'password'=> sha1($this->input->post('nim',TRUE)),
									'role' => 'MHS',
								);
							$auth = $this->db->insert('ms_auth',$login);
							$add_college = $this->Muser->add_college($data);
							echo json_encode(array("success" => TRUE));
			           
            }


	}

	public function detail_college ($id_college)
	{
		$data['content']			=	'admin/page/detail_college';
		$data['title']				=	'Halaman Admin - Detail Mahasiswa';
		$data['page']				=	'Detail Mahasiswa';
		$data['user']				=	$this->Muser->get_detail_college($id_college);
		$this->load->view('admin/app', $data);
	}

	//EDIT COLLEGE
	public function get_college($id)
	{
		$data = $this->Muser->get_college_edit($id);
		echo json_encode($data);
	}

	public function edit_college()
	{		
			$id = $this->input->post('id');
			$nim = $this->input->post('nim');
			$prodi=substr($nim,0,2);
            $ang=substr($nim,2,2);
            $angkatan = '20'.$ang;
			$ori_nim = $this->db->query("SELECT nim FROM ms_users_college WHERE id = $id")->row()->nim ;
			if ($nim != $ori_nim) {
			   	$this->form_validation->set_rules('nim', 'NIM', 'trim|is_unique[ms_users_college.nim]|required|max_length[30]', 
												array(
													'required' => '{field} Harus Diisi',
													'is_unique' => '{field} Telah Terdaftar'
												));
			
			}
			
			$this->form_validation->set_rules('name', 'Nama', 'required|max_length[30]', array('required' => '{field} Harus Diisi',));
			
			
			if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                    				'name' => form_error('name'),
                    				'nim' => form_error('nim'),
                    				);
                        echo json_encode($msg);
                }
			else if($this->form_validation->run())
	             	{
								$data = array(
									'nim' => $this->input->post('nim'),
									'name' => $this->input->post('name'),
									'gender' => $this->input->post('gender'),
									'email' => $this->input->post('email'),
									'no_telp' => $this->input->post('no_telp'),
									'kode_role' => 'MHS',
									'id_prodi' => $prodi ,
									'id_users_status' => '1',
									'generation' => $angkatan,
									'photo' => 'assets/assets/images/logo/d1.jpg',
									);
								$auth = array(
									'no_unique' => $nim,
									'username' => $nim,
									'password'=> sha1($this->input->post('nim',TRUE)),
									'role' => 'MHS',
								);
		$this->Muser->edit_auth(array('no_unique' => $ori_nim), $auth);						
		$this->Muser->edit_college(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("success" => TRUE));
		}
	}

	public function delete_college($nim)
	{
		$this->Muser->delete_college($nim);
		echo json_encode(array("status" => TRUE));
	}


}