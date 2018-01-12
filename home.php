<head>
<meta name="keyword" content="Truck Booking/Hire Online,Transport Services, Transportation Services, Logistics Services, Truck Rental Services, Transport Company,Logistics Transportation Services, Online Truck Booking">
<link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet"  type="text/css" href="bootatrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/JQuery.js" ></script>
  <script  type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <style type="text/css">
		.p{
			background-image: url('topbg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center; 
			-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
			width: auto;
			height: auto;
		}
		#t{
			margin-top: -20px;
			margin-right: -50px;
			box-shadow: 5px 5px 5px black;
		}
</style>
</head>
<div class="p">
	<div>
		<?php
		include 'top.php';
		?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			<?php include 'homef.php'; ?>
			</div>
			<div class="col-sm-8" id="t">


				<!-- image slider -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner"  style="borborder-radius:25px">
		<div class="item active">
			<center><img src="1.jpg" width="800" height="380"></center>
			<div class="carousel.caption">
				
			</div>
		</div>
		<div class="item">
			<center><img src="2.jpg" width="800" height="380"></center>
			<div class="carousel.caption">
				
			</div>
		</div>
		<div class="item">
			<center><img src="3.jpg" width="800" height="380"></center>
			<div class="carousel.caption">
				
			</div>
		</div>
		<div class="item">
			<center><img src="4.jpg" width="800" height="380"></center>
			<div class="carousel.caption">
				
			</div>
		</div>
		<div class="item">
			<center><img src="5.jpg" width="800" height="380"></center>
			<div class="carousel.caption">
				
			</div>
		</div>
	</div>
	<!-- next-previous button in image -->
	<a class="carousel-control left" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	<!-- to add indicator in slide -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" ></li>
		<li data-target="#myCarousel" data-slide-to="2" ></li>
		<li data-target="#myCarousel" data-slide-to="3" ></li>
		<li data-target="#myCarousel" data-slide-to="4" ></li>
	</ol>
</div>
</div>
</div>
</div>



<?php include 'foot.php'  ?>
</div>