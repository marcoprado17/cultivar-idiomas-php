<!DOCTYPE html>
<html>
<head>
	<?php include 'shared-head.php';?>
	<link rel="stylesheet" href="style/escolas_e_localizacao.css">
	<title>Escolas e Localização | Cultivar Idiomas</title>
</head>
<body>
	<?php include 'header.php';?>
  <?php include 'nav.php';?>

	<div class="container">
		<h3>Unidade Guaratinguetá</h3>
		<div class="row">
			<div class="col-sm-8">
				<div id="map"></div>
			</div>

			<div class="col-sm-4">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Localização</h3>
					</div>
					<div class="panel-body">
						Guaratinguetá - SP,<br>
						Pedregulho | Av. João Pessoa,<br>
						192 B Piso Superior,<br>
						CEP 12515-010
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contato</h3>
					</div>
					<div class="panel-body">
						Tel. 1: (12) 3122-2123<br>
						Tel. 2: (12) 3125-1740<br>
						Tel. 3: (12) 99185-1415 (Whatsapp)
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<h3>Unidade São José dos Campos</h3>
		<div class="row">
			<div class="col-sm-8">
				<div id="map2"></div>
			</div>

			<div class="col-sm-4">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Localização</h3>
					</div>
					<div class="panel-body">
						São José dos Campos - SP,<br>
						Jd. São Dimas,<br>
						Rua Major Antônio Domingues, 457,<br>
						CEP 12245-750
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contato</h3>
					</div>
					<div class="panel-body">
						Tel. 1: (12) 99185-1415 (Whatsapp)
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php';?>
  <?php include 'shared-scripts.php';?>
	<script src="js/escolas_e_localizacao.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgT7Kfvrdh1ImdoCvZig7HaxpXD4oera8&callback=initMap"></script>
</body>
</html>