 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data['content']			=	'college/page/konseling';
		$data['title']				=	'Halaman Mahasiswa - Konseling';
		$data['page']				=	'Konseling';
		$data['selection']			=	$this->Mcollege->get_consult_selection();
		$this->load->view('college/app', $data);
		
		}

	public function konseling()
	{	
		$nim = $this->session->userdata('no_unique');
		$list = $this->Mcollege->konseling_get_datatables($nim);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo_staff;
			$report = base_url('college/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('college/konseling/detail_consult/').$isi->id_consult;
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
				$aksi = '';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '';
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
						"recordsTotal" => $this->Mcollege->konseling_count_all(),
						"recordsFiltered" => $this->Mcollege->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function filterby()
	{	
		$kode_selection = $this->input->post('kode_selection');
		$nim = $this->session->userdata('no_unique');
		$list = $this->Mcollege->filterby_get_datatables($kode_selection,$nim);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo_staff;
			$report = base_url('college/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('college/konseling/detail_consult/').$isi->id_consult;
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
				$aksi = '';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '';
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
						"recordsTotal" => $this->Mcollege->konseling_count_all(),
						"recordsFiltered" => $this->Mcollege->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function status_consult()
	{	

		$id_consult_status = $this->input->post('id_consult_status');
		$nim = $this->session->userdata('no_unique');
		$list = $this->Mcollege->status_get_datatables($id_consult_status,$nim);
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo_staff;
			$report = base_url('college/konseling/report_consult/').$isi->id_consult;
			$detail_consult = base_url('college/konseling/detail_consult/').$isi->id_consult;
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
				$aksi = '';
			}else if($stat == '5'){
				$status = '<span class="label label-warning mr-2">Pending</span>';
				$aksi = '';
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
						"recordsTotal" => $this->Mcollege->konseling_count_all(),
						"recordsFiltered" => $this->Mcollege->konseling_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function notif_consult()
	{	

		$id_consult = $this->input->post('id_consult');
		$nim = $this->session->userdata('no_unique');
		//update readed
		$data= $this->Mnotif->update_readed_consult_college($id_consult);
		//output to json format
		echo json_encode($data);
	}

	function delete_konseling()
	{
	  if($this->input->post('checkbox_value')){

	  	 	$id = $this->input->post('checkbox_value');
	   		for($count = 0; $count < count($id); $count++) {
			    $this->Mcollege->delete_konseling($id[$count]);
			}
	  }
	}

	//===== action table

	function acc_konseling($status){
		$id = $this->input->post('id');
		$data = $this->Mcollege->acc_konseling($id,$status);
		echo json_encode($data);
	}

	function start_konseling($id){
		$status = $this->input->post('status');
		$data = $this->Mcollege->start_konseling($id,$status);
		echo json_encode($data);
	}

	// ===== pengajuan 
	public function form_pengajuan()
	{
		$nim = $this->session->userdata('no_unique');
		$data['content']			=	'college/page/form_pengajuan';
		$data['title']				=	'Halaman Mahasiswa - Konseling';
		$data['page']				=	'Form Pengajuan Konseling';
		$data['selection']			=	$this->Mcollege->get_selection();
		$data['college']			= 	$this->Mcollege->get_college($nim);					
		$this->load->view('college/app', $data);
		
	}
	function get_konselor(){

		$kode_selection=$this->input->post('kode_selection');
        $data=$this->Mcollege->get_konselor($kode_selection);
        echo json_encode($data);
	}

	function proses_pengajuan(){
			$this->form_validation->set_rules('consult_selection', 'Tipe Konsultasi', 'required', 
			array('required' => '{field} Harus Dipilih'));
			$this->form_validation->set_rules('konselor', 'Konselor', 'required',
			array('required' => '{field} Harus Dipilih'));
			$this->form_validation->set_rules('title', 'Subject', 'required', 
			array('required' => '{field} Harus Diisi'));
			if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                    				'consult_selection' => form_error('consult_selection'),
                    				'konselor' => form_error('konselor'),
                    				'title' => form_error('title'),
                    				);
                        echo json_encode($msg);
                }
            else if($this->form_validation->run())
             	{
             			$date = date("Y-m-d H:i:s");
			                
							$data = array(
									'id'		=> '',
									'nim' => $this->input->post('nim'),
									'nidn' => $this->input->post('konselor'),
									'kode_selection' => $this->input->post('consult_selection'),
									'title' => $this->input->post('title'),
									'date' => $date,
									'id_consult_status' => '5',
								);
							$add_pengajuan = $this->Mcollege->add_pengajuan($data);
							echo json_encode(array("success" => TRUE));
			           
            }
	}


	//================== chat =======================


	public function chat($id){

		$data['id_consult']			=	$this->Mcollege->get_id_consult($id);
		$data['content']			=	'college/page/chat';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Chat Konseling';
		$data['file']				= 	$this->Mcollege->get_file($id);
		$this->load->view('college/app', $data);
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
		  
 				$query = $this->Mcollege->SendTxtMessage($data); 
 				$response='';
				if($query == true){
					$response = ['status' => 1 ,'message' => '' ];
				}else{
					$response = ['status' => 0 ,'message' => 'sorry we re having some technical problems. please try again !' 						];
				}
             
 		   echo json_encode($response);
	}


	public function get_chat($id_consult){
		$history = $this->Mcollege->GetReciverChatHistory($id_consult);
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
                $name = $chat['name_college'];
                $photo = base_url().$chat['photo_college'];
            }else{
                $name = $chat['name_staff'];
                $photo = base_url().$chat['photo_staff'];
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
				redirect('college/konseling/chat/'.$id_consult);
		}else{
			 $this->session->set_flashdata('alertupload', 
			 	'<div class="alert alert-warning alertupload">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Upload Gagal</h3>'.$this->upload->display_errors().'</div>');
          redirect('college/konseling/chat/'.$id_consult);
		}
	}

	public function download_file($id_file)
	{		
		$val =  $this->Mcollege->download_file($id_file);
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
		$result = $this->Mcollege->catatan($data,$id_consult);
		echo json_encode($result);
	}

	public function deletefile(){
		$id = $this->input->post('id');
		$result = $this->Mcollege->deletefile($id);
		echo json_encode($result);

	}
	//================ end chat -=====================


	//report consult

	public function report_consult($id){

		$data['report_consult']		=	$this->Mcollege->report_consult($id);
		$data['file']				= 	$this->Mcollege->get_file($id);
		$data['content']			=	'college/page/report_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Rekap Hasil Konseling';
		$this->load->view('college/app', $data);
	}

	public function historychatpdf($id_consult){
		$data['data'] 		= $this->Mcollege->get_historychat($id_consult);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('college/report/result_consult_pdf', $data);
	}

	//==================== detail konslutasi ========================
	public function detail_consult($id_consult){

		$data['detail_consult']		=	$this->Mcollege->detail_consult($id_consult);
		$data['content']			=	'college/page/detail_consult';
		$data['title']				=	'Halaman Konseling';
		$data['page']				=	'Detail Konsultasi';
		$this->load->view('college/app', $data);
	}

}