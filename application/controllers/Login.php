<?php
$msg='';
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Admin_Model'); //load Model 
	}
	public function index()
	{
		$this->load->view('login');
	}
	
	public function Login_page()
	{
		$ussername=$this->input->post('ussername');
		$password = $this->input->post('password');
		$result= $this->Admin_Model->Login_check($ussername,$password);
		if(count($result)==1 ){
			
			$_SESSION['logint_table']=$result[0];
            $_SESSION['logint_table']['role'];
            $this->load->view('Dashboard',$_SESSION);
            
			// print_r($_SESSION['admin']);
			// $role=$_SESSION['logint_table']['role'];
			
			
		}else{
			
			$this->load->view('login');
			echo "<div class='alert alert-danger' role='alert'>
					Login Faild Please Try Again!
				</div>";
			
		}
	}
	
}
