<?php
 
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

    public function index()
    {
		$arr['title'] = 'About Us page';
		
        render('content',$arr);

    }
    
    public function datatable()
    {
		$arr['title'] = 'Satatable Us page';
		
        render('datatable',$arr);

    }
    

    public function login()
    {
		$input = $_REQUEST;
		$is_valid = V::is_valid($input, array(
                'username' => 'required|alpha_numeric',
				'password' => 'required|max_len,100|min_len,6',
				'password_confirm' => 'equalsfield,password',
        ));

        if ($is_valid === true) {
            // continue
        } else {
            return $this->respond($is_valid, 401);
        }
        
        //initializing users table
        X::manage('users');
        $member = X::where('email', '=', $_REQUEST['email']);

        if (!empty($member))
            $this->respond(['Email already exist!'], 401);
            
        $salt = '10$02afa11535df310febf1d0';
        $e = new  PasswordEncryptor_Blowfish();
        $encypted_password = $e->encrypt($input['password'], $salt, null);
        
        $data = array();
 
        $data['email'] = $input['email']; 
        $data['password'] = $encypted_password;
        X::save($data);
        
        
            
            


        debug($_SERVER, 0);
        debug($_REQUEST);
        $request = $_REQUEST;
    }
 

    public function testx( $id = 9)
    {

        debugx('xapp/Controller/UserController.php'); 
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
