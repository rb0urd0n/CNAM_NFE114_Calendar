<?php
class User extends CI_Controller{
	
	public $authenticate = FALSE;
	
	public function index(){
		
	}
	
	public function form(){
		$this->title = 'Create account';
		$this->load->view('user/form');
	}
	
	public function create(){
		
	}
}
