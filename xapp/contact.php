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
  
?>
<?php require 'Views/header.php'; ?>
<h1>Contact Page</h1> 
//https://github.com/adamwathan/form for documentation
<?php
  
  if(isset($_REQUEST['email'])){
	 debugx('sumited values:');
	 debug($_REQUEST,0);
  }
  
  
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
<?php require 'Views/footer.php'; ?>
