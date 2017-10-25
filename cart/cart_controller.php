<?php
include("cart_model.php");
class cart_controller{
	public $model;
	
	public function __construct(){
		$this->model = new cart_model();
	}
	
	public function getItem($id){
		$result = $this->model->getItem($id);
		return $result;
	}
	
	public function showItems(){
		if(isset($_SESSION["items"])){
			$items = sizeof($_SESSION["items"]);
		}
		else{
			$items = 0;
		}
		include("cart.php");
	}
	
	public function process(){
		if(isset($_GET["editsl"]) && isset($_GET["sl"])){
			$id = $_GET["editsl"];
			$sl = $_GET["sl"];
			$_SESSION["items"][$id][1] = $sl;
		}
		else if(isset($_GET["delete"])){
			$id = $_GET["delete"];
			
			for($i = $id;$i<sizeof($_SESSION["items"])-1;$i++){
				$_SESSION["items"][$i] = $_SESSION["items"][$i+1];
			}
			
			unset($_SESSION["items"][sizeof($_SESSION["items"])-1]);
		}
		$this->showItems();
	}
}
?>