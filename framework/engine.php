<?php

//namespace xapp\Controllers; 
use Smarty as SE ;

//http://github.com/Wixel/GUMP for documentation
use GUMP as V;

//https://github.com/adamwathan/form for documentation
use AdamWathan\Form\Facades\Form; 

use X as X; 

require __DIR__.'/../Config/routes.php';
require __DIR__.'/../Config/database.php';
require __DIR__.'/bootstrap.php';
require __DIR__.'/g.php'; 


/****Form Process*********************************************************************************************************************/
/*
$frm = new AdamWathan\Form\FormBuilder;
echo $frm->text('email')->value('example@example.com')->required(); exit;

*/

/****Session Process*********************************************************************************************************************/

//require __DIR__.'/SecureSessionHandler.php'; 


/*
if ( ! $session->isValid(5)) {
    $session->destroy();
}

$session->put('hello.world', 'bonjour');

echo $session->get('hello.world'); // bonjour
exit;
*/

/****Database Process*********************************************************************************************************************/

$dbc = cred();
$dbc = $dbc['db'];

X::setup( 'mysql:host='.$dbc['host'].';dbname='.$dbc['database'].';charset=utf8',  $dbc['username'] ,  $dbc['password'] ,$dbc['debug_level']);
 
 /*
$data = X::load('live_users' ,12 );


 //$dbc['id'] = 1;
//X::save($dbc); //for save and update

$sql = 'SELECT xdata FROM `live_users` WHERE xdata LIKE \'%"gender":"Male%\' AND xdata LIKE \'%"age":"31%\'';
//$id = X::getAll( $sql );
//$id = X::load('live_users' ,12 );
$id = X::manage('live_usersx');
if($id)
g::debug($id);
else
echo 'not found';

exit;
//g::debug($dbc);   
* */

/**Processing Routes*******************************************************************************************************/

$uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
$uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );
$uri = urldecode( $uri ); 

$url_get_request = explode('?',$uri);
//g::debugx($uri); 
//g::debugx(count($url_get_request));
//g::debug($url_get_request);

if(isset($url_get_request[1])){
	$url_arr = explode('/',$url_get_request[0]) ; //  actual url will be on 0 index
	$uri = $url_get_request[0];
}else
	$url_arr = explode('/',$uri) ; 

$parm = $url_arr;

//g::debug($parm);

unset($parm[0]);
unset($parm[1]);

if(array_key_exists($uri,$Route)){ 
	  
	 if(strpos($Route[$uri],'@') > 1){
		 $ctrl_arr = explode('@',$Route[$uri]) ; 
		  // debug($ctrl_arr);
		 include( INCLUDE_DIR.'Controllers/' . $ctrl_arr[0] . 'Controller.php' ); 
		 $a = new UserController(); 
		 var_export($a->{$ctrl_arr[1]}(1)) ;
		 
	 }else{
		 
		 if(file_exists(INCLUDE_DIR.$Route[$uri] . '.php')) {
			include( INCLUDE_DIR . $Route[$uri] . '.php' );
		}else
			include( INCLUDE_DIR . '404.php' );
 
	}
        // exit to avoid the 404 message 
        exit();
}
  
// nothing is found so handle the 404 error
include( INCLUDE_DIR . '404.php' );

 

