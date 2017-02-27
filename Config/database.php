<?php

function cred(){
	
 return array('db' => array(
					'host' => 'localhost',
					'port' =>  '3306',
					'database' => 'test',
					'username' => 'admin',
					'password' => 'admin',
					'debug_level' => 0 // Incase of 1 It will show all queries
					 ));
}
