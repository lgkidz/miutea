<?php
include("../connection/connection.php");
class model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getFeedback(){
		$query = "SELECT * FROM feedback ORDER BY ngay_lh LIMIT 0,5";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function get_no_member(){
		$statement = $this->con->prepare("SELECT ma_tv FROM thanhvien");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function get_no_sold(){
		$query = "SELECT * FROM `chitietdonhang` INNER JOIN donhang  ON donhang.ma_dh = chitietdonhang.ma_dh WHERE donhang.trang_thai = 1";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function get_no_order(){
		$statement = $this->con->prepare("SELECT ma_dh FROM donhang WhERE trang_thai = 1");
		$statement->execute();
		$resultset = $statement->rowCount();
		return $resultset;
	}
	
	public function getMember(){
		$query = "SELECT * FROM thanhvien LIMIT 0,8";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
	
	public function getOrder(){
		$query = "SELECT donhang.ma_dh, donhang.trang_thai,trasua.ten_ts,chitietdonhang.so_luong FROM `donhang` JOIN chitietdonhang on donhang.ma_dh = chitietdonhang.ma_dh JOIN trasua on chitietdonhang.ma_ts = trasua.ma_ts LIMIT 0,7";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$resultset = $statement->fetchAll(PDO::FETCH_OBJ);
		return $resultset;
	}
}
?>