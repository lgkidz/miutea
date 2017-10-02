<?php
include("../../connection/connection.php");
class get_feedback_model{
	public $con;
	
	public function __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function get_no_id(){
		$statement = $this->con->prepare("SELECT ma_feedback FROM feedback");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function get_requested($head, $nor){
		$query = "SELECT * FROM feedback ORDER BY ngay_lh LIMIT $head,$nor";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>