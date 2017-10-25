<?php
include("../connection/connection.php");
class cart_model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getItem($id){
		$query = "SELECT * FROM trasua WHERE ma_ts = $id";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_OBJ);
		return $result;
	}
}
?>