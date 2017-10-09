<?php
include("../../connection/connection.php");

class mem_model{
	public $con;
	
	public function __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function listALL(){
		$query = "SELECT * FROM thanhvien ORDER BY ten_tv";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function ListSome(){
		$query = "SELECT * FROM thanhvien ORDER BY ten_tv LIMIT 0,8";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>