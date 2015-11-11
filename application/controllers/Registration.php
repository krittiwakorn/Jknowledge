<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	/*
	*
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function course()
	{
		$this->load->view('course');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */