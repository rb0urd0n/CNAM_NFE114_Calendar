<?php
class User extends CI_Controller{
	
	public $authenticate = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index(){
		
	}
	
	public function form(){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[2]|max_length[255]');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[2]|max_length[255]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('confirmPassword', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');

		if ($this->form_validation->run() === FALSE)
		{
			$this->title = 'Create account';
			$this->load->view('user/form');
		}
		else
		{
			$user = R::dispense('user');
			$user->firstname = $this->input->post('firstname');
			$user->lastname = $this->input->post('lastname');
			$user->email = $this->input->post('email');
			$user->password = sha1($this->input->post('password'));
			R::store($user);
			
			redirect(site_url('login'));
		}
	}
	
}
