<!DOCTYPE html>
<html>
<head>
	<?php include 'shared-head.php';?>
  <link rel="stylesheet" href="style/teste.css">
	<title>Teste | Cultivar Idiomas</title>
</head>
<body>
	<?php include 'header.php';?>
  <?php include 'nav.php';?>

	<div class="container">
	    <div class="row" id="questions">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="panel panel-default" id="init-form">
                    <div class="panel-heading">
                        <h3 class="panel-title">Teste seu <?php echo $idioma;?> e receba o resultado na hora</h3>
                    </div>
                    <div class="panel-body">
                         <form id = "contact-form" onSubmit="return initForm()">
                           <fieldset class="form-group">
                                <label for="name" class="form-control-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="phone" class="form-control-label">Telefone</label>
                                <input type="tel" pattern="\d+" placeholder="Insira apenas numeros" class="form-control" id="phone" name="phone" required>
                            </fieldset>
                            
                            <div id="contact-success" class="alert alert-success" style="display: none;"></div>
                            <div id="contact-fail" class="alert alert-danger" style="display: none;"></div>
                            <button type="submit" id="init-button" class="btn btn-primary">Iniciar o teste</button>
                        </form>
                    </div>
                </div>

                <div>
                  <?php 
                    for ($i = 1; $i <= count($questoes)+1; $i++) {
                      echo "<div class='funkyradio' id='question$i' style='display: none;'>\n";
                        echo "<h3>" . $questoes[$i-1][0] . "</h3>\n";
                        echo "<h3></h3>\n";
                        echo "<hr>\n";
                        for ($j = 1; $j <= count($questoes[$i-1][1]); $j++) {
                          echo "<div class='funkyradio-success'>\n";
                            echo "<input type='radio' id='opt$i$j' name='opt'/>\n";
                            echo "<label for='opt$i$j'>" . $questoes[$i-1][1][$j-1] . "</label>\n";
                          echo "</div>\n";
                        }
                      echo "</div>\n";
                    }
                  ?>
                  <button class="btn btn-primary btn-next" id="proximo-button" style="display: none;">Proximo</button>
                  <button class="btn btn-primary btn-next" id="finish-button" style="display: none;">Finalizar</button>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div id="result" style="display: none;">
        </div>
        <div class="progress">
        	<div class="progress-bar progress-bar-success" role="progressbar" id="progress-bar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%">
        		<span id="progress-value">0/50 completo</span>
        	</div>
        </div>
        
	</div>

	<?php include 'footer.php';?>
  <?php include 'shared-scripts.php';?>
  <script type="text/javascript">
    var answers = [];
    var language = '<?php echo $idioma;?>';
    <?php 
      for ($i = 0; $i <= count($questoes); $i++) {
        echo "answers.push(" . $questoes[$i][2] . ");\n";
      }
    ?>
  </script>
	<script src="js/teste.js"></script>
</body>
</html>