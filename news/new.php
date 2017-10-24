<style>
body {
	font-family: Helvetica Neue;
	font-size: 14px;	
}
* {
    box-sizing: border-box;
	
}
.Tintuc {
    background-color: white;
	margin-bottom: -30px;
	margin-top: -20px;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    word-break: break-all;
	text-align: center;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
    text-align: center;
}
.content:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	border: 5px solid #963;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
<?php
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	$statement = $con->prepare("SELECT * FROM tintuc ORDER BY gio_dang LIMIT 0,4");
	$statement->execute();
	$news = $statement->fetchAll(PDO::FETCH_OBJ);
?>
    <div class="Tintuc">
<!-- MAIN (Center website) -->
<div style="margin-top: -20px;" id="about_us">
		<div class=" w3-sand w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-xxxlarge w3-text-brown">TIN TỨC</h1>
</div>
<!-- Portfolio Gallery Grid -->
<div class="row">
 <?php foreach($news as $ob){ ?>
  <div class="column">
    <div class="content">
      <img src="img/thiết kế quán trà sữa dingtea 2 5.jpg" alt="" style="width:100%">
      <h3><?php echo $ob->tieu_de;?></h3>
      <p><?php echo substr($ob->noi_dung,0,75);?> ...
		<br>
			<a href="#" class="w3-text-blue-gray"> Xem thêm  </a></p>
    </div>
  </div>
<?php } ?>

<!-- END GRID -->
</div>

</div>