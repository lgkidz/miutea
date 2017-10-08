<?php
include("model.php");
class controller{
	public $model;
	
	public function __construct(){
		$this->model = new model();	
	}
	
	public function getFeedback(){
		return $this->model->getFeedback();
	}
	
	public function get_no_member(){
		return $this->model->get_no_member();
	}
	
	public function getMember(){
		return $this->model->getMember();
	}
	
	public function getOrders(){
		return $this->model->getOrder();
	}
	
	public function invoke(){
		$feedback = $this->getFeedback();
		$nomembers = $this->get_no_member();
		$member = $this->getMember();
		$order = $this->getOrders();
		include("dashboard.php");
	}
}
?>