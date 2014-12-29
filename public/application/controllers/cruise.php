<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cruise extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cruise');
		$this->load->view('includes/footer');
	}
}