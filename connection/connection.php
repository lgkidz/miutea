<?php
class connection{
	public $con;
	
	public function __construct(){
		$this->con = new PDO("mysql:host=localhost;dbname=miutea","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	}
}
?>