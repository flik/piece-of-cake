<?php

use RedBeanPHP\Facade as R;
use GUMP as V;

include 'ApiController.php';
require 'PasswordEncryptor_Blowfish.php';

class UserController extends ApiController
{

    protected $token;

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {

    }

    public function index($request)
    {
		$arr['title'] = 'About Us page';
		
        render('content',$arr);

    }

    public function login()
    {
        debug($_SERVER, 0);
        debug($_REQUEST);
        $request = $_REQUEST;
    }
 

    public function testx( $id = 9)
    {

          
        debugx('id is ->' . $id);  

        debugx('data in _POST');
        debug($_POST,0);

        debugx('data in _GET');
        debug($_GET,0);

        debugx('data in _REQUEST');
        debug($_REQUEST,0);

        debugx('data in _SERVER');
        debug($_SERVER,0);


        debug($_COOKIE,0);
        phpinfo();
 
    }

}
