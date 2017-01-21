<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){
		$to      = 'marco.pdsv@gmail.com';
		$subject = 'Novo contato do seu site!';
		$message = 'Olá,\n\n' . $_POST["name"] . ' entrou em contato com você.\n' . 'E-mail de contato: ' . $_POST["email"] . '\n\nMensagem: ' . $_POST["message"];
		$headers = 'From: no-reply@cultivaridiomas.com.br' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		$email_sent = mail($to, $subject, $message, $headers);

		if($email_sent == FALSE){
			http_response_code(400);
		}
		else {
			http_response_code(200);
		}
	}
	else {
		http_response_code(400);
	}
?>