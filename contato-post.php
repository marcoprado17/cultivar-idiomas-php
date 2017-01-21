<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){

		$enviaFormularioParaNome = "Cultivar Idiomas Contato";
		$enviaFormularioParaEmail = "contato2@cultivaridiomas.com.br";
		 
		$caixaPostalServidorNome = "Cultivar Idiomas";
		$caixaPostalServidorEmail = 'no-reply@cultivaridiomas.com.br';
		$caixaPostalServidorSenha = 'a2b4c6d8e0';
		 
		/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
		 
		 
		/* abaixo as veriaveis principais, que devem conter em seu formulario*/
		 
		$remetenteNome  = $_POST["name"];
		$remetenteEmail = $_POST["email"];
		$assunto  = "Novo formulário de contato";
		$mensagem = $_POST["message"];
		 
		$mensagemConcatenada = 'Formulário de contato gerado'.'<br/>'; 
		$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
		$mensagemConcatenada .= 'Nome: '.$remetenteNome.'<br/>'; 
		$mensagemConcatenada .= 'E-mail: '.$remetenteEmail.'<br/>'; 
		$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
		$mensagemConcatenada .= 'Mensagem: <br/>';
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

		// $to      = "contato2@cultivaridiomas.com.br";
		// $subject = "Novo contato do seu site!";
		// $message = "Olá,\r\n\r\n" . $_POST["name"] . " entrou em contato com você.\r\n" . "E-mail de contato: " . $_POST["email"] . "\r\n\r\nMensagem: " . $_POST["message"];
		// $message = wordwrap($message, 70);

		// $headers = "From: " . "no-reply@cultivaridiomas.com.br" . PHP_EOL;
	 //    $headers .= "Reply-To: ". "no-reply@cultivaridiomas.com.br" . PHP_EOL;
	 //    $headers .= "MIME-Version: 1.0" . PHP_EOL;
	 //    $headers .= "Content-Type: text/plain; charset=UTF-8" . PHP_EOL;

		// $email_sent_1 = mail($to, $subject, $message, $headers);
		// $email_sent_2 = mail($to, $subject, $message, $headers);
		// $email_sent_3 = mail($to, $subject, $message, $headers);
		// $email_sent_4 = mail($to, $subject, $message, $headers);
		// $email_sent_5 = mail($to, $subject, $message, $headers);

		// if($email_sent_1 == FALSE and $email_sent_2 == FALSE and $email_sent_3 == FALSE and $email_sent_4 == FALSE and $email_sent_5 == FALSE){
		// 	http_response_code(400);
		// }
		// else {
		// 	http_response_code(200);
		// }
	}
	else {
		http_response_code(400);
	}
?>