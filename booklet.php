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
	<div class="container-fluid pad-hor-50">
<!--Beginning Row1-->
		<div class="title">
			<h1 class="color">СВЕТОДИОДНЫЕ СВЕТИЛЬНИКИ</h1>
			<h3 >ВЕСЬ КАТАЛОГ</h3>
		</div>
<!--end Row2-->

<!--Beginning Row2-->
		<div class="table-responsive mt-150 customTable">
			<table class="table table-bordered responsive">
				<thead>
					<tr class="row_table">
						<th>Сезия</th>
						<th>Изображение </th>
						<th>Область Применения</th>
						<th>Особенности</th>
						<th>Стоимость</th>
					</tr>
				</thead>

				<tbody>
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row">LL_SE</th>
						<td><img src="img/01catalog_catalog 1170px.png" alt=""></td>
						<td>Улица</td>
						<td>Влагозащитные </td>
						<td>7 500 р. </td>
					</tr>
					<tr class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row">II_FF</th>
						<td><img src="img/02_catalog_catalog 1170px.png" alt=""></td>
						<td>Улица, производство, склад </td>
						<td>Влагозащищенные</td>
						<td>8 500 р. </td>
					</tr>

					<!--3,4-->
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row"> II-FF</th>
						<td><img src="img/03_01_catalog_catalog 1170px.png" alt=""></td>
						<td>Улица, производство, склад</td>
						<td>Взрывозащищенные,<br>влагозащищенные</td>
						<td>22 500 p.</td>
					</tr>
					<tr class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row">II-FF</th>
						<td><img src="img/4catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>Улица, производство, склад</td>
						<td>Влагозащищенные</td>
						<td>500 p.</td>
					</tr>

					<!--5,7-->
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row">LL-FE</th>
						<td><img src="img/5catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>Склад, офис, подъезды жилых домов</td>
						<td>Сверхтонкие</td>
						<td>500 p.</td>
					</tr>
					<tr class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row">LL-FE</th>
						<td><img src="img/6catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>офис</td>
						<td></td>
						<td>500 p.</td>
					</tr>

					<!--7,8-->
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row">LL-C</th>
						<td><img src="img/7catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>Улица, офис, загородный дом, сауна</td>
						<td>Сверхлегкие, влагозащищенные</td>
						<td>500 p.</td>
					</tr>
					<tr class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row">LL FE</th>
						<td><img src="img/8catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>офис</td>
						<td></td>
						<td>500 p.</td>
					</tr>

					<!--9,10-->
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row">LL-P</th>
						<td><img src="img/9catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>офис</td>
						<td></td>
						<td>500 p.</td>
					</tr>
					<tr class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row">LL-P</th>
						<td><img src="img/10catalog_catalog 1170px.png" alt="lanterna"></td>
						<td>офис</td>
						<td></td>
						<td>500 p.</td>
					</tr>

					<!--11.12-->
					<tr class='clickable-row' data-href='product_page.php'>
						<th scope="row"></th>
						<td><img src="img/11catalog_catalog 1170px.png" alt="lanterna"></td>
						<td></td>
						<td>точечный светильник</td>
						<td>500 p.</td>
					</tr>
					<tr class='clickable-row' class="row_table clickable-row" data-href='product_page.php'>
						<th scope="row"></th>
						<td><img src="img/12.png" alt="lanterna"></td>
						<td></td>
						<td>Лампочка под патрон<br> Е26 / Е27</td>
						<td>500 p.</td>
					</tr>
				</tbody>
			</table><!-- end table-->
		</div>
	</div><!-- end container-->

	<?php
		include("footer.php");
		include("componentes/script.php")
	?>
</body>
</html>