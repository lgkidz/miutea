<?php
include("../../connection/connection.php");
class tintuc_model{
	public $con;
	
	public function __construct(){
		$this->con  = new connection();
		$this->con = $this->con->con;
	}
	
	public function get_no_id(){
		$statement = $this->con->prepare("SELECT tin FROM tintuc");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function lastnews(){
		$query = "SELECT * FROM tintuc ORDER BY gio_dang";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function addnews($t,$b,$img){
		$statement = $this->con->prepare("INSERT INTO `tintuc`(`tieu_de`, `noi_dung`, `gio_dang`, `hinh_anh`) VALUES ('$t','$b',NOW(),'$img')");
		$statement->execute();
	}
	
	public function editnews($id,$t,$b){
		$statement = $this->con->prepare("UPDATE `tintuc` SET `tieu_de`='$t',`noi_dung`='$b',`gio_dang`=NOW() WHERE `ma_tin`=$id");
		$statement->execute();
	}
	
	public function delete($id){
		$statement = $this->con->prepare("DELETE FROM `tintuc` WHERE `ma_tin`=$id");
		$statement->execute();
	}
}


?>