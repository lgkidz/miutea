<?php
include("user_model.php");
class user_controller{
	public $model;
	public $user_mail;
	public $user_name;
	
	public function __construct(){
		$this->model = new user_model();
		$this->user_mail = $_SESSION["email"];
		$this->user_name = $_SESSION["user_name"];
	}
	
	public function getInfo($email){
		$result = $this->model->getInfo($email);
		return $result;
	}
	
	public function userOrder($email){
		$resultset = $this->model->userOrder($email);
		return $resultset;
	}
	
	public function orderDetails($id){
		$resultset = $this->model->orderDetails($id);
		return $resultset;
	}
	
	public function feedback($nd){
		$n = $this->user_name;
		$e = $this->user_mail;
		$this->model->feedback($n,$e,$nd);
	}
	
	public function loadPage($action){
		if($action == "info"){
			$info = $this->getInfo($this->user_mail);
		include("userinfo.php");
		}
		else if($action == "order"){
			$orders = $this->userOrder($this->user_mail);
			include("userorder.php");
		}
		else if($action == "noti"){
			include("noti.php");
		}
	}
	
	public function editInfo($n,$p,$a){
		$m = $this->user_mail;
		$this->model->editInfo($n,$p,$a,$m);
	}
	public function cancelOrder($id){
		$this->model->cancleOrder($id);
	}
	
	public function process(){
		
		if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		else{
			$action = "info";
		}
		
		if($action == "info"){
			$this->loadPage("info");
		}
		else if($action == "edit"){
			$n = $_POST["name"];
			$p = $_POST["phone"];
			$a = $_POST["address"];
			$this->editInfo($n,$p,$a);
			$this->loadPage("info");
		}
		else if($action == "order"){
			$this->loadPage("order");
		}
		else if($action == "cancelorder"){
			$id = $_GET["id"];
			$this->cancelOrder($id);
			$this->loadPage("order");
		}
		else if($action == "feedback"){
			$nd = $_POST["feedback"];
			$this->feedback($nd);
			$this->loadPage("noti");
		}
		else if($action == "noti"){
			$this->loadPage("noti");
		}
		else{
			$this->loadPage("info");
		}
		
		
	}
}
?>