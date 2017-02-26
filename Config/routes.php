<?php
 
/**
 *  Set routes  
 */
$Route = array(
	'/'      					=> "/home",     // '/' homepage 
	'/page/smarty'      		=> "page",      // redirect to page.php (it is for corephp with smarty template engine)
    '/post'      				=> "post",
    '/contact'      			=> "contact",                      
    '/test'      				=> "test",
    '/about'   					=> "User@index",   
    '/api/v1/auth/token'   		=> "User@login",    	//ControllerName@ActionName same like cakephp or laravel 
    '/api/test'   				=> "User@testx"   			 
    
);
