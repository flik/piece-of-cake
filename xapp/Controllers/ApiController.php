<?php
 
class ApiController  {

    protected $statusCode = 200;

    public function getStatusCode() {

        return $this->statusCode;
    }

    public function setStatusCode($code,$msg='Something went wrong') {

/*
        $this->statusCode = $code;
        try {
			if ($code >=400 ) {
				throw new Exception($msg, $code );
			}

		 
		} catch (Exception $e) {
			return json_encode(array(
				'error' => array(
					'msg' => $e->getMessage(),
					'code' => $e->getCode(),
				),
			));
		}
*/
		if ($code !== NULL) {

                switch ($code) {
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                       throw new Exception('Unknown http status code "' . htmlentities($code) . '"', $code );  
                    break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;
			}
      // echo $text; exit;
			return $text;
			return $this;
    }

    public function validateUser($data) {
 
        $e = new PasswordEncryptor_Blowfish();
        X::manage('users');
        $user = X::where('email', $data['email']);

        if(!empty($user)){
			 $salt = '10$02afa11535df310febf1d0';
			
            $encypted_password = $e->encrypt(@$data['password'], $salt, null); 
            $user = X::where('password', $encypted_password);
        
         
            return $user;
        }
        return false;
    }
  
    public function respond($data, $code=200) { 
		 $this->setStatusCode($code);
		header('Content-Type: application/json');
        echo json_encode($data); exit;
    }
 
    public function setUser($data) {
        
			  
           $user = new \App\User();
			 // Create a new user in the database...
			 $last_user = $user::where('email', 'like',$data['email'])->orderBy('id', 'desc')->first();
			if(is_null($last_user))
				$last_user = $user::Create($data);
			
			/*
            $user->name = $data['name']; 
            $user->email = $data['email'];
            $user->password = $data['password'] ; 
            $user->save();
            $last_user = User::orderBy('id', 'desc')->first();
            */
           
            return $last_user;
    }
     
    public function getAuthenticatedUser($request='') {
        
        try {
             
            $token = self::authorizeRequest($request);
  
            if (!$token) {
                $this->setStatusCode(403);
                return false;
            }
            
        } catch (TokenExpiredException $e) {
            return $this->setStatusCode($e->getStatusCode())->respondWithError('Token has expired');
        } catch (TokenInvalidException $e) {
            return $this->setStatusCode($e->getStatusCode())->respondWithError('Token is invalid');
        } catch (JWTException $e) {
            return $this->setStatusCode($e->getStatusCode())->respondWithError('Token is absent');
        }
         ;
         $xtoken['user'] = $token[0];
         $xtoken['xid'] = $token[0]['xid'];
         $xtoken = (object)$xtoken;
          
       return  $xtoken;
    }
    
     public function getNewToken($xid) {
         
        try {
             $token = self::generateToken($xid); 
        } catch (TokenExpiredException $e) {
            return 'Token has expired';
        }
        return $token; 
     }
     
      public static function generateToken($member)
    {
        // Member must exist for us to generate a token
        if (is_null($member)) {
            return false;
        }
         //debugx($member);
        $tokenID = urlencode(base64_encode(mcrypt_create_iv(32, MCRYPT_RAND))).'-A'.encrypt($member).'-A'.urlencode(base64_encode(mcrypt_create_iv(32, MCRYPT_RAND))) ;
		return $tokenID;
	}
	 
	 public static function authorizeRequest($request)
    {
		
		
        $auth = '';
         
		if (isset($_REQUEST['token'])) {
			$auth = $_REQUEST['token'];
		}
             
        $token = self::getToken($auth);
      
        return $token;
    }
    
    public static function getToken($jwt)
    {
        
        if ($jwt) {
           $token = explode( '-A',$jwt);
          
			$xid = str_replace('%00','',decrypt($token[1]));	// 
			 
			 //  g::debug(str_replace('%00','',$xid));
             try {  
				 X::manage('users'); 
				$tokenObject = X::where('xid', $xid);
                    // If the token exists and hasn't been revoked
                    if (!is_null($tokenObject)) {
                      
                        return $tokenObject;
                    }
                 
          } catch (Exception $e) {
               
                      echo $e->getMessage();
                      
                /*
                 * the token was not able to be decoded.
                 * this is likely because the signature was not able to be verified (tampered token)
                 */
                return false;
            }
        } else {
            // Lacks the token
            return false;
        }


        return false;
    }
    


}
