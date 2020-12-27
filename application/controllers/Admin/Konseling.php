 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$role = $this->session->userdata('role');
		$data['content']			=	'admin/page/konseling';
		$data['title']				=	'Halaman Admin - Konseling';
		$data['page']				=	'Konseling';
		$data['selection']			=	$this->Mdosen->get_consult_selection();
		$this->load->view('admin/app', $data);
		
		}


	//=============================== konseling table ======================================

	public function konseling()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Madmin->konseling_get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo_college =  base_url().$isi->photo_college;
			$photo_staff =  base_url().$isi->photo_staff;
			$report = base_url('Admin/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('Admin/konseling/detail_consult/').$isi->id_consult;
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}

			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<i class=" ti-arrow-circle-right"></i>
                        ';
            $row[] = '<img src="'.$photo_staff.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_staff.'';
			$row[] = '<img src="'.$photo_college.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_college.'';
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = $aksi;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Madmin->konseling_count_all(),
						"recordsFiltered" => $this->Madmin->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function filterby()
	{	
		$kode_selection = $this->input->post('kode_selection');
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Madmin->filterby_get_datatables($kode_selection);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo_college =  base_url().$isi->photo_college;
			$photo_staff =  base_url().$isi->photo_staff;
			$report = base_url('Admin/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('Admin/konseling/detail_consult/').$isi->id_consult;
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}

			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<i class=" ti-arrow-circle-right"></i>
                        ';
            $row[] = '<img src="'.$photo_staff.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_staff.'';
			$row[] = '<img src="'.$photo_college.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_college.'';
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = $aksi;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Madmin->konseling_count_all(),
						"recordsFiltered" => $this->Madmin->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function status_consult()
	{	

		$id_consult_status = $this->input->post('id_consult_status');
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Madmin->status_get_datatables($id_consult_status);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo_college =  base_url().$isi->photo_college;
			$photo_staff =  base_url().$isi->photo_staff;
			$report = base_url('Admin/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('Admin/konseling/detail_consult/').$isi->id_consult;
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Detail</a>';
			}

			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<i class=" ti-arrow-circle-right"></i>
                        ';
            $row[] = '<img src="'.$photo_staff.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_staff.'';
			$row[] = '<img src="'.$photo_college.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_college.'';
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = $aksi;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Madmin->konseling_count_all(),
						"recordsFiltered" => $this->Madmin->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


	//======================== report detail delete =============================
	//==================== detail konslutasi ========================
	public function detail_consult($id_consult){

		$data['detail_consult']		=	$this->Madmin->detail_consult($id_consult);
		$data['content']			=	'admin/page/detail_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Detail Konsultasi';
		$this->load->view('admin/app', $data);
	}
	//end

	function delete_konseling()
	{
	  if($this->input->post('checkbox_value')){

	  	 	$id = $this->input->post('checkbox_value');
	   		for($count = 0; $count < count($id); $count++) {
			    $this->Madmin->delete_konseling($id[$count]);
			}
	  }
	}

	public function report_consult($id){

		$data['report_consult']		=	$this->Madmin->report_consult($id);
		$data['file']				= 	$this->Madmin->get_file($id);
		$data['content']			=	'admin/page/report_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Rekap Hasil Konseling';
		$this->load->view('admin/app', $data);
	}

	public function historychatpdf($id_consult){
		$data['data'] 		= $this->Madmin->get_historychat($id_consult);
	    $this->load->library('Pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('admin/report/result_consult_pdf', $data);
	}



	 //============================= perwalian mahasiswa ==================================


	 public function perwalian()
	{

		$data['content']			=	'admin/page/perwalian';
		$data['title']				=	'Halaman Admin - Perwalian';
		$data['page']				=	'Perwalian Mahasiswa';
		$data['count_college']		=	$this->Madmin->count_college();
		$data['count_dosen']		=	$this->Madmin->count_dosen();
		$this->load->view('admin/app', $data);
		
		}

	public function list_perwalian()
	{
		$list = $this->Madmin->perwalian_get_datatables();
		$data = array();
		$url =  base_url();
		$no = $_POST['start'];
		foreach ($list as $isi) {
			$wali_admin = $isi->nidn;
			$count_perwali = $this->Madmin->count_perwali($wali_admin);
			$base_url =  base_url().$isi->photo;
			$no++;
			$row = array();
			
			$row[] = '<small>'.$no;
			$row[] = '<img src="'.$base_url.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name.'';
			$row[] = '<small>'.$isi->nidn;
			$row[] = '<small>'.$isi->prodi;
			$row[] = '<small>'.$isi->gender;
			$row[] = '<small>'.$count_perwali;
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$url.'Admin/konseling/select_wali/'.$isi->nidn.'">Perwalian</a>';

			//add html for action
					
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Madmin->perwalian_count_all(),
						"recordsFiltered" => $this->Madmin->perwalian_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//========== select perwalianj ====================
	public function select_wali($nidn)
	{	
		$user_staff = $this->Madmin->get_staff_detail($nidn);
		foreach ($user_staff as $user) {
			$prod = $user->id_prodi;
			$nidn = $user->nidn;
		}
		$data['content']			=	'admin/page/select_wali';
		$data['title']				=	'Halaman Admin - Perwalian';
		$data['page']				=	'Pemilihan Perwalian';
		$data['staff']				=	$this->Madmin->get_staff_detail($nidn);
		$data['college_unselect']	=	$this->Madmin->get_college_unselect($prod,$nidn);
		$data['college_selected']	=	$this->Madmin->get_college_selected($nidn);
		$this->load->view('admin/app', $data);
		
		}

	public function proses_selected(){
		
			$nidn = $this->input->post('nidn');
	  	 	$nim = $this->input->post('nim');
	  	 	$not_nim = $this->input->post('not_nim');
	  	 	for($count = 0; $count < count($nim); $count++) {
			    $this->Madmin->proses_selected_college($nim[$count],$nidn);
			   }
	  
	  	 	for($count = 0; $count < count($not_nim); $count++) {
			    $this->Madmin->proses_notselected_college($not_nim[$count],$nidn);
			   }
	   		
	}
}