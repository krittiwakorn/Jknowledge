<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
/*
*
*/
class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->load->model('Mo_regis', '', true);
		$this->load->library('Pdf'); // Load library
		$this->load->library('tcpdf');
<<<<<<< HEAD
		$this->pdf->fontpath = 'font'; // Specify font folder
=======
		$this->pdf->fontpath = 'font/'; // Specify font folder
>>>>>>> parent of 8627ec4... เต้ อัพเดท pdf เปลี่ยนจาก fpdf เป็น tcpdf
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function course()
	{
		$data = array(
			'getCourse' => $this->Mo_regis->get_course(),
			);
		$this->load->view('course', $data);
	}

	public function insertCourse()
	{
		$this->form_validation->set_rules('course_code', 'รหัสคอร์สเรียน', 'trim|required|xss_clean|numeric|max_length[11]');
		$this->form_validation->set_rules('course_name', 'ชื่ออคอร์ส', 'trim|required|xss_clean|');
		$this->form_validation->set_rules('course_price', 'ราคา', 'trim|required|numeric|xss_clean');
		// ----set error message----//
		$this->form_validation->set_message('numeric', 'กรุณากรอก %s เป็นตัวเลข 0-9');
		$this->form_validation->set_message('required', 'กรุณากรอกข้อมูล %s.');
		if ($this->form_validation->run() == false) {
			//form validation error
			$this->course(); //redirect function course
			return false;
		} else {
			$this->Mo_regis->insertCourse();
		}
	}

	public function updateCourse()
	{
		if ($this->input->post('course_update') == 'course_update') {
			$this->Mo_regis->updateCourse();
		} else {
			$this->course();
		}
	}

	public function delCourse($value = '') //del course
	{
		if ($value != null) {
			$this->Mo_regis->delCourse($value);
		} else {
			$this->course();
		}
	}

	public function manageUser()
	{
		$data = array('get_users' => $this->db->get('users')->result());
		$this->load->view('manage_user', $data);
	}

	public function manageStatus()
	{
		$my_status = $this->input->post('my-checkbox');
		if ($my_status === "on") {
			$update_status = $this->Mo_regis->manageStatus($status = "admin");
			echo $update_status;
			print_r($update_status);
		} else {
			$update_status = $this->Mo_regis->manageStatus($status = "user");
			echo $update_status;
		}
	}

	public function report($report_hdr_id = " ")
	{
		if($report_hdr_id ==" "){
			$data = array(
				'get_course' => $this->Mo_regis->get_course(),
				'get_regist_hdr' => $this->Mo_regis->report(),
				);
			$this->load->view('report', $data);
		}else{
			$data = array(		//แสดงผู้สมัครตามคอร์อส
				'get_course' => $this->Mo_regis->get_course(),
				'get_regist_hdr' => $this->Mo_regis->reportWhereCourse($report_hdr_id),
				);
			$this->load->view('report', $data);
		}

	}
	public function reportDetail($hdr_id = "")
	{
		$data = array(
			'get_hdr_id' => $this->Mo_regis->report_id($hdr_id),
			);
		$this->load->view('report_detail', $data);
	}

	public function memberInfo()
	{
		$this->load->view('member_info');
	}

	public function pdf()
	{

		$this->pdf->AddPage();
		$this->pdf->AddFont('THSarabun','','THSarabun.php');
		$this->pdf->SetFont('THSarabun','',30);
		$this->pdf->Cell(40,10,iconv('UTF-8','TIS-620','hellow<br/>'),0,1,"C");
		$this->pdf->Write(5,$html);
		$this->pdf->Output('test.pdf',"I");


	}

	public function Login()
	{
		$this->load->view('login');
	}

	public function tcpdf()
	{
<<<<<<< HEAD
=======
		// $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		// $pdf->SetTitle('My Title');
		// $pdf->SetHeaderMargin(30);
		// $pdf->SetTopMargin(20);
		// $pdf->setFooterMargin(20);
		// $pdf->SetAutoPageBreak(true);
		// $pdf->SetAuthor('Author');
		// $pdf->SetDisplayMode('real', 'default');

		// $pdf->Write(5, 'Some sample text');
		// $pdf->Output();
>>>>>>> parent of 8627ec4... เต้ อัพเดท pdf เปลี่ยนจาก fpdf เป็น tcpdf

		$this->load->view('tcpdf');
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */