 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function konseling()
	{

		$data['content']			=	'admin/page/konseling';
		$data['title']				=	'Halaman Admin - Konseling';
		$data['page']				=	'Konseling';
		$this->load->view('admin/app', $data);
		
		}

	public function pengajuan_konseling()
	{

		$data['content']			=	'admin/page/pengajuan_konsult';
		$data['title']				=	'Halaman Admin - Pengajuan Konseling';
		$data['page']				=	'Pengajuan Konseling';
		$this->load->view('admin/app', $data);
		
		}
	public function list_pengajuan_konseling()
	{
		$list = $this->Mpengajuan_konseling->pengajuan_konseling_get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
			}
			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<div class="ml-2">
                        <input type="checkbox" class="check_delete_pengajuan" id="check_delete_pengajuan" value="'.$isi->id_consult.'">
                       </div>
                        ';
            $row[] = '<a class="text-primary "  href="javascript:void(0)" 
						onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fas fa-eye"></i></a>';
			$row[] = '<small>'.$isi->name;
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = '	<a class="btn btn-primary btn-sm" href="javascript:void(0)" 
						onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fa fa-check"></i></a>
                      	<a class="btn btn-danger btn-sm" href="javascript:void(0)" 
                       	onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fa fa-times"></i></a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mpengajuan_konseling->pengajuan_konseling_count_all(),
						"recordsFiltered" => $this->Mpengajuan_konseling->pengajuan_konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function orderby_pengajuan()
	{	
		$id = $this->input->post('id');
		$list = $this->Mpengajuan_konseling->orderby_pengajuan_get_datatables($id);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
			}
			$str = $isi->date;
			$time = date('g:i A', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<div class="ml-2">
                        <input type="checkbox" class="check_delete_pengajuan" id="check_delete_pengajuan" value="'.$isi->id_consult.'">
                      </div>
                        ';
            $row[] = '<a class="text-primary "  href="javascript:void(0)" 
						onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fas fa-eye"></i></a>';
			$row[] = '<small>'.$isi->name;
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = ' <a class="btn btn-primary btn-sm" href="javascript:void(0)" 
						onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fa fa-check"></i></a>
                       <a class="btn btn-danger btn-sm" href="javascript:void(0)" 
                       	onclick="acc_pengajuan('."'".$isi->id."'".')"><i class="fa fa-times"></i></a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mpengajuan_konseling->pengajuan_konseling_count_all(),
						"recordsFiltered" => $this->Mpengajuan_konseling->pengajuan_konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	function delete_pengajuan()
	{
	  if($this->input->post('checkbox_value')){

	  	 	$id = $this->input->post('checkbox_value');
	   		for($count = 0; $count < count($id); $count++) {
			    $this->Mpengajuan_konseling->delete_pengajuan($id[$count]);
			   }
	  }
	 }

	 //============================= perwalian mahasiswa ==================================


	 public function perwalian()
	{

		$data['content']			=	'admin/page/perwalian';
		$data['title']				=	'Halaman Admin - Perwalian';
		$data['page']				=	'Perwalian Mahasiswa';
		$data['count_college']		=	$this->Mkonseling->count_college();
		$data['count_dosen']		=	$this->Mkonseling->count_dosen();
		$this->load->view('admin/app', $data);
		
		}

	public function list_perwalian()
	{
		$list = $this->Mkonseling->perwalian_get_datatables();
		$data = array();
		$url =  base_url();
		$no = $_POST['start'];
		foreach ($list as $isi) {
			$wali_dosen = $isi->nidn;
			$count_perwali = $this->Mkonseling->count_perwali($wali_dosen);
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
			$row[] = '<a class="btn btn-sm btn-primary" href="'.$url.'admin/konseling/select_wali/'.$isi->nidn.'">Perwalian</a>';

			//add html for action
					
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mkonseling->perwalian_count_all(),
						"recordsFiltered" => $this->Mkonseling->perwalian_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	//========== select perwalianj ====================
	public function select_wali($nidn)
	{	
		$user_staff = $this->Mkonseling->get_staff_detail($nidn);
		foreach ($user_staff as $user) {
			$prod = $user->id_prodi;
			$nidn = $user->nidn;
		}
		$data['content']			=	'admin/page/select_wali';
		$data['title']				=	'Halaman Admin - Perwalian';
		$data['page']				=	'Pemilihan Perwalian';
		$data['staff']				=	$this->Mkonseling->get_staff_detail($nidn);
		$data['college_unselect']	=	$this->Mkonseling->get_college_unselect($prod,$nidn);
		$data['college_selected']	=	$this->Mkonseling->get_college_selected($nidn);
		$this->load->view('admin/app', $data);
		
		}

	public function proses_selected(){
		
					$nidn = $this->input->post('nidn');
	  	 	$nim = $this->input->post('nim');
	  	 	$not_nim = $this->input->post('not_nim');
	  	 	for($count = 0; $count < count($nim); $count++) {
			    $this->Mkonseling->proses_selected_college($nim[$count],$nidn);
			   }
	  
	  	 	for($count = 0; $count < count($not_nim); $count++) {
			    $this->Mkonseling->proses_notselected_college($not_nim[$count],$nidn);
			   }
	   		
	}
}