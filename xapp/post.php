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

<h1>Post Page</h1>
<p>simple corephp page</p>

<?php

function odd($var)
{
	// returns whether the input integer is odd
	return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));


$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));

         $id = ''; 
         $a=array("a"=>"x5x","b"=>5,"c"=>"5"); 
echo array_search(5,$a,false);
exit;


?>
