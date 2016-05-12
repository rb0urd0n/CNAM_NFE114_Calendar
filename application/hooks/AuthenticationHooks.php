<?php
class AuthenticationHooks extends CI_Hooks{
	
	public function authenticate() {
		$this->CI = &get_instance();
		$this->CI->load->library('session');
		$this->CI->load->helper('url');

		if ( $this->CI->session->userdata('logged_in') !== TRUE ) {
			if ( $this->CI->input->post('password') === 'test' ) {
				$newdata = array(
						'email'     => $this->CI->input->post('email'),
						'logged_in' => TRUE
					);
				$this->CI->session->set_userdata($newdata);
				return true;
			}else{
				if(isset($this->CI->authenticate) && $this->CI->authenticate === FALSE){
					return true;
				}
				$this->CI->session->unset_userdata(array('email','logged_in'));
				redirect(base_url().'index.php/login');
			}
		}else{
			if ( $this->CI->input->post('password') !== null && $this->CI->input->post('password') !== 'test' ) {
				$this->CI->session->unset_userdata(array('email','logged_in'));
				redirect(base_url().'index.php/login');
			}
		}
		return true;
	}
	
}
