<?php
include("model.php");
class kc_controller{
	public $model;
	public $pagination = 6;
	public function __construct(){
		$this->model = new model();
		if(!isset($_SESSION["items"])){
			$_SESSION["items"] = array();
		}
	}
	
	public function n_o_p(){
		$res = $this->model->n_o_p(4);
		if($res%$this->pagination == 0){
			return intval($res/$this->pagination);
		}
		else{
			return intval($res/$this->pagination +1);
		}
	}
	
	public function listTs($page,$pagination){
		$n_o_p = $this->n_o_p();
		$result = $this->model->getKc($page,$this->pagination);
		include("content-kc.php");
	}
	
	public function addToCart($i){
		array_push($_SESSION["items"],array($i,1));
	}
	
	public function process(){
		if(isset($_GET["addtocart"])){
			$itemid = $_GET["addtocart"];
			$this->addToCart($itemid);
			$_SESSION["backtoshop"] = "../sp/kemcheese.php";
			echo '<script type="text/javascript">location.replace("../cart");</script>';
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