
<style>
* {
    box-sizing: border-box;
	
}
.Tintuc {
    background-color: rgba(250,230,170,1.00);
	margin-bottom: -30px;
	margin-top: -20px;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-family: "Poppins", sans-serif;
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
	border: 5px solid rgba(241,203,245,1.00);
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
    <div class="Tintuc">
<!-- MAIN (Center website) -->
<div style="padding-top: 30px;" class="main">
<h1 class="w3-xxxlarge w3-text-red"><b>Hôm nay có tin gì</b></h1>
<p align="center">Chúc các bạn sẽ có được những thông tin thú vị</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="img/thiết kế quán trà sữa dingtea 2 5.jpg" alt="" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
		<br>
			<a href="#" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
   <img src="img/thiết kế quán trà sữa dingtea 2 5.jpg" alt="" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
		<br>
			<a href="#" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="img/thiết kế quán trà sữa dingtea 2 5.jpg" alt="" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
		<br>
			<a href="#" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="img/thiết kế quán trà sữa dingtea 2 5.jpg" alt="" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.
		<br>
			<a href="#" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
  </div>
<!-- END GRID -->
</div>

</div></div>