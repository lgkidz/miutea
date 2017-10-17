<?php
include("model.php");
class ts_controller{
	public $model;
	public $pagination = 6;
	public function __construct(){
		$this->model = new model();
	}
	
	public function n_o_p(){
		$res = $this->model->n_o_p(2);
		if($res%$this->pagination == 0){
			return intval($res/$this->pagination);
		}
		else{
			return intval($res/$this->pagination +1);
		}
	}
	
	public function listTs($page,$pagination){
		$n_o_p = $this->n_o_p();
		$result = $this->model->getTs($page,$this->pagination);
		include("content-ts.php");
	}
	
	public function process(){
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