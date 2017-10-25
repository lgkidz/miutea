<?php
include("model.php");
class db_controller{
	public $model;
	public $pagination = 6;
	public function __construct(){
		$this->model = new model();
		if(!isset($_SESSION["items"])){
			$_SESSION["items"] = array();
		}
	}
	
	public function n_o_p(){
		$res = $this->model->n_o_p(3);
		if($res%$this->pagination == 0){
			return intval($res/$pagination);
		}
		else{
			return intval($res/$this->pagination +1);
		}
	}
	
	public function listTs($page,$pagination){
		$n_o_p = $this->n_o_p();
		$result = $this->model->getDb($page,$this->pagination);
		include("content-db.php");
	}
	
	public function addToCart($i){
		array_push($_SESSION["items"],$i);
	}
	
	public function process(){
		if(isset($_GET["addtocart"])){
			$itemid = $_GET["addtocart"];
			$this->addToCart($itemid);
			$_SESSION["backtoshop"] = "../sp/dabao.php#content-ts";
			header("location: ../cart");
		}
		if(isset($_GET["page"])){
			$x = $_GET["page"];
			$p = ($x - 1)*$this->pagination;
			$this->listTs($p,$this->pagination);
		}
		else{
			$this->listTs(0,$this->pagination);
		}
		
	}
}
?>