 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perwalian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$role = $this->session->userdata('role');
		$data['content']			=	'dosen/page/perwalian';
		$data['title']				=	'Halaman Dosen - Perwalian';
		$data['page']				=	'Perwalian Mahasiswa';
		$this->load->view('dosen/app', $data);
		
	}

	public function list_table()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->perwalian_get_datatables($nidn);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo_college;
			$report = base_url('dosen/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('dosen/konseling/detail_consult/').$isi->id_consult;
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$status = '<span class="label label-success mr-2">Diterima</span>';
				$aksi = '<a data-id="2" class="btn btn-primary btn-sm start_konseling" href="javascript:void(0)" 
						onclick="start_konseling('.$isi->id_consult.')"><i class="fa fa-comment-dots"></i> Mulai Konseling</a>';
			}else if($stat == '2'){
				$status = '<span class="label label-primary mr-2">Progress</span>';
				$aksi = '<a data-id="2" class="btn btn-primary btn-sm start_konseling" href="javascript:void(0)" 
						onclick="start_konseling('.$isi->id_consult.')"><i class="fa fa-comment-dots"></i> Chat</a>';
			}else if($stat == '3'){
				$status = '<span class="label label-success mr-2">Selesai</span>';
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Lihat Hasil</a>';
			}else if($stat == '4'){
				$status = '<span class="label label-danger mr-2">Ditolak</span>';
				$aksi = '<a data-id="'.$isi->id_consult.'" class="btn btn-danger btn-sm acc_konseling" href="javascript:void(0)" 
						onclick="acc_konseling(5)">Batalkan</a>';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '<a data-id="'.$isi->id_consult.'" class="btn btn-primary btn-sm acc_konseling" href="javascript:void(0)" 
						onclick="acc_konseling(1)">Terima</a>
						<a data-id="'.$isi->id_consult.'" class="btn btn-danger btn-sm acc_konseling" href="javascript:void(0)" 
						onclick="acc_konseling(4)">Tolak</a>';
			}

			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<div class="ml-2">
                        <input type="checkbox" class="check_delete_konseling" id="check_delete_konseling" value="'.$isi->id_consult.'">
                       </div>
                        ';
            $row[] = '<a class="text-primary "  href="'.$detail_consult.'" ><i class="fas fa-eye"></i></a>';
			$row[] = '<img src="'.$photo.'" alt="user"
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
						"recordsTotal" => $this->Mdosen->perwalian_count_all(),
						"recordsFiltered" => $this->Mdosen->perwalian_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
}