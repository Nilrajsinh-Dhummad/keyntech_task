<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");

class Form extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['p'] = $this->user_model->select('form');
		$this->load->view('form');
	}
	
	public function insert()
	{
		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('D_o_B', 'Date of Birth', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No', 'required');
		$this->form_validation->set_rules('select_file', 'File','required');

		// convert_uuencode();
		if ($this->form_validation->run() == false) {
			$this->load->view('form');
		} else {

			$data = array(
				'user_name' => $this->input->post('user_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'D_o_B' => $this->input->post('D_o_B'),
				'mobile_no' => $this->input->post('mobile_no'),
				'address_1' => $this->input->post('address_1'),
				'address_2' => $this->input->post('address_2'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country'),
				'reason' => $this->input->post('reason'),
				'select_file' => $this->input->post('select_file'),
				'select_image' => $this->input->post('select_image')
			);
			$this->user_model->insert('form', $data);
			$id = $this->db->insert_id();
			redirect('down?id='. $id .'');
		}
	}
}
