<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->load->model('Mo_register','',TRUE);
	}

	public function index()
	{
		$this->load->view('index_register');
	}

	public function add()
	{
		$this->load->view('register');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function register_search()
	{
		$this->load->view('register_search');
	}

	public function register_list()
	{
		$this->load->view('register_list');
	}

	public function register_confirm()
	{
		$this->load->view('register_confirm');
	}

	public function register_detail()
	{
		$this->load->view('register_detail');
	}

	public function register_print()
	{
		$this->load->view('register_print');
	}

		 
	public function insert_course()
	{
		$this->form_validation->set_rules('course_code', 'รหัสคอร์สเรียน', 'trim|required|xss_clean|numeric|max_length[11]');
		$this->form_validation->set_rules('course_name', 'ชื่ออคอร์ส', 'trim|required|xss_clean|');
		$this->form_validation->set_rules('course_price', 'ราคา', 'trim|required|numeric|xss_clean');
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
} 