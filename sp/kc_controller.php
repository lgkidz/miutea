<?php
include("model.php");
class kc_controller{
	public $model;
	
	public function __construct(){
		$this->model = new model();
	}
	
	public function n_o_p(){
		$res = $this->model->n_o_p(4);
		if($res%12 == 0){
			return intval($res/12);
		}
		else{
			return intval($res/12 +1);
		}
	}
	
	public function listTs($page){
		$n_o_p = $this->n_o_p();
		$result = $this->model->getKc($page);
		include("content-kc.php");
	}
	
	public function process(){
		$this->listTs(0);
	}
}
?>