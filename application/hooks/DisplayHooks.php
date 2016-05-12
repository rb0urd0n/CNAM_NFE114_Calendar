<?php
class DisplayHooks extends CI_Hooks{
	
	public function display($menus){
		global $OUT;
		
		$this->CI = & get_instance();
		
		//Load helpers
		$this->CI->load->helper('url');
		
		$output = $this->CI->output->get_output();
		$layout = $this->CI->load->file(BASEPATH.'../application/layouts/main.php', true);
		$navigationMenu = '';
		if(is_array($menus)){
			foreach($menus as $link) {
				if(is_array($link)){
					if($navigationMenu != ''){
						$navigationMenu .= ' - ';
					}
					$menu = (object)$link;
					$navigationMenu .= anchor($menu->path, $menu->label, array('title' => $menu->title));
				}
			}
		}
		
		$title = isset($this->CI->title)?$this->CI->title:'Default title';
		$layout = str_replace('{{TITLE}}', $title, $layout);
		$layout = str_replace('{{NAVIGATION_MENU}}', $navigationMenu, $layout);
		$layout = str_replace('{{BODY}}', $output, $layout);
		
		$OUT->_display($layout);
	}
}
