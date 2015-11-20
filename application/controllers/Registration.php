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
		$this->load->library('tcpdf');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function course()
	{
		$this->load->view('course');
	}

	public function insertCourse()
	{

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
			$this->course();
		}
	}

	public function updateCourse()
	{
		if ($this->input->post('course_update') == 'course_update') {
			$this->Mo_regis->updateCourse();
			$this->courseDetail();
		} else {
			$this->courseDetail();
		}
	}

	public function delCourse($value = '') //del course
	{
		if ($value != null) {
			$this->Mo_regis->delCourse($value);
			$this->courseDetail();
		} else {
			$this->courseDetail();
		}
	}

	public function courseDetail()
	{
		$data = array(
			'getCourse' => $this->Mo_regis->get_course(),
			);
		$this->load->view('course_detail',$data);
	}

	public function manageUser()
	{
		$data = array('get_users' => $this->db->get('users')->result());
		$this->load->view('manage_user', $data);
	}

	public function manageMember()
	{
		$this->load->view('member');

	}

	public function insertMember()
	{
		$this->Mo_regis->insertMember();
		$this->manageMember();
	}

	public function manageMember_info()
	{
		$data = array(
			'get_member' => $this->db->get('member')->result(),
			);
		$this->load->view('member_info',$data);
	}

	public function updateMember()
	{
		$this->Mo_regis->updateMember();
		$this->manageMember_info();
	}

	public function delMember($value='')
	{
		$this->db->where('id_member',$value);
		$this->db->delete('member');
		$this->manageMember_info();
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

	public function updateReport()
	{
		$this->Mo_regis->updateReport();
		$this->report();
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

	public function Login()
	{
		$this->load->view('login');
	}

	public function tcpdf()
	{

		$this->load->view('tcpdf');
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */