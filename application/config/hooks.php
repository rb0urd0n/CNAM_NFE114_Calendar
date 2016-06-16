<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['display_override'] = array(
	'class' => 'DisplayHooks',
	'function' => 'display',
	'filename' => 'DisplayHooks.php',
	'filepath' => 'hooks',
	'params' => array(
			array(
				'path'=>'',
				'label'=>'Home',
				'title' => 'Your homepage'
			),
			array(
				'path'=>'about',
				'label'=>'About',
				'title' => 'About'
			),
			array(
				'path'=>'news',
				'label'=>'News',
				'title' => 'News'
			),
			array(
				'path'=>'news/create',
				'label'=>'Create news',
				'title' => 'Create news'
			),
			array(
				'path'=>'login',
				'label'=>'Login',
				'title'=>'Login'
			),
			array(
				'path'=>'manageAccount',
				'label'=>'Manage account',
				'title'=>'Manage account'
			)
		)
);

$hook['post_controller_constructor'] = array(
	'class' => 'AuthenticationHooks',
	'function' => 'authenticate',
	'filename' => 'AuthenticationHooks.php',
	'filepath' => 'hooks',
	'params' => array()
);
