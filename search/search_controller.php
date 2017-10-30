<?php
include("search_model.php");

class search_controller{
	public $model;
	public $query = "";
	public function __construct(){
		$this->model = new search_model();
		if(!isset($_SESSION["items"])){
			$_SESSION["items"] = array();
		}
		
	}
	
	public function listTs($query){
		$result = $this->model->getSp($query);
		include("content.php");
	}
	
	public function addToCart($i){
		array_push($_SESSION["items"],array($i,1));
	}
	
	public function process(){
		if(isset($_POST["search"])){
			$this->query = $_POST["search"];
		}
			
		if(isset($_GET["addtocart"])){
			$itemid = $_GET["addtocart"];
			$this->addToCart($itemid);
			$_SESSION["backtoshop"] = "../search.php";
			echo '<script type="text/javascript">location.replace("../cart");</script>';
		}
		$this->listTs($this->query);
		
	}
}
?>