<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Down extends CI_Controller {

    public function index()
	{
		$this->load->view('down');
	}
    public function pdf_print()
	{
		$data['p'] = $this->user_model->select_where('form', $w = array('id' => $this->uri->segment(3)));

		$this->load->view('print.php', $data);
		$this->load->library('Pdf');
		$html = $this->output->get_output();
		// Load HTML content
		$this->dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$this->dompdf->set_paper('A4', 'Portrait');

		// Render the HTML as PDF
		$this->dompdf->render();

		// Output the generated PDF (1 = download and 0 = preview)
		$this->dompdf->stream("abc.pdf", array("Attachment" => 1));
	}
}
