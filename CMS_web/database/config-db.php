<?php 
	Class conDB { 
	
		protected $database_info = array(
			 
			'database_name'	=>	'cms',
			'table_prefix'	=>	'', 
			
			// Database configuration for Live Website
			
			'host_name'		=>	'localhost',
			'user_name'		=>	'wearhjkijhkex==',
			'user_password'	=>	'=',
			
			// Database configuration for local host
			
			'dev_host'		=>	'localhost',
			'dev_user'		=>	'root',
			'dev_password'	=>	''
		); 
	} 
	
	function login(){
		return array('cid','email','pass','type');
	}
?> 