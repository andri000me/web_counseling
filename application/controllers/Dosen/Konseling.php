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
		$data['content']			=	'dosen/page/konseling';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Konseling';
		$data['selection']			=	$this->Mdosen->get_consult_selectionbyrole($role);
		$this->load->view('dosen/app', $data);
		
	}


	public function konseling()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->konseling_get_datatables($nidn);
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
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function filterby()
	{	
		$kode_selection = $this->input->post('kode_selection');
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->filterby_get_datatables($kode_selection,$nidn);
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
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function status_consult()
	{	

		$id_consult_status = $this->input->post('id_consult_status');
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->status_get_datatables($id_consult_status,$nidn);
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
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function notif_consult()
	{	

		$id_consult = $this->input->post('id_consult');
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->notif_consult_get_datatables($id_consult,$nidn);
		$data = array();
		$no = $_POST['start'];
		//update readed
		$this->Mnotif->update_readed_consult($id_consult);
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
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


	//==================== PERWALIAN MAHASISWA ======================
	public function perwalian()
	{
		
		$data['content']			=	'dosen/page/perwalian';
		$data['title']				=	'Halaman Perwalian';
		$data['page']				=	'Perwalian Mahasiswa';
		$this->load->view('dosen/app', $data);
		
	}

	public function list_perwalian()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->perwalian_get_datatables($nidn);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo_college =  base_url().$isi->photo_college;
			$photo_staff =  base_url().$isi->photo_staff;
			$report = base_url('dosen/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('dosen/konseling/detail_consult/').$isi->id_consult;
			$stat = $isi->id_consult_status;
			if($stat == '1'){
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$detail_consult.'"><i class="fas fa-file-alt"></i> Detail Konsultasi</a>';
				$text = 'Konsultasi bersama <b> '.$isi->name_staff.' </b> tentang <label class= "label label-primary">'.$isi->selection.'</label>
				Sedang berlangsung.
				';
			}else if($stat == '2'){
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$detail_consult.'"><i class="fas fa-file-alt"></i> Detail Konsultasi</a>';
				$text = 'Pengajuan konsultasi tentang <label class= "label label-primary">'.$isi->selection.'</label>
				Diterima oleh <b>  '.$isi->name_staff.' </b>.
				';
			}else if($stat == '3'){
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$report.'"><i class="fas fa-file-alt"></i> Lihat Hasil</a>';
				$text = 'Konsultasi bersama <b> '.$isi->name_staff.' </b> tentang <label class= "label label-primary">'.$isi->selection.'</label>
				Telah selesai dilaksanakan.
				';
			}else if($stat == '4'){
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$detail_consult.'"><i class="fas fa-file-alt"></i> Detail Konsultasi</a>';
				$text = 'Pengajuan konsultasi tentang <label class= "label label-primary">'.$isi->selection.'</label>
				Ditolak oleh <b>  '.$isi->name_staff.' </b>.
				';
			}else if($stat == '5'){
				$aksi = '<a class="btn btn-primary btn-sm" href="'.$detail_consult.'"><i class="fas fa-file-alt"></i> Detail Konsultasi</a>';
				$text = 'Membuat pengajuan konsultasi kepada 
				<b> '.$isi->name_staff.' </b>
				Tentang <label class= "label label-primary">'.$isi->selection.'</label>.
				';
			}

			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$no++;
			$row = array();
			$row[] = '<i class=" ti-arrow-circle-right"></i>
                        ';
			$row[] = '<small>'.$time;
			$row[] = '<img src="'.$photo_college.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_college.'';
			$row[] = $text;

			//add html for action
			$row[] = $aksi;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
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
		$data['content']			=	'dosen/page/select_wali';
		$data['title']				=	'Halaman Perwalian';
		$data['page']				=	'Pemilihan Perwalian';
		$data['staff']				=	$this->Mkonseling->get_staff_detail($nidn);
		$data['college_unselect']	=	$this->Mkonseling->get_college_unselect($prod,$nidn);
		$data['college_selected']	=	$this->Mkonseling->get_college_selected($nidn);
		$this->load->view('dosen/app', $data);
		
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


	//==================== detail konslutasi ========================
	public function detail_consult($id_consult){

		$data['detail_consult']		=	$this->Mdosen->detail_consult($id_consult);
		$data['content']			=	'dosen/page/detail_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Detail Konsultasi';
		$this->load->view('dosen/app', $data);
	}
	//end

	function delete_konseling()
	{
	  if($this->input->post('checkbox_value')){

	  	 	$id = $this->input->post('checkbox_value');
	   		for($count = 0; $count < count($id); $count++) {
			    $this->Mdosen->delete_konseling($id[$count]);
			}
	  }
	}

	function acc_konseling($status){
		$id = $this->input->post('id');
		$data = $this->Mdosen->acc_konseling($id,$status);
		echo json_encode($data);
	}

	function start_konseling($id){
		$status = $this->input->post('status');
		$data = $this->Mdosen->start_konseling($id,$status);
		echo json_encode($data);
	}

	//================== chat =======================


	public function chat($id){

		$data['id_consult']			=	$this->Mdosen->get_id_consult($id);
		$data['content']			=	'dosen/page/chat';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Chat Konseling';
		$data['file']				= 	$this->Mdosen->get_file($id);
		$this->load->view('dosen/app', $data);
	}

	public function send_text_message(){
		$post = $this->input->post();
		$messageTxt='NULL';
	
			$messageTxt = reduce_multiples($post['messageTxt'],' ');
		 
				$data=[
					'id_consult' => $post['id_consult'],
 					'id_user' => $post['id_user'],
					'message' =>   $messageTxt,
					'datesend' => date('Y-m-d H:i:s'), 
				];
		  
 				$query = $this->Mdosen->SendTxtMessage($data); 
 				$response='';
				if($query == true){
					$response = ['status' => 1 ,'message' => '' ];
				}else{
					$response = ['status' => 0 ,'message' => 'sorry we re having some technical problems. please try again !' 						];
				}
             
 		   echo json_encode($response);
	}


	public function get_chat($id_consult){
		$history = $this->Mdosen->GetReciverChatHistory($id_consult);
		//print_r($history);

		?>

			<ul class="chat-list">

		<?php
		foreach($history as $chat):
			
			$id_consult = $chat['id_consult'];
			$id_user = $chat['id_user'];
			$message = $chat['message'];
			$messagedatetime = date('d M H:i A',strtotime($chat['datesend']));
			$Logged_sender_id = $this->session->userdata['no_unique'];
			if($Logged_sender_id == $id_user)
			{
                $name = $chat['name_staff'];
                $photo = base_url().$chat['photo_staff'];
            }else{
                $name = $chat['name_college'];
                $photo = base_url().$chat['photo_college'];
            }

			
			
 		?>
        	
             <?php if($Logged_sender_id!=$id_user){?>     

                <!--chat Row -->
                <li class="chat-item">
                    <div class="chat-img"><img src="<?php echo $photo ?>" alt="user"></div>
                    <div class="chat-content">
                    	<h6 class="font-medium"><?=$name;?></h6>
                        <div class="box bg-light-info"><?=$message;?></div>
                    </div>
                    <div class="chat-time"><?=$messagedatetime;?></div>
                </li>

			<?php }else{?>
				 <li class="odd chat-item">
                    <div class="chat-content">
                        <div class="box bg-light-inverse"><?=$message;?></div>
                        <br>
                    </div>
                </li>

                    <?php } ?>
        
        <?php
		endforeach;
		?>
		</ul>
		<?php
 		
	}


	public function upload_file(){

		$id_consult = $_POST['id_consult'];
		$id_user = $_POST['id_user'];
		$datesend = date('Y-m-d H:i:s');

		$config['upload_path']          = './assets/file';
		$config['allowed_types']        = 'jpeg|jpg|png|txt|pdf|docx|xlsx|pptx|rtf';
 
		$this->upload->initialize($config);
 	
				
		if ( $this->upload->do_upload('file')){
				$values			=	array(	
								'id'			=> '',
								'id_consult'	=> $id_consult,
								'id_user'		=> $id_user,
								'file'			=>	$this->upload->data('file_name'),
								'datesend'		=> $datesend,

								
							);
				$this->db->insert('ms_consult_file',$values);
				$this->session->set_flashdata('alertupload',
				 '<div class="alert alert-success alertupload">
    				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
   					 <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> Data Berhasil Diupload
					</div>');
				redirect('dosen/konseling/chat/'.$id_consult);
		}else{
			 $this->session->set_flashdata('alertupload', 
			 	'<div class="alert alert-warning alertupload">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Upload Gagal</h3>'.$this->upload->display_errors().'</div>');
          redirect('dosen/konseling/chat/'.$id_consult);
		}
	}

	public function download_file($id_file)
	{		
		$val =  $this->Mdosen->download_file($id_file);
		$data = $val->file;
		force_download('./assets/file/'.$data , NULL);
	}

	public function catatan()
	{	
		$id_consult = $this->input->post('id_consult');
		$data =  array(
					  'catatan' => $this->input->post('text'),
					  'id_consult_status' => '3',
					   );
		$result = $this->Mdosen->catatan($data,$id_consult);
		echo json_encode($result);
	}

	public function deletefile(){
		$id = $this->input->post('id');
		$result = $this->Mdosen->deletefile($id);
		echo json_encode($result);

	}
	//================ end chat -=====================


	//report consult

	public function report_consult($id){

		$data['report_consult']		=	$this->Mdosen->report_consult($id);
		$data['file']				= 	$this->Mdosen->get_file($id);
		$data['content']			=	'dosen/page/report_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Rekap Hasil Konseling';
		$this->load->view('dosen/app', $data);
	}

	public function historychatpdf($id_consult){
		$data['data'] 		= $this->Mdosen->get_historychat($id_consult);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('dosen/report/result_consult_pdf', $data);
	}



	//Ketua konsult

	public function ketua_consult()
	{
		
		$data['content']			=	'dosen/page/konseling_ketua';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Report Konseling';
		$data['selection']			=	$this->Mdosen->get_consult_selection();
		$this->load->view('dosen/app', $data);
		
	}

	public function list_table_ketua()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Mdosen->ketua_get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo_college =  base_url().$isi->photo_college;
			$photo_staff =  base_url().$isi->photo_staff;
			$report = base_url('dosen/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('dosen/konseling/detail_consult/').$isi->id_consult;
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
			$row[] = '<img src="'.$photo_college.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_college.'';
			$row[] = '<img src="'.$photo_staff.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name_staff.'';
			$row[] = '<small>'.$isi->selection;
			$row[] = '<small>'.$status;
			$row[] = '<small>'.$time;

			//add html for action
			$row[] = $aksi;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Mdosen->konseling_count_all(),
						"recordsFiltered" => $this->Mdosen->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


	


}