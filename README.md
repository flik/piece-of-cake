# piece-of-cake
New MVC framework with lot of flexibility

# Check routes:
```
//Config/routes.php
$Route = array(
	'/'      		=> "/home",     // '/' homepage /xapp/home.php 
	'/page/smarty'      	=> "page",      // redirect with smarty template engine. /xapp/page.php 
    '/post'      		=> "post",       
    '/contact'      		=> "contact",                      
    '/test'      		=> "test",      
    '/about'   			=> "User@index",  // /xapp/Controller/UserController.php and action index()  
    '/api/v1/auth/token'   	=> "User@login",  //ControllerName@ActionName same like cakephp or laravel 
    '/api/test'   		=> "User@testx"   			 
    
);
```
