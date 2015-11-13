<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*
	*
	 */
	class Registration extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			date_default_timezone_set('Asia/Bangkok');
			$this->load->model('Mo_regis','',TRUE);
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
			$this->load->view('course',$data);
		}

		public function insert_course()
		{
			$this->form_validation->set_rules('course_code', 'รหัสคอร์สเรียน', 'trim|required|xss_clean|numeric|max_length[11]');
			$this->form_validation->set_rules('course_name', 'ชื่ออคอร์ส', 'trim|required|xss_clean|');
			$this->form_validation->set_rules('course_price', 'ราคา', 'trim|required|numeric|xss_clean');
			// ----set error message----//
			$this->form_validation->set_message('numeric', 'กรุณากรอก %s เป็นตัวเลข 0-9');
			$this->form_validation->set_message('required', 'กรุณากรอกข้อมูล %s.');

			if($this->form_validation->run() == FALSE){	//form validation error

				$this->course();		//redirect function course
				return FALSE;
			}else{
				$this->Mo_regis->insert_course();
			}
		}

		public function update_course()
		{
			if($this->input->post('course_update') == 'course_update'){
				$this->Mo_regis->update_course();
			}else{
				$this->course();
			}
		}

		public function del_course($value='')		//del course
		{
			if($value != null){
				$this->Mo_regis->del_course($value);
			}else{
				$this->course();
			}
		}

		public function manage_user()
		{
			$data = array('get_users' => $this->db->get('users')->result(), );
			$this->load->view('manage_user',$data);
		}

		public function manage_status(){
			$my_status = $this->input->post('my-checkbox');

			if($my_status === "on"){
				$update_status = $this->Mo_regis->manage_status($status = "admin");
				echo  $update_status;
				print_r($update_status);
			}else{
				$update_status = $this->Mo_regis->manage_status($status = "user");
				echo  $update_status;
			}
		}

		public function report()
		{
			$data = array(
				'get_regist_hdr' => $this->Mo_regis->report() ,
				);
			$this->load->view('report',$data);
		}

		public function report_detail($hdr_id="")
		{
			$data =array(
				'get_hdr_id' => $this->Mo_regis->present_id($hdr_id),
				);
			$this->load->view('report_detail',$data);

		}
	}

	/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */