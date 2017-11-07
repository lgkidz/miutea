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

.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
body {
	font-family: Helvetica Neue;
	font-size: 14px;	
}
</style>

	<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

<?php
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	$statement = $con->prepare("SELECT * FROM tintuc ORDER BY gio_dang LIMIT 0,4");
	$statement->execute();
	$news = $statement->fetchAll(PDO::FETCH_OBJ);
?>
    <title></title>
<div class="Tintuc">
<!-- MAIN (Center website) -->
<div style="margin-top: -20px;" id="about_us">
		<div class=" w3-sand w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-xxxlarge w3-text-brown">KHUYẾN MẠI</h1>
</div>
<!-- Portfolio Gallery Grid -->
<div class="row">
 <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="images/22282051_1131691660295674_559305115883979488_n.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="images/22141175_1127066084091565_48197985409345839_n.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="images/bobapop-chua-lang-ha-noi-khuyen-mai-giam-gia-1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="images/22141175_1127066084091565_48197985409345839_n.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="images/21766525_1124186167712890_387934289165682914_n.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="images/22555029_1135861229878717_1881517101062608678_n.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="" onclick="onClick(this)">
    </div>

    <div class="w3-col m3">
      <img src="images/22729065_1139299809534859_353184427846022730_n.jpg" style="width:100%" class="w3-hover-opacity" alt=""  onclick="onClick(this)">
    </div>

    <div class="w3-col m3">
      <img src="images/bobapop-nguyen-phong-sac-ha-noi-khuyen-mai-giam-gia.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>
	<div id="modal01" class="w3-modal w3-black" style="padding-top:0; z-index:1000" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-50">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
	  </div>

<!-- END GRID -->
</div>

</div>