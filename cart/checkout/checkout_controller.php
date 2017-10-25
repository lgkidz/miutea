<?php
include("checkout_model.php");
class checkout_controller{
	public $model;
	
	public function __construct(){
		$this->model = new checkout_model();
	}
	
	public function getItem($id){
		$result = $this->model->getItem($id);
		return $result;
	}
	
	public function getMemberInfo($email){
		$result = $this->model->getMemberInfo($email);
		return $result;
	}
	
	public function load(){
		if(isset($_SESSION["email"])){
			$email = $_SESSION["email"];
			$info = $this->getMemberInfo($email);
		}
		$final = $_POST["price"];
		$items = sizeof($_SESSION["items"]);
		include("main.php");
	}
}
?>