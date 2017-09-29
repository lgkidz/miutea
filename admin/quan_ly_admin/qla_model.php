<?php
class qla_model{
	public $con;
	
	public function  __construct(){
		$this->con  = new PDO("mysql:host=localhost;dbname=miutea", "root", "");
	}
	
	public function listAll(){
		$query = "SELECT * FROM admin";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function edit($id,$lid,$p,$n){
		$query = "UPDATE `admin` SET `ten_dn_ad`='$lid',`mat_khau`='$p',`ten_ad`='$n' WHERE `ma_ad`='$id'";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function insert($lid,$p,$n){
		$query = "INSERT INTO `admin`(`ten_dn_ad`, `mat_khau`, `ten_ad`) VALUES ('$lid','$p','$n')";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	public function delete($id){
		$query = "DELETE FROM `admin` WHERE ma_ad=$id";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
}
?>