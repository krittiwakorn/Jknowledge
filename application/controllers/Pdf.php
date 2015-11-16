<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pdf extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		    $this->load->library('Pdf'); // Load library
		    $this->pdf->fontpath = 'font/'; // Specify font folder
		 }
		 public function index()
		 {
    // Generate PDF by saying hello to the world
		 	$this->pdf->AddPage();
		 	$this->pdf->SetFont('Arial','B',16);
		 	$this->pdf->Cell(40,10,'Hello World!');
		 	$this->pdf->Output();
		 }
		}

		/* End of file welcome.php */
		/* Location: ./application/controllers/welcome.php */

