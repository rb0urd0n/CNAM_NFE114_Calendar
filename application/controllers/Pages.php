<?php
class Pages extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->authenticate = FALSE;
	}
	
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->title = ucfirst($page);

		$this->load->view('pages/'.$page, array());
	}
	
	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$this->title = 'News archive';

		$this->load->view('news/index', $data);		
	}
	
}
