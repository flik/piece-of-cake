<?php
/**
 * Piece Of Cake  A fast, extensible PHP framework. lot of flexibility you will feel.  
 * PHP 5
 * 
 * @author        Mohammad Ashfaq (https://github.com/flik ) 
 * 								  (https://www.linkedin.com/in/mohammad-ashfaq-09097417)
 * @copyright     Copyright (c) Piece of Cake. (http://github.com/flik/piece-of-cake)
 * @link          https://github.com/flik/piece-of-cake Project
 * @since         PieceOfCake v 0.1 
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('Europe/London');

const HOST  = 'http://www.yourdomain.com';

if (PHP_SAPI == 'cli')
	die('This program should only be run from a Web Browser');
/**
 *  Get Business Solutions's root directory
 */
define('PIECEOFCAKE_START', microtime(true));
define('BASEURL', rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' ));
 
define('APP_DIR', 'xapp');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('PUBLIC_DIR', 'public');
define('PUBLIC_ROOT', ROOT . DS . APP_DIR . DS . PUBLIC_DIR . DS);
  
define( 'INCLUDE_DIR', dirname( __FILE__ ) . '/xapp/' );
  
/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/




require __DIR__.'/vendor/autoload.php';  
require __DIR__.'/framework/engine.php';
 
