<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	   	if(!$this->session->userdata('userid'))
			{
				redirect('UserLogin');
			}
	}
	public function index()
	{
		$this->load->view('head');
		$userid=$this->session->userdata('userid');
		$usertype=$this->session->userdata('usertype');
		$this->load->view('toprightnav');
		$this->load->view('leftmenu');
	}
}
