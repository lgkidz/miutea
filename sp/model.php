<?php
include("../connection/connection.php");
class model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function n_o_p($k){
		$q = "SELECT ma_ts FROM trasua WHERE ma_loai_ts = $k";
		$statement = $this->con->prepare($q);
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function getDb($page,$p){
		$q = "SELECT * FROM trasua WHERE ma_loai_ts = 3 ORDER BY ten_ts LIMIT $page,$p";
		$statement = $this->con->prepare($q);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getKc($page,$p){
		$q = "SELECT * FROM trasua WHERE ma_loai_ts = 4 ORDER BY ten_ts LIMIT $page,$p";
		$statement = $this->con->prepare($q);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getTs($page,$p){
		$q = "SELECT * FROM trasua WHERE ma_loai_ts = 2 ORDER BY ten_ts LIMIT $page,$p";
		$statement = $this->con->prepare($q);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>