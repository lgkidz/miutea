<?php
include("get_feedback_model.php");
class get_feedback_controller{
	public $model;
	
	public function __construct(){
		$this->model = new get_feedback_model();
	}
	
	public function get_requested($page){
		$head = ($page-1)*5;
		$nor = 5;
		$resultset = $this->model->get_requested($head,$nor);
		include("main.php");
	}
	
	public function get_nof(){
		$number_of_feedback = $this->model->get_no_id();
		return $number_of_feedback;
	}
	
	public function invoke(){
		$this->get_requested(1);
	}
}
?>