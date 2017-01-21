<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("phone", $_POST) and array_key_exists("correct", $_POST) and array_key_exists("language", $_POST)){
		include "../dados/data.php";

		$enviaFormularioParaNome = "Cultivar Idiomas Contato";
		$enviaFormularioParaEmail = $email;
		 
		$caixaPostalServidorNome = "Cultivar Idiomas Contato";
		$caixaPostalServidorEmail = $email;
		$caixaPostalServidorSenha = $password;
		 
		$assunto  = "Novo teste de " . $_POST["language"];
		 
		$mensagemConcatenada = '<b>Teste de '.$_POST["language"].' gerado</b>'.'<br/><br/>'; 
		$mensagemConcatenada .= '--------------------------------------------------------------<br/><br/>'; 
		$mensagemConcatenada .= '<b>Nome:</b> '.$_POST["name"].'<br/>';
		$mensagemConcatenada .= '<b>E-mail:</b> '.$_POST["email"].'<br/>';
		$mensagemConcatenada .= '<b>Telefone:</b> '.$_POST["phone"].'<br/>';
		$mensagemConcatenada .= '<b>Acertos:</b> '.$_POST["correct"];

		require_once('PHPMailer-master/PHPMailerAutoload.php');
 
		$mail = new PHPMailer();
		 
		$mail->IsSMTP();
		$mail->SMTPAuth  = true;
		$mail->Charset   = 'utf8_decode()';
		$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
		$mail->Port  = '587';
		$mail->Username  = $caixaPostalServidorEmail;
		$mail->Password  = $caixaPostalServidorSenha;
		$mail->From  = $caixaPostalServidorEmail;
		$mail->FromName  = utf8_decode($caixaPostalServidorNome);
		$mail->IsHTML(true);
		$mail->Subject  = utf8_decode($assunto);
		$mail->Body  = utf8_decode($mensagemConcatenada);
		 
		$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
		 
		if(!$mail->Send()){
			http_response_code(400);
		}else{
			http_response_code(200);
		}
	}
	else {
		http_response_code(400);
	}
?>