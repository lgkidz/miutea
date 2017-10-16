<?php
include("model.php");
class db_controller{
	public $model;
	
	public function __construct(){
		$this->model = new model();
	}
	
	public function n_o_p(){
		$res = $this->model->n_o_p(3);
		if($res%12 == 0){
			return intval($res/12);
		}
		else{
			return intval($res/12 +1);
		}
	}
	
	public function listTs($page){
		$n_o_p = $this->n_o_p();
		$result = $this->model->getDb($page);
		include("content-db.php");
	}
	
	public function process(){
		$this->listTs(0);
	}
}
?>