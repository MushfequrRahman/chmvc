<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	 public function __construct()
	 {
		 parent::__construct();
		 //$this->load->library('session');
		
			if(!$this->session->userdata('userid'))
				{
					redirect('User_Login');
				}
	 }
	 public function index()
	 {
		$this->load->database();
		$this->load->model('Admin');
		
		$data['title']='Dashboard';
		$this->load->view('config/head',$data);
		$userid=$this->session->userdata('userid');
		$usertype=$this->session->userdata('usertype');
		
		
		$this->load->view('config/toprightnav',$data);
		$this->load->view('config/leftmenu');
		
		
		if($usertype==1)
		{
			
			$this->load->view('dashboard',$data);
		}
		elseif($usertype==2)
		{
			
			$this->load->view('dashboard',$data);
			//redirect("welcome");
		}
	}
	public function user_list()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User List';
		$this->load->view('config/head',$data);
		$this->load->view('config/toprightnav');
		$this->load->view('config/leftmenu');
		$data['ul']=$this->Admin->user_list();
		$this->load->view('backend/user_list',$data);
				
	 }
	 public function user_name()
	 {
		
		$this->load->database();
		$this->load->model('Admin');
		$data['title']='User Name';
		$this->load->view('config/head',$data);
		$this->load->view('config/toprightnav');
		$this->load->view('config/leftmenu');
		$data['ul']=$this->Admin->user_name();
		$this->load->view('backend/user_name',$data);
				
	 }
}