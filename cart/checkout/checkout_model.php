<?php
include("../../connection/connection.php");
class checkout_model{
	public $con;
	
	public function __construct(){
		$this->con = new connection();
		$this->con = $this->con->con;
	}
	
	public function getMemberInfo($email){
		$query = "SELECT * FROM thanhvien WHERE email = '$email'";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	
	public function getItem($id){
		$query = "SELECT * FROM trasua WHERE ma_ts = $id";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	
	public function getJustOrdered($n,$m,$t,$a){
		$statement = $this->con->prepare("SELECT ma_dh FROM donhang WHERE (ten_kh='$n' AND email='$m' AND sdt='$t' AND  noi_giao='$a') ORDER BY ABS(TIMEDIFF(ngay_dh, NOW())) LIMIT 1");
		$statement->execute();
		$id = $statement->fetch(PDO::FETCH_OBJ);
		return $id;
	}
	
	public function placeOrder($n,$m,$t,$a){
		$query = "INSERT INTO `donhang`(`ten_kh`, `email`, `ngay_dh`, `noi_giao`, `sdt`, `trang_thai`, `ma_nv`) VALUES ('$n','$m',NOW(),'$a','$t',0,-1)";
		$statement = $this->con->prepare($query);
		$statement->execute();
		$id = $this->getJustOrdered($n,$m,$t,$a);
		return $id;
	}
	
	public function placeOrderDetails($id_dh,$item_id,$quantity,$peritem,$total,$gc){
		$query = "INSERT INTO `chitietdonhang`(`ma_dh`, `ma_ts`, `so_luong`, `don_gia`, `tong_gia`, `ghi_chu`) VALUES ('$id_dh','$item_id','$quantity','$peritem','$total','$gc')";
		$statement = $this->con->prepare($query);
		$statement->execute();
	}
}
?>