<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){

		$enviaFormularioParaNome = "Cultivar Idiomas Contato";
		$enviaFormularioParaEmail = "contato2@cultivaridiomas.com.br";
		 
		$caixaPostalServidorNome = "Cultivar Idiomas Contato";
		$caixaPostalServidorEmail = 'contato2@cultivaridiomas.com.br';
		$caixaPostalServidorSenha = 'a2b4c6d8e0';
		 
		/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
		 
		 
		/* abaixo as veriaveis principais, que devem conter em seu formulario*/
		 
		$remetenteNome  = $_POST["name"];
		$remetenteEmail = $_POST["email"];
		$assunto  = "Novo formulário de contato";
		$mensagem = $_POST["message"];
		 
		$mensagemConcatenada = 'Formulário de contato gerado'.'<br/><br/>'; 
		$mensagemConcatenada .= '--------------------------------------------------------------<br/><br/>'; 
		$mensagemConcatenada .= '<b>Nome:</b> '.$remetenteNome.'<br/>'; 
		$mensagemConcatenada .= '<b>E-mail:</b> '.$remetenteEmail.'<br/><br/>'; 
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