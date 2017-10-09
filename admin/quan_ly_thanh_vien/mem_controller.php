<?php
include("mem_model.php");
class mem_controller{
	public $model;
	
	public function __construct(){
		$this->model = new mem_model();
	}
	
	public function listALl(){
		$member = $this->model->listALL();
		include("main.php");
	}
	
	public function listSome(){
		$member = $this->model->listSome();
		include("main.php");
	} 
	
	public function process(){
		if(isset($_GET["view"])){
			$v = $_GET["view"];
		}
		else{
			$v = "Some";
		}
		
		
		if($v == "all"){
			$this->listALl();
		}
		else
		$this->listSome();
	}
}
?>