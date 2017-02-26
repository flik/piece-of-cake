# piece-of-cake
New MVC framework with lot of flexibility

# Check routes:
```
//Config/routes.php
$Route = array(
	'/'      			=> "/home",     // '/' homepage 
	'/page/smarty'      		=> "page",      // redirect with smarty template engine 
    '/post'      			=> "post",
    '/contact'      			=> "contact",                      
    '/test'      			=> "test",
    '/about'   				=> "User@index",   
    '/api/v1/auth/token'   		=> "User@login",  //ControllerName@ActionName same like cakephp or laravel 
    '/api/test'   			=> "User@testx"   			 
    
);
```
