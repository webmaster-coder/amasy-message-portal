<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function Login_check($ussername,$password){
		$this->db->where('username',$ussername);
		$this->db->where('password' ,$password);
		$ans = $this->db->get('login_table');
		$data =$ans->result_array();
		return $data;
	}
	public function Show_all_data(){
		$result = $this->db->get('btch_2');//In $result hold all data from product datatbase
		print_r($result); die;
		return $result;
	}
}
