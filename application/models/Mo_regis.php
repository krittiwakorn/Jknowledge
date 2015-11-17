<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_regis extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}

	function insertCourse(){  // เพิ่มคอร์สเรียน
		
		$course_name = $this->input->post('course_name');
		$course_price = $this->input->post('course_price');
		$is_require_room = $this->input->post('is_require_room');
		$comment = $this->input->post('comment');

		$date = date("Y-m-d H:i:s");

		$data_course = array(
			'course_name' => $course_name,
			'price' => $course_price,
			'status' => 1,
			'is_require_room' => $is_require_room,
			'comment' => $comment,
			'id_create' => '11111',
			'dt_create' => $date,
			'id_update' => '2222',
			// 'dt_update' => $date,
			);
		$this->db->insert('course',$data_course);
		//redirect('Registration/course','refresh');
		return TRUE;

	}

	public function get_course()  //แสดงคอร์ดเรียน
	{
		$getCourse = $this->db->get('course')->result();
		return $getCourse;
	}

	public function updateCourse()
	{
		$course_id = $this->input->post('id_course');
		$course_name = $this->input->post('course_name');
		$is_require_room = $this->input->post('is_require_room');
		$comment = $this->input->post('comment');

		$date = date("Y-m-d H:i:s");

		$update_course = array(
			'course_name' => $course_name,
			'status' => 1,
			'is_require_room' => $is_require_room,
			'comment' => $comment,
			'id_create' => '11111',
			// 'dt_create' => $date,
			'id_update' => '2222',
			// 'dt_update' => $date,
			);
		$this->db->where('id_course',$course_id);
		$this->db->update('course',$update_course);
		redirect('Registration/course','refresh');
	}

	public function delCourse($value='')
	{
		$this->db->where('id_course',$value);
		$this->db->delete('course');
		redirect('Registration/course','refresh');
	}

	public function manage_status($status){
		$user_id = $this->input->post('user_id');

		$update_status = $this->db->query('UPDATE users
			SET user_status = "'.$status.'"
			WHERE user_id = "'.$user_id.'"
			');
		redirect('Registration/manage_user','refresh');
	}

	public function report()
	{
		$Present = $this->db->query('SELECT * , `register_hdr`.`status`as "status_hdr"
			FROM
			`register_hdr`
			INNER JOIN `course` ON `register_hdr`.`id_course` = `course`.`id_course`')->result();
		return $Present;
	}

	public function report_id($value='')
	{
		$Present = $this->db->query('SELECT * , `register_hdr`.`status`as "status_hdr"
			FROM
			`register_hdr`
			INNER JOIN `course` ON `register_hdr`.`id_course` = `course`.`id_course`
			WHERE id_register_hdr ="'.$value.'"
			')->result();
		return $Present;
	}

	public function reportWhereCourse($value='')
	{
		$reprtByCourse = $this->db->query('SELECT  * , `register_hdr`.`status`as "status_hdr"
			FROM
			`course`
			INNER JOIN `register_hdr` ON `register_hdr`.`id_course` = `course`.`id_course`
			WHERE course.id_course ="'.$value.'"
			')->result();
		return $reprtByCourse;
	}


}

/* End of file Mo_regis.php */
/* Location: ./application/models/Mo_regis.php */