<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){
		include "../dados/data.php";

		$enviaFormularioParaNome = "Cultivar Idiomas Contato";
		$enviaFormularioParaEmail = $email;
		
		$caixaPostalServidorNome = "Cultivar Idiomas Contato";
		$caixaPostalServidorEmail = $email;
		$caixaPostalServidorSenha = $password;
		 
		$assunto  = "Novo formulário de contato";
		$mensagem = $_POST["message"];
		 
		$mensagemConcatenada = '<b>Formulário de contato gerado</b>'.'<br/><br/>'; 
		$mensagemConcatenada .= '--------------------------------------------------------------<br/><br/>'; 
		$mensagemConcatenada .= '<b>Nome:</b> '.$_POST["name"].'<br/>'; 
		$mensagemConcatenada .= '<b>E-mail:</b> '.$_POST["email"].'<br/><br/>'; 
		$mensagemConcatenada .= '--------------------------------------------------------------<br/><br/>'; 
		$mensagemConcatenada .= '<b>Mensagem:</b> <br/><br/>';
		$mensagemConcatenada .= '<div style="white-space: pre-wrap;">';
		$mensagemConcatenada .= $mensagem;
		$mensagemConcatenada .= '</div>';

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