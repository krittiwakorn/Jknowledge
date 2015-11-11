<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_regis extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}

	function insert_course(){
		$course_code = $this->input->post('course_code');
		$course_name = $this->input->post('course_name');
		$status = $this->input->post('status');
		$comment = $this->input->post('comment');

		$date = date("Y-m-d H:i:s");

		$data_course = array(
			'course_code' => $course_code,
			'course_name' => $course_name,
			'status' => $status,
			'comment' => $comment,
			'id_create' => '11111',
			'dt_create' => $date,
			'id_update' => '2222',
			'dt_update' => $date,
			);
		$this->db->insert('course',$data_course);
		redirect('Registration/course','refresh');
	}

}

/* End of file Mo_regis.php */
/* Location: ./application/models/Mo_regis.php */