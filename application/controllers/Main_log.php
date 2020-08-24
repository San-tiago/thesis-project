<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_log extends CI_Controller {


	public function index(){
		$this->load->view('Pages/landingPage');
	}

	public function login(){
		$this->load->view('Pages/login');
	}

	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run()){
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('login_model');
			

			if($this->login_model->can_login($username, $password)){
				
				$this->load->view('Pages/dashboard');
			}

			else{
				
				redirect(base_url(). 'Main_log/login');
			}
			

		}

		else{
			$this->login();
		}

	}


	


	


	


    
}
