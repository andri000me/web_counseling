 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

public function report_all(){
		$nidn = $this->input->post('nidn');
		$nim = $this->input->post('pilih_college');
		if ($nim != ''){
		$data['data'] 		=  $this->Mreport->report_all_college($nim,$nidn);
		$this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_all_college', $data);
		}else{
		$data['data'] 		=  $this->Mreport->report_all($nidn);
		$this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_all', $data);	
		}
	    
	}

public function report_detail_consult($id_consult){
		$data['data'] 		= $this->Mreport->get_consult_byid($id_consult);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_detail_consult', $data);
	}

public function report_hasil_consult($id_consult){
		$data['data'] 		= $this->Mreport->get_consult_byid($id_consult);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_hasil_consult', $data);
	}

public function report_consult_chat($id_consult){
		$data['data'] 		= $this->Mreport->get_consult_byid($id_consult);
		$data['chat'] 		= $this->Mreport->get_chat_byid($id_consult);
	    $this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_consult_chat', $data);
	}

public function get_report_bycollege(){
		$nidn=$this->input->post('nidn');
	    $data=$this->Mreport->get_report_bycollege($nidn);
	    echo json_encode($data);
	}

public function get_report_wali_bycollege(){
		$nidn=$this->input->post('nidn');
	    $data=$this->Mreport->get_report_wali_bycollege($nidn);
	    echo json_encode($data);
	}
public function report_all_wali(){
		$nidn = $this->input->post('nidn_wali');
		$nim = $this->input->post('pilih_college_wali');
		if ($nim != ''){
		$data['data'] 		=  $this->Mreport->report_all_wali($nim,$nidn);
		$this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_all_college', $data);
		}else{
		$data['data'] 		=  $this->Mreport->report_all_college_wali($nim,$nidn);
		$this->load->library('pdf');
	    $customPaper = array(0,0,381.89,595.28);
	    $this->pdf->setPaper($customPaper, 'landscape');
	    $this->pdf->load_view('report/report_all', $data);	
		}
	    
	}


}