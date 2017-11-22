<?php
include("sub_model.php");
class sub_controller{
	public $model;
	
	public function __construct(){
		$this->model = new sub_model();
	}
	
	public function listAllSub(){
		$resultset = $this->model->listAllSub();
		include("main.php");
	}

	public function process(){
		if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		else{
			$action = "none";
		}
		$this->listAllSub();
	}
}
?>