<?php

 class xdb
{
	/*
    private $dom = null;  
    public $nodes = array();
    public $parent = null;
    public $children = array();
    public $tag_start = 0;

*/
    function __construct( )
    {
        
    }

    function __destruct()
    {
       // $this->clear();
    }
 
 ///////////////////////////////////////////////////////////////////////////////
 public static function setup($constr, $user, $pass) {
	 
	$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
 }
	 
