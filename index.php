<!DOCTYPE html>
<html>
<head>
	<?php include 'shared-head.php';?>
	<link rel="stylesheet" href="style/animate.min.css">
	<link rel="stylesheet" href="style/home.css">
	<title>Home | Cultivar Idiomas</title>
</head>

<body>
	<?php include 'header.php';?>
	<?php include 'nav.php';?>

	<!-- Carousel - Begin -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First slide -->
			<div class="item active">
				<img src="img/slide1_teste.png" alt="Primeiro slide">

				<div class="carousel-caption align-right">
					<h2 data-animation="animated bounceInLeft" class="carousel-text">Faça nosso teste de nivelamento</h2>

					<ul>
						<li>
							<a class="btn btn-success" data-animation="animated bounceInUp" role="button" href="/teste-ingles">
								Teste de Inglês
							</a>
						</li>
						<li>
							<a class="btn btn-success not-first-test-btn" data-animation="animated bounceInUp" role="button" href="/teste-alemao">
								Teste de Alemão
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Second slide -->
			<div class="item">
				<img src="img/slide2_cursos.png" alt="Segundo slide">

				<div class="carousel-caption align-left">
					<img data-animation="animated bounceInLeft" src="img/USA.png" alt="Bandeira dos Estados Unidos da América" class="first-flag-img-in-languages-carousel course-img"  >
					<span data-animation="animated bounceInLeft" class="lang-text">Inglês</span>
					<br>
					<img data-animation="animated bounceInLeft" src="img/Germany.png" alt="Bandeira da Alemanha"   class="course-img">
					<span data-animation="animated bounceInLeft" class="lang-text">Alemão</span>
					<br>
					<img data-animation="animated bounceInLeft" src="img/Spain.png" alt="Bandeira da Espanha"   class="course-img">
					<span data-animation="animated bounceInLeft" class="lang-text">Espanhol</span>
					<br>
					<img data-animation="animated bounceInLeft" src="img/China.png" alt="Bandeira da China"   class="course-img">
					<span data-animation="animated bounceInLeft" class="lang-text">Mandarim</span>
					<br>
					<img data-animation="animated bounceInLeft" src="img/Japan.png" alt="Bandeira do Japão"   class="course-img">
					<span data-animation="animated bounceInLeft" class="lang-text">Japonês</span>
					<br>
					<p class="carousel-small-text">E muito mais...</p>
				</div>
			</div>

			<!-- Third slide -->
			<div class="item">
				<img src="img/slide3_contato.png" alt="Terceiro slide">

				<div class="carousel-caption align-left">
					<h2 data-animation="animated bounceInLeft" class="carousel-text">Ligue para nós e tire suas dúvidas</h2>
					<div class="flex-wrap">
						<h2 data-animation="animated bounceInLeft" class="carousel-text">(11) 99185-1415</h2>
						<img data-animation="animated bounceInLeft" src="img/whatsapp-icon.png" alt="Bandeira do Japão" class="whatsapp-icon-img">
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Carousel - End -->

	<div class="container">
		<div>
			<a href="/quem-somos">
				<h2>Quem somos</h2>
			</a>
			<div class="quem-somos-content-box">
				<div class="quem-somos-img-box">
					<img src="img/cultivar_logo.png" class="img-circle quem-somos-img" alt="Logo da cultivar idiomas">
				</div>
				<div class="quem-somos-text-box">
					<p>Uma escola em referência no ensino de idiomas com mais de 10 anos de experiência. A Cultivar Idiomas engloba não só o ensino, mas também a cultura dos países que são estudados, buscando levar ao máximo o aluno para dentro do universo de cada país e cada idioma.</p>
				</div>
			</div>

		</div>
		<hr>

		<div>
			<a href="/cursos">
				<h2 class="right-title">Cursos</h2>
			</a>
			<p class="justified">Todos os nossos cursos são voltados à conversação. A utilização de material didático moderno, prático e dinâmico, bem como ferramentas audiovisuais de excelente qualidade proporciona aos alunos uma fácil assimilação dos conteúdos propostos.</p>
			<div class="flex-wrap">
				<ul style="margin-left: auto;">
					<li>
						<img src="img/USA.png" alt="Bandeira dos Estados Unidos da América"   class="course-img">
						<span>Inglês</span>
					</li>
					<li>
						<img src="img/Germany.png" alt="Bandeira da Alemanha"   class="course-img">
						<span>Alemão</span>
					</li>
					<li>
						<img src="img/Spain.png" alt="Bandeira da Espanha"   class="course-img">
						<span>Espanhol</span>
					</li>
					<li>
						<img src="img/Italy.png" alt="Bandeira da Itália"   class="course-img">
						<span>Italiano</span>
					</li>
				</ul>
				<ul style="margin-right: auto;">
					<li>
						<img src="img/Japan.png" alt="Bandeira do Japão"   class="course-img">
						<span>Japonês</span>
					</li>
					<li>
						<img src="img/France.png" alt="Bandeira da França"   class="course-img">
						<span>Francês</span>
					</li>
					<li>
						<img src="img/China.png" alt="Bandeira da China"   class="course-img">
						<span>Mandarim</span>
					</li>
					<li>
						<img src="img/Brazil.png" alt="Bandeira do Brasil"   class="course-img">
						<span>Português</span>
					</li>
				</ul>
			</div>
		</div>

		<hr>

		<div>
			<a href="/depoimentos">
				<h2>Depoimentos</h2>
			</a>
			<blockquote class="first-blockquote">
				<div class="blockquote-content-box">
					<div class="blockquote-img-box">
						<img src="img/dina_aquino.jpg" class="img-circle blockquote-img" alt="Foto do aluno do depoimento">
					</div>
					<div class="blockquote-text-box">
						<p>"Recomendo!!! Meu filho estuda na Cultivar e foi avaliado no exterior com nota alta tanto na escrita como na oral!! Fiquei orgulhosa dele e feliz com o curso oferecido pela escola!!! Uma parceria que deu certo e que começa agora com meu outro filho!!"</p>
					</div>
				</div>
				<footer class="blockquote-footer">Dina Aquino</footer>
			</blockquote>
		</div>
		<hr>

		<div>
			<a href="/escolas-e-localizacao">
				<h2 class="right-title">Escolas e Localização</h2>
			</a>
			<ul>
				<li>
					Unidade GTA - Av. João Pessoa, 192 Piso Superior | Pedregulho CEP 12515-010
				</li>
				<br>
				<li>
					Unidade SJC - Rua Major Antônio Domingues, 457 | Jd. São Dimas CEP 12245-750
				</li>
				<br>
			</ul>
		</div>
		<hr>

		<div>
			<a href="/teste-ingles">
				<h2>Teste seu conhecimento</h2>
			</a>
			<p>Faça nosso teste de nivelamento.</p>
			<ul>
				<li>
					<a href="/teste-ingles">Teste de Inglês</a>
				</li>
				<li>
					<a href="/teste-alemao">Teste de Alemão</a>
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php';?>
  <?php include 'shared-scripts.php';?>
	<script src="js/home.js"></script>
</body>
</html>