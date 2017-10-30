<?php
include("../connection/connection.php");
class search_model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getSp($k){
		$q = "SELECT * FROM trasua WHERE ten_ts LIKE '%$k%' ORDER BY ten_ts";
		$statement = $this->con->prepare($q);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
}
?>