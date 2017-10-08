<?php
include("../../connection/connection.php");
class prod_model{
	public $con;
	
	public function  __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function listAll(){
		$query = "SELECT * FROM `trasua` INNER JOIN loaitrasua ON trasua.ma_loai_ts = loaitrasua.ma_loai_ts";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getmal(){
		$query = "SELECT * FROM loaitrasua";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function edit($id,$ml,$t,$g,$mt){
		$query = "UPDATE `trasua` SET `ma_loai_ts`='$ml',`ten_ts`='$t',`gia_ts`=$g,`mo_ta`='$mt' WHERE `ma_ts`='$id'";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function insert($t,$ml,$i,$g,$mt){
		$query = "INSERT INTO `trasua`(`ma_loai_ts`, `ten_ts`, `gia_ts`, `hinh_anh_ts`, `mo_ta`) VALUES ('$ml','$t',$g,'$i','$mt')";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function delete($id){
		$query = "DELETE FROM `trasua` WHERE `ma_ts`=$id";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
}
?>