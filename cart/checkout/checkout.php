<?php
session_start();
class prod{
	public $id;
	public $sl;
	public $price;
	public $gc;
	public $ice;
	public $sugar;
	}
include("checkout_model.php");

$model = new checkout_model();

$n = $_POST["name"];
$m = $_POST["email"];
$t = $_POST["tel"];
$a = $_POST["addr"];

$id_dh = $model->placeOrder($n,$m,$t,$a)->ma_dh;
$items = sizeof($_SESSION["items"]);
for($i_items = 0; $i_items<$items;$i_items++){
	$item = $model->getItem($_SESSION["items"][$i_items]->id);
	$item_id = $item->ma_ts;
	$peritem = $_SESSION["items"][$i_items]->price;
	$total = $peritem * $_SESSION["items"][$i_items]->sl;
	$gc = $_SESSION["items"][$i_items]->gc . ", ice ".$_SESSION["items"][$i_items]->ice."%, sugar ".$_SESSION["items"][$i_items]->sugar."%";
	$model->placeOrderDetails($id_dh,$item_id,$_SESSION["items"][$i_items]->sl,$peritem,$total,$gc);
}

unset($_SESSION["items"]);
if(isset($_SESSION["userlegal"])){
	echo '<script type="text/javascript">location.replace("../../user/?action=order");</script>';
}
else{
	echo '<script type="text/javascript">location.replace("../?success=true");</script>';
}

?>