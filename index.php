<!DOCTYPE html>
<html>
<head>
	<?php
		include("componentes/meta.php");
		include("componentes/link.php");
	?>
	<link rel="stylesheet" href="style/only_for_index_with_header_slider.css">
</head>
<body>
<?php
	include("header.php");
?>
<section id="home-slider">
	<div class="container-fluid nopad">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div id="slide1" class="home-slide-content">
						<div class="slide-text-container">
							<div class="serg_title"><h2>ПРОИЗВОДСТВО</h2></div>
							<div class="serg_title"><h2>СВЕТОДИОДНОГО ОСВЕТИТЕЛЬНОГО</h2></div>
							<div class="serg_title"><h2>ОБОРУДОВАНИЯ</h2></div>
							<div class="serg_title"><h3>уличного и офисного назначения</h3></div>
						</div>
					</div>
				</div>

				<div class="item">
					<div id="slide1" class="home-slide-content">
						<div class="slide-text-container">
							<div class="serg_title"><h2>ПРОИЗВОДСТВО</h2></div>
							<div class="serg_title"><h2>СВЕТОДИОДНОГО ОСВЕТИТЕЛЬНОГО</h2></div>
							<div class="serg_title"><h2>ОБОРУДОВАНИЯ</h2></div>
							<div class="serg_title"><h3>уличного и офисного назначения</h3></div>
						</div>
					</div>
				</div>

				<div class="item">
					<div id="slide1" class="home-slide-content">
						<div class="slide-text-container">
							<div class="serg_title"><h2>ПРОИЗВОДСТВО</h2></div>
							<div class="serg_title"><h2>СВЕТОДИОДНОГО ОСВЕТИТЕЛЬНОГО</h2></div>
							<div class="serg_title"><h2>ОБОРУДОВАНИЯ</h2></div>
							<div class="serg_title"><h3>уличного и офисного назначения</h3></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<section id="home-categoriez">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3  col-sm-6 bor-rig"><a href="booklet.php">
					<figure>
						<div class="img-container"><img src="img/comp_1.png" alt=""></div>
						<figcaption>Уличное освещение</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6 bor-rig"><a href="booklet.php">
					<figure>
						<div class="img-container"><img src="img/comp_2.png" alt=""></div>
						<figcaption>Производственное освещение</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6 bor-rig"><a href="booklet.php">
					<figure>
						<div class="img-container"><img src="img/comp_3.png" alt=""></div>
						<figcaption>Офисное освещение</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6"><a href="booklet.php">
					<figure>
						<div class="img-container"><img src="img/comp_4.png" alt=""></div>
						<figcaption>Лампы</figcaption>
					</figure>
				</a></div>
		</div>
		<div class="row bor-bot"></div>
		<div class="row">
			<div class="col-md-3 col-sm-6 bor-rig"><a href="control_sys.php">
					<figure>
						<div class="img-container"><img src="img/comp_5.png" alt=""></div>
						<figcaption>Телематическая система</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6 bor-rig"><a href="driveri.php">
					<figure>
						<div class="img-container"><img src="img/comp_5.png" alt=""></div>
						<figcaption>Драйверы</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6 bor-rig"><a href="documentation.php">
					<figure>
						<div class="img-container"><img src="img/comp_77.png" alt=""></div>
						<figcaption>Документация</figcaption>
					</figure>
				</a></div>
			<div class="col-md-3 col-sm-6">
				<div class="y_btn-cont">
					<a href="booklet.php" class="btn btn-default y_btn" role="button">Весь каталог</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include("footer.php");
	include("componentes/script.php");
?>
</body>
</html>