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
			$this->form_validation->set_rules('course_code', 'course code', 'trim|required|xss_clean|numeric|max_length[11]');
			$this->form_validation->set_rules('course_name', 'course name', 'trim|required|xss_clean|alpha');
			// ----set error message----//
			$this->form_validation->set_message('numeric', 'กรุณากรอก %s เป็นตัวเลข 0-9');
			$this->form_validation->set_message('required', 'กรุณากรอกข้อมูล %s.');

			if($this->form_validation->run() == FALSE){	//form validation error
				$this->load->view('course');
				return FALSE;
			}else{
				$this->Mo_regis->insert_course();
			}
		}
	}

	/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */