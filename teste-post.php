<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("phone", $_POST) and array_key_exists("correct", $_POST) and array_key_exists("language", $_POST)){
		$to      = 'marco.pdsv@gmail.com';
		$subject = 'Novo teste realizado no seu site!';
		$message = "Olá,\r\n\r\n" . $_POST["name"] . " fez um teste de " . $_POST["language"] . "\r\nE-mail de contato: " . $_POST["email"] . "\n\nTelefone: " . $_POST["phone"] . "\r\n\r\nAcertos: " + $_POST["correct"];
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