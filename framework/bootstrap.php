<?php

/*
|--------------------------------------------------------------------------
| Create The Application Functions
|--------------------------------------------------------------------------
| 
|
*/

/*-------------------------------------------------------------------------------------*/
/*
|--------------------------------------------------------------------------
| checkSet Function for use of isset and checking indexes
|--------------------------------------------------------------------------
| @param: array, key, return type
|
*/
function checkSet($arr='',$key='',$bool=''){

			if($bool=='@')
				return isset($arr[$key]) ? true : false ;
			else 
			   return isset($arr[$key]) ? $arr[$key] : $bool ;
		} 

/*
|--------------------------------------------------------------------------
| baseurl Function for get base url of the application
|--------------------------------------------------------------------------
| @param: no
|
*/		
 function baseurl(){
	 return  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REDIRECT_URL'];
 }
 
/*
|--------------------------------------------------------------------------
| debug Function for print array
|--------------------------------------------------------------------------
| @param: object, boleen
|
*/
	function debug($obj, $e = 1)
	{
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
		if($e)
		  exit;
		
	}
 
/*
|--------------------------------------------------------------------------
| debugx Function for echo string 
|--------------------------------------------------------------------------
| @param: string, boleen
|
*/
	function debugx($str, $e = false)
	{
		echo "<br />************************<br/>";
		echo json_encode($str);
		echo "<br/>************************<br/>";
		if($e)
		  exit;
		
	}


 
/*
|--------------------------------------------------------------------------
| clearForLowerCase Function for basic checking 
|--------------------------------------------------------------------------
| @param: string
|
*/
function clearForLowerCase($str = ''){ 
	$str = trim(strip_tags($str)); 
    $str = strtolower(str_replace(' ','_',$str));  
    $str = preg_replace('![^a-z0-9_\-\. ]!','',$str); 
     //$str = trim(preg_replace('!nbsp!','',$str)); 
     
    return $str ;
 
}
/*
|--------------------------------------------------------------------------
| encrypt Function  
|--------------------------------------------------------------------------
| @param: string
|
*/
function encrypt( $string ) {
	$string = trim($string);
  $algorithm = 'rijndael-128'; // You can use any of the available
  $key = md5( "mypassword", true); // bynary raw 16 byte dimension.
  $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
  $iv = mcrypt_create_iv( $iv_length, MCRYPT_RAND );
  $encrypted = mcrypt_encrypt( $algorithm, $key, $string, MCRYPT_MODE_CBC, $iv );
  $result = urlencode(base64_encode( $iv . $encrypted ));
  return $result;
}
/*
|--------------------------------------------------------------------------
| decrypt Function 
|--------------------------------------------------------------------------
| @param: string
|
*/ 
function decrypt( $string ) {
	$string = trim($string);
  $algorithm =  'rijndael-128';
  $key = md5( "mypassword", true );
  $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
  $string = base64_decode( $string );
  $iv = substr( $string, 0, $iv_length );
  $encrypted = substr( $string, $iv_length );
  $result = urlencode(mcrypt_decrypt( $algorithm, $key, $encrypted, MCRYPT_MODE_CBC, $iv ));
  return $result;
}

   function _encode_string ($stringArray) {
		$s = rtrim(strtr(base64_encode(gzdeflate($stringArray, 9)), '+/', '-_'), '=');
    return $s;
}

	  function _decode_string ($stringArray) {
		$s =  gzinflate(base64_decode(strtr($stringArray, '-_', '+/')));
    return $s;
}


/*
|--------------------------------------------------------------------------
| render Function for smarty template engine
|--------------------------------------------------------------------------
| 
|
*/ 
function renderSmarty( $view='index',$arr=''){ 
	
$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$smarty->setTemplateDir('./xapp/Views/templates')
					->setCompileDir('./xapp/Views/templates_c')
					->setCacheDir('./xapp/Views/cache'); 
// view the template dir chain
// var_dump($smarty->getTemplateDir()); exit;

foreach($arr as $k=>$v)
	$smarty->assign($k, $v, true); 

$smarty->display($view.'.tpl');

}

/*
|--------------------------------------------------------------------------
| render Function for bootstrap  
|--------------------------------------------------------------------------
| 
|
*/ 
function render($view='content', $arr='' ){  
	include( INCLUDE_DIR .'Views/'.$view. '.php' );
	exit;
}
