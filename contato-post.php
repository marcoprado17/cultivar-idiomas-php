<?php
	if( array_key_exists("email", $_POST) and array_key_exists("name", $_POST) and array_key_exists("message", $_POST)){
		$to      = "contato2@cultivaridiomas.com.br";
		$subject = "Novo contato do seu site!";
		$message = "Olá,\r\n\r\n" . $_POST["name"] . " entrou em contato com você.\r\n" . "E-mail de contato: " . $_POST["email"] . "\r\n\r\nMensagem: " . $_POST["message"];

		$headers = "From: " . "no-reply@cultivaridiomas.com.br" . PHP_EOL;
	    $headers .= "Reply-To: ". "no-reply@cultivaridiomas.com.br" . PHP_EOL;
	    $headers .= "MIME-Version: 1.0" . PHP_EOL;
	    $headers .= "Content-Type: text/html; charset=UTF-8" . PHP_EOL;

		$email_sent_1 = mail($to, $subject, $message, $headers);
		$email_sent_2 = mail($to, $subject, $message, $headers);
		$email_sent_3 = mail($to, $subject, $message, $headers);
		$email_sent_4 = mail($to, $subject, $message, $headers);
		$email_sent_5 = mail($to, $subject, $message, $headers);

		if($email_sent_1 == FALSE and $email_sent_2 == FALSE and $email_sent_3 == FALSE and $email_sent_4 == FALSE and $email_sent_5 == FALSE){
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