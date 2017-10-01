<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("../style_and_script.php"); ?>

<title>Quản lý admin</title>
</head>
<body>
<?php

include("qla_controller.php");
$controller = new qla_controller();
$controller->process();
?>
</body>
</html>
