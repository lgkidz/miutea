<?php
session_start();
?>
<?php
class prod{
	public $id;
	public $sl;
	public $price;
	public $gc;
	public $ice;
	public $sugar;
}

$prod = new prod();
$prod->id = $_POST["tsid"] ;
$prod->sl = $_POST["sl"] ;
$prod->price = $_POST["price"];
$prod->gc = $_POST["ghichu"];
$prod->ice = $_POST["ice"];
$prod->sugar = $_POST["sugar"];

array_push($_SESSION["items"],$prod);
echo '<script type="text/javascript">location.replace("../cart");</script>';
?>