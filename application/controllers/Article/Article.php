 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{

		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		$data['content']			=	'article/list_article';
		$data['title']				=	'Halaman Artikel';
		$data['page']				=	'Halaman Artikel';
		if ($sess == 'ADM') {
			$this->load->view('admin/app', $data);
		}else if ($sess != 'ADM' AND $sess != 'MHS') {
			$this->load->view('dosen/app', $data);
		}

	}


	public function list_article()
	{	
		$nidn = $this->session->userdata('no_unique');
		$list = $this->Marticle->article_get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		foreach ($list as $isi) {
			$photo =  base_url().$isi->photo;
			$str = $isi->date;
			$time = date('d M g:i A ', strtotime($str));
			$stat = $isi->status;
			if($stat == '1'){
				$status = '<a  class="btn btn-success btn-sm "  href="javascript:void(0)" 
						onclick="update_status('.$isi->id_article.')"><i class="mdi mdi-check"></i> Posted</a>';
			}else{
				$status = '<a  class="btn btn-secondary btn-sm "  href="javascript:void(0)" 
						onclick="update_status('.$isi->id_article.')"><i class="mdi mdi-label"></i> Draft</a>';
			}
			$row = array();
			$row[] = '<div class="ml-2">
                        <input type="checkbox" class="check_delete_article" id="check_delete_article" value="'.$isi->id_article.'">
                       </div>
                        ';
            $row[] = '<img src="'.$photo.'" alt="user"
			class="rounded-circle" width="30" /> '.$isi->name.'';
            $row[] = '<b>'.$isi->title;
            $row[] = $time;
            $row[] = $status;
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Marticle->article_count_all(),
						"recordsFiltered" => $this->Marticle->article_count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


	function new_article(){
		$sess = $this->session->userdata('role');
		$sess_no = $this->session->userdata('no_unique');
		$data['content']			=	'article/new_article';
		$data['title']				=	'Halaman Artikel';
		$data['page']				=	'Artikel Baru';
		if ($sess == 'ADM') {
			$this->load->view('admin/app', $data);
		}else if ($sess != 'ADM' AND $sess != 'MHS') {
			$this->load->view('dosen/app', $data);
		}
	}

	function add_article(){
		if (empty($_FILES['file']['name']))
		{
		   $this->form_validation->set_rules('file', 'Thumbnail', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
		}
		
		$this->form_validation->set_rules('title', 'Judul', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
		$this->form_validation->set_rules('content', 'Konten', 'required', 
												array(
													'required' => '{field} Harus Diisi',
												));
		if ($this->form_validation->run() == FALSE)
                {
                        $msg = array('error' => true,
                    				'file' => form_error('file'),
                    				'title' => form_error('title'),
                    				'content' => form_error('content'),
                    				);
                        echo json_encode($msg);
                }

		else if($this->form_validation->run()){

        $config['upload_path']          = './assets/article/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
              $data_upload = $this->upload->data();
              $location = 'assets/article/';
              //resize
             	$config['image_library']='gd2';
                $config['source_image']='./assets/article/'.$data_upload['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 800;
                $config['height']= 600;
                $config['new_image']= './assets/article/thumbs/'.$data_upload['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
              $date = date('Y-m-d H:i:s');
              $data = array(
              		'id'		=> '',
					'title' 	=> $this->input->post('title'),
					'content' 	=> $this->input->post('content'),
					'author' 	=> $this->input->post('author'),
					'date' 		=> $date,
					'status' 	=> '1',
		      		'thumbs' => $data_upload['file_name'],
		    );
             $insert = $this->db->insert('ms_article',$data);
			echo json_encode(array("success" => TRUE));

          }
      }
	}


	function update_status($id){
		$status = $this->db->query("SELECT status FROM ms_article WHERE id = $id ")->row()->status ;
		if ($status == '1'){
			$value = array('status' => '2',
							'date'	=> date('Y-m-d H:i:s') );
		}else{
			$value = array('status' => '1',
							'date'	=> date('Y-m-d H:i:s') );
		}
		
		$data = $this->Marticle->update_status($id,$value);
		echo json_encode($data);
	}

	function delete_article()
	{
	  if($this->input->post('checkbox_value')){

	  	 	$id = $this->input->post('checkbox_value');
	   		for($count = 0; $count < count($id); $count++) {
	   			$thumbs = $this->db->query("SELECT thumbs FROM ms_article WHERE id = $id[$count] ")->row()->thumbs ;
	   			unlink('assets/article/thumbs/'.$thumbs);
	   			unlink('assets/article/'.$thumbs);
			    $this->Marticle->delete_article($id[$count]);

			}
	  }
	}

}