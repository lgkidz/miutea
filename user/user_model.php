<?php
include("../connection/connection.php");
class user_model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getInfo($email){
		$query = "SELECT * FROM thanhvien WHERE email = '$email'";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$result =  $statement->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	
	public function editInfo($n,$p,$a,$m){
		$query = "UPDATE `thanhvien` SET `ten_tv`='$n',`sdt`='$p',`diachi`='$a' WHERE email = '$m' ";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	
	public function userOrder($m){
		$query = "SELECT * FROM donhang WHERE email = '$m'";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function cancleOrder($id){
		$query = "UPDATE `donhang` SET `trang_thai`=-1 WHERE ma_dh = $id";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
	
	public function feedback($n,$e,$nd){
		$query = "INSERT INTO `feedback`(`ten_nguoi_lh`, `email_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES ('$n','$e','$nd',NOW())";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
}
?>