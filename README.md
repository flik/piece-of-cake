# piece-of-cake
New MVC framework with lot of flexibility


# DB Configuration:
```
//Config/database.php 
```

# Common Functions:
```
//framework/bootstrap.php 
```

# Check routes:
```
//Config/routes.php
$Route = array(
	'/'      		=> "/home",     // /xapp/home.php 
	'/page/smarty'      	=> "page",      // redirect with smarty template engine. /xapp/page.php 
    '/post'      		=> "post",       
    '/contact'      		=> "contact",                      
    '/test'      		=> "test",      
    '/about'   			=> "User@index",  // /xapp/Controller/UserController.php and action index()  
    '/api/v1/auth/token'   	=> "User@login",  // ControllerName@ActionName same like cakephp or laravel 
    '/api/test'   		=> "User@testx"   			 
    
);
```


# Form like zend:
```
// https://github.com/adamwathan/form for documentation
$frm = new AdamWathan\Form\FormBuilder;

$years = ['1990' => 1990, '1991' => 1991, '1992' => 1992];
$model = json_decode(json_encode(array('full_name'=>'John Doe', 
					'bio'=>'', 
					'color'=>'',
					'terms'=>'',
					'birth_year' => 1991 , 
					'email'=>'john@example.com', 
					'date_of_birth'=> '1985-05-06' 
				)));
?>

<?= $frm->open(); ?>
<?= $frm->bind($model); ?> <hr>
<?= $frm->text('full_name'); ?> <hr>
<?= $frm->email('email')->required(); ?> <hr>
<?= $frm->text('date_of_birth'); ?> <hr>
<?= $frm->radio('color', 'red'); ?>  <hr>
<?= $frm->checkbox('terms')->uncheck(); ?><hr>
<?= $frm->select('birth_year',$years); ?><hr>
<?= $frm->textarea('bio')->rows(5)->cols(20)->addClass('important')->value('My biography'); ?> <hr>
<?= $frm->submit('Submit'); ?>
<?= $frm->close(); ?>
```


# Validation like laravel and record save like cakephp:
```
//http://github.com/Wixel/GUMP for documentation
use GUMP as V; // write at top

//example use in UserController.php
$input = $_REQUEST;
$is_valid = V::is_valid($input, array(
                'username' => 'required|alpha_numeric',
		'password' => 'required|max_len,100|min_len,6'
        ));
	
if ($is_valid === true) {
    // continue
} else {
    return $this->respond($is_valid, 401);
}

//initializing users table
X::manage('users');
$member = X::where('email', '=', $input['email']);

if (!empty($member))
    $this->respond(['Email already exist!'], 401);

$salt = '10$02afa11535df310febf1d0';
$e = new  PasswordEncryptor_Blowfish();
$encypted_password = $e->encrypt($input['password'], $salt, null);

$data = array();

$data['email'] = $input['email']; 
$data['password'] = $encypted_password;
X::save($data);
 
```


