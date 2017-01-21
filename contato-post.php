<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){
		$to      = 'marco.pdsv@gmail.com';
		$subject = 'Novo contato do seu site!';
		$message = 'Olá,<br><br>' . $_POST["name"] . ' entrou em contato com você.<br>' . 'E-mail de contato: ' . $_POST["email"] . '<br><br>Mensagem: ' . $_POST["message"];
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