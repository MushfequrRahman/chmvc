<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {

	public function index()
		{
			if($this->session->userdata('userid')!='')
				{
					redirect('backend/Dashboard');
				}
			if(!$this->session->userdata('userid'))
				{
					$this->load->database();
					$this->load->model('Login_Model');
					$data['title']='Codeigniter HMVC';
					$this->load->view('config/head',$data);
					$this->load->view('login_form',$data);
				}
	 	}
	
	
	public function login_form()
		{
			if($this->session->userdata('userid')!='')
			{
				redirect('backend/Dashboard');
			}
			if(!$this->session->userdata('userid'))
			{
				$data['title']='Login';
				$this->load->view('config/head',$data);
				
				$this->load->view('login_form',$data);
			}
			
		 }
	 
	 public function login()
		{
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('Login_Model');
			if($this->input->post('submit'))
				{
					$userid=$this->form_validation->set_rules('userid','User ID','required');
					$password=$this->form_validation->set_rules('password','Password','required');
					
					if($this->form_validation->run()==FALSE)
						{
							$data['title']='Codeigniter HMVC';
							$this->load->view('config/head',$data);
							
							$this->load->view('user_login/login_form',$data);
						}
					else
						{
							$userid=$this->input->post('userid');
							$password=$this->input->post('password');
							
							$result=$this->Login_Model->login($userid,$password);
							if($result)
								{
									
									$uname=$result[0]['uname'];
									$usertype=$result[0]['usertype'];
									$pic=$result[0]['image'];
									$session_data = array(  
                          			'userid'     =>     $userid,
									'usertype'     =>     $usertype,
									'uname'     =>     $uname
									

                     				);  
                     				$this->session->set_userdata($session_data);
								 	redirect('User_Login');
								}
						 	else
								{
									$this->session->set_flashdata('error', 'Invaluserid User ID and Password');
									$data['title']='Codeigniter HMVC';
									$this->load->view('config/head',$data);
									
									$this->load->view('login_form',$data);
								}
						 }
					}
			}
		
		public function logout()  
      		{  
		   		//$this->session->sess_destroy();
		   		$this->session->unset_userdata('userid');  
           		redirect('User_Login');  
      		} 
			
			
}
