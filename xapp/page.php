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

<?php
 // echo 'url and form variables <hr>';
 // print_r($_REQUEST);
  //echo '<hr>';
  $assign = array();
$assign["Name"] =  "Fred Irving Johnathan Bradley Peppergill";
$assign["SureName"] = array("John", "Mary", "James", "Henry") ;
 $assign["Class"] = array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
                               array("M", "N", "O", "P")) ;

$assign["contacts"] =  array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")) ;

$assign["option_values"] = array("NY", "NE", "KS", "IA", "OK", "TX") ;
$assign["option_output"] = array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas") ;
$assign["option_selected"] = "NE" ;
$assign["link"] = "http://www.google.com" ;
 
  renderSmarty('index', $assign);
?>
