<?php
include("tintuc_model.php");
class tintuc_controller{
	public $model;
	
	public function __construct(){
		$this->model = new tintuc_model();
	}
	
	public function get_nof(){
		$number_of_news = $this->model->get_no_id();
		return $number_of_news;
	}
	
	public function get_requested($page){
		$head = ($page-1)*5;
		$nor = 5;
		$resultset = $this->model->lastnews($head,$nor);
		include("news.php");
	}
	
	public function lastnews(){
		$resultset = $this->model->lastnews();
		include("");
	}
	
	public function addnews($t,$b,$img){
		$this->model->addnews($t,$b,$img);
	}
	
	public function editnews($id,$t,$b){
		$this->model->editnews($id,$t,$b);
	}
	
	public function delete($id){
		$this->model->delete($id);
	}
	
	public function process(){
		if(isset($_GET["action"])){
			$action = $_GET["action"];
		}
		else{
			$action = "none";
		}
		if($action == "add" && isset($_POST["newsubmit"])){
			$t = $_POST["title"];
			$b = $_POST["body"];
			$target_dir = "../../news_images/";
			$target_file = $target_dir . basename($_FILES["img"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
    		$check = getimagesize($_FILES["img"]["tmp_name"]);
    		if($check !== false) {
        		//echo "File is an image - " . $check["mime"] . ".";
        		$uploadOk = 1;
    		}
			else {
        		echo "File is not an image.";
        		$uploadOk = 0;
    		}
			// Check file size
			if (file_exists($target_file)) {
    			echo "Sorry, file already exists.";
    			$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    			$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
    			echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
			}
			else {
    			if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        			$this->addnews($t,$b,$target_file);
					header("location: index.php");
    			}
				else {
        			echo "Sorry, there was an error uploading your file.";
    			}
			}
			
		}
		else if($action == "edit"){
			$id = $_GET["id"];
			$t = $_POST["etitle"];
			$b = $_POST["ebody"];
			$this->editnews($id,$t,$b);
			header("location: index.php");
		}
		else if($action == "delete"){
			$id = $_GET["id"];
			$this->delete($id);
			header("location: index.php");
		}
	}
}
?>