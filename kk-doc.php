<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("componentes/meta.php");
		include("componentes/link.php");
	?>
</head>
<body>
<?php
	include("header.php");
?>
	<div  style="margin-bottom: 40px;"></div>
	<div class="container-fluid pad-hor-50">
		<div class="serg_title">
			<h1>Документация</h1>
		</div>	
		<div class="serg_title">
			<h3>Кривые силы света (КСС) </h3>
		</div>	
	</div>
	<div  style="margin-bottom: 20px;"></div>
	<section class="doc-link-kk">
			<div class="container-fluid pad-hor-50">
				<p>Любой светильник разрабатывается не для одного конкретного объекта, а для типового применения. Поэтому есть несколько стандартных типов диаграмм углового распределения силы света, или кривых силы света (КСС), подробное описание которых можно найти в ГОСТ 17677—82. <br></p>

				<p>В основу их классификации положены два независимых друг от друга признака: зона направлений максимальной силы света и коэффициент формы КСС, под которым понимают отношение максимальной силы света в данной меридиональной плоскости к среднеарифметической силе света светового потока для этой плоскости.<br></p>

				<p>Под КСС понимают график зависимости силы света светового потока от меридиональных и экваториальных углов, получаемый сечением его фотометрического тела плоскостью или поверхностью. КСС подразделяются на семь типов в соответствии с таблицей:<br></p>

			</div>
	</section>
	<div  style="margin-bottom: 30px;"></div>
	<section class="doc-link-graphics">
			<div class="container-fluid pad-hor-50">
				<div class="row">
					<div class="col-md-4">
						<img src="img/K.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Концентрированная (K)</td>
								<td>30°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/G.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Глубокая (Г)</td>
								<td>60°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/Cos.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Косинусная (Д)</td>
								<td>120°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/PSh.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Полуширокая (Л)</td>
								<td>140°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/Sh.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Широкая (Ш)</td>
								<td>160°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/Ravn.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Равномерная (М)</td>
								<td>180°</td>
							</tr>
						</table>
					</div>
					<div class="col-md-4">
						<img src="img/Sin.png" alt="" class="img-responsive">
						<table>
							<tr>
								<th>Наименование</th>
								<th>Угол раскрытия светового потока</th>
							</tr>
							<tr>
								<td>Синусная (С)</td>
								<td>90°</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>	
	<div  style="margin-bottom: 40px;"></div>
<?php
	include("footer.php");
	include("componentes/script.php");
?>
</body>
</html>
