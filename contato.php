<!DOCTYPE html>
<html>
<head>
  <?php include 'shared-head.php';?>
  <link rel="stylesheet" href="style/contato.css">
  <title>Contato | Cultivar Idiomas</title>
</head>
<body>
  <?php include 'header.php';?>
  <?php include 'nav.php';?>

  <div class="container">
    <?php include "../dados/data.php" ?>
    <?php echo "$email" ?>

    <div class="row">
      <div class="col-md-6 contact-message">
        <h3>Visite uma de <a href="/escolas-e-localizacao">nossas escolas</a></h3>
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

  <?php include 'footer.php';?>
  <?php include 'shared-scripts.php';?>
  <script src="js/contato.js"></script>
</body>
</html>