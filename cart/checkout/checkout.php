<?php
session_start();
include("checkout_model.php");

$model = new checkout_model();

$n = $_POST["name"];
$m = $_POST["email"];
$t = $_POST["tel"];
$a = $_POST["addr"];

$id_dh = $model->placeOrder($n,$m,$t,$a)->ma_dh;
echo $id_dh . "<br>";
$items = sizeof($_SESSION["items"]);
for($i_items = 0; $i_items<$items;$i_items++){
	$item = $model->getItem($_SESSION["items"][$i_items][0]);
	$item_id = $item->ma_ts;
	echo $item_id . "<br>";
	$peritem = $item->gia_ts;
	echo $peritem . "<br>";
	$total = $peritem * $_SESSION["items"][$i_items][1];
	echo $total . "<br>";
	$model->placeOrderDetails($id_dh,$item_id,$_SESSION["items"][$i_items][1],$peritem,$total);
}

unset($_SESSION["items"]);
if(isset($_SESSION["userlegal"])){
	header("location: ../../user/?action=order");
}
else{
	header("location: ../");
}

?>