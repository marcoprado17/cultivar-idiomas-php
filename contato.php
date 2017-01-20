<!DOCTYPE html>
<html>
<head>
  <?php include 'shared-head.php';?>
  <link rel="stylesheet" href="style/contato.css">
  <title>Contato | Cultivar Idiomas</title>
</head>
<body>

  <header class="container flex-wrap">
    <a href="/" class="no-underline-link">
      <img src="img/cultivar_logo.png" alt="Logo da Cultivar Idiomas" class="logo">
    </a>

    <div class="header-title-box">
      <a href="/" class="no-underline-link">
         <img src="img/cultivar_fonte.png" alt="Título personalizado da Cultivar Idiomas" class="cultivar-fonte-img">
         <h4 class="escola-de-idiomas-text">escola de idiomas</h4>
      </a>
    </div>
  </header>
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="container">
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav font-resizeable-nav-bar">
          <li class="home-nav-btn"><a href="http://cultivari1.uh-app.com.br/">Home</a></li>
          <li class="quem-somos-nav-btn"><a href="http://cultivari1.uh-app.com.br/quem-somos">Quem Somos</a></li>
          <li class="cursos-nav-btn"><a href="http://cultivari1.uh-app.com.br/cursos">Cursos</a></li>
          <li class="depoimentos-nav-btn"><a href="http://cultivari1.uh-app.com.br/depoimentos">Depoimentos</a></li>
          <li class="escolas-e-localizacao-nav-btn"><a href="http://cultivari1.uh-app.com.br/escolas-e-localizacao">Escolas e Localização</a></li>
          <li class="contato-nav-btn active"><a href="http://cultivari1.uh-app.com.br/contato">Contato</a></li>
          <li class="teste-nav-btn dropdown">
            <a href="http://cultivari1.uh-app.com.br/contato#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teste de idiomas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://cultivari1.uh-app.com.br/teste-ingles">Inglês</a></li>
              <li><a href="http://cultivari1.uh-app.com.br/teste-alemao">Alemão</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6 contact-message">
        <h3>Visite uma de <a href="http://cultivari1.uh-app.com.br/escolas-e-localizacao">nossas escolas</a></h3>
        <h4>Ou envie uma mensagem para a gente</h4>
        <h4>Responderemos assim que possível</h4>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Envie uma mensagem para gente</h3>
          </div>
          <div class="panel-body">
           <form id="contact-form" method="post" onsubmit="return submitContactForm()">
             <fieldset class="form-group">
              <label for="name" class="form-control-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required="">
            </fieldset>
            <fieldset class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required="">
            </fieldset>

            <fieldset class="form-group">                        
              <label for="message">Mensagem</label>
              <textarea class="form-control" id="message" name="message" placeholder="Insira sua mensagem" rows="3" required=""></textarea>
            </fieldset>         

            <div id="contact-success" class="alert alert-success" style="display: none;"></div>
            <div id="contact-fail" class="alert alert-danger" style="display: none;"></div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <footer class="page-footer">
  	<div class="container">
  		<div class="footer-social-networks-box">
  			<a href="https://www.facebook.com/cultivaridiomas/?fref=ts" class="no-underline-link">
  				<img src="img/facebook_icon.png" alt="Ícone do Facebook" class="social-network-icon-img">
  			</a>
  			<a href="https://plus.google.com/+CultivarEscoladeIdiomasGuaratinguet%C3%A1/posts" class="no-underline-link">
  				<img src="img/googleplus_icon.png" alt="Ícone do Google Plus" class="social-network-icon-img">
  			</a>
  		</div>

  		<hr class="footer-social-content-line">

  		<div class="row">
  			<div class="col-sm-4 footer-vcenter">
  				<div class="row">
  					<div class="col-md-6">
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/">Home</a></p>
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/quem-somos">Quem Somos</a></p>
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/cursos">Cursos</a></p>
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/depoimentos">Depoimentos</a></p>
  					</div>

  					<div class="col-md-6">
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/escolas-e-localizacao">Escolas e Localização</a></p>
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/contato">Contato</a></p>
  						<p class="muted"><a href="http://cultivari1.uh-app.com.br/teste-ingles">Teste seu Inglês</a></p>
  					</div>
  				</div>
  			</div><!--
  			Not delete this comment!!!. It's important because there should be no space between the divs.
  	 --><div class="col-sm-4 footer-vcenter">
      		<div class="footer-tels-box">
      			<p>Tel. 1: (12) 3122-2123</p>
      			<p>Tel. 2: (12) 3125-1740</p>
      			<p>Tel. 3: (12) 99185-1415 (Whatsapp)</p>
      		</div>
  			</div><!--
  			Not delete this comment!!!. It's important because there should be no space between the divs.
  	 --><div class="col-sm-4 footer-vcenter">
      		<div>
      			<ul>
      				<li>
      					<p>Unidade Guaratinguetá - SP<br>
                 Av. João Pessoa, 192 B Piso Superior, 12515-010<br>
                  <a target="_blank" href="https://www.google.com.br/maps/place/Av.+Jo%C3%A3o+Pessoa,+192+-+Vila+Paraiba,+Guaratinguet%C3%A1+-+SP,+12505-120/@-22.8098903,-45.1977861,17z/data=!3m1!4b1!4m5!3m4!1s0x94ccc45062ad136f:0x8fe6e38869562b4!8m2!3d-22.8098953!4d-45.1955974">veja no mapa</a>
                 </p>
              </li>
              <li>
                <p>Unidade São José dos Campos - SP<br>
                Rua Major Antônio Domingues, 457, 12245-750<br>
                  <a target="_blank" href="https://www.google.com.br/maps/place/R.+Maj.+Ant%C3%B4nio+Domingues,+457+-+Centro,+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP,+12245-750/@-23.1914663,-45.8925134,17z/data=!3m1!4b1!4m5!3m4!1s0x94cc4a139cd6a589:0x3a79494e08761304!8m2!3d-23.1914712!4d-45.8903247">veja no mapa</a>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <hr class="footer-content-last-text-line">

      <div class="footer-last-text-box">
        <p>Cultivar - Escola de Idiomas</p>
      </div>
    </div>
  </footer>

  <script src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/contato.js"></script>
</body>
</html>