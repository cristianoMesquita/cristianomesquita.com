<?php
$to = "contact@cristianomesquita.com";
$name = $_POST["name"];
$company = $_POST["company"];
$email = $_POST["email"];
$subject = "Contato do meu site cristianomesquita.com";
$proposalDescription = $_POST["proposalDescription"];
$message = "<strong>Name:</strong> ".$name."</br>";
$message .= "<strong>Company:</strong> ".$company."</br>";
$message .= "<strong>Email:</strong> ".$email."</br>";
$message .= "<strong>Proposal:</strong> ".$proposalDescription."</br>";

$headers .= "From: <contactwebsite@cristianomesquita.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:<contactwebsite@cristianomesquita.com>\n"; //email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <contact@cristianomesquita.com>\n"; //caso a msg //seja respondida vai para  este email. 
$headers =  "Content-Type:text/html; charset=UTF-8\n";

try{
	if(mail($to, $subject, $message, $headers)){ //função que faz o envio do email.
		header('Location: http://www.cristianomesquita.com/contact.php?emailSent=sent');
		exit;
	}
	else
		header('Location: http://www.cristianomesquita.com/contact.php?emailSent=notSent');
		exit;
}
catch(Exception $ex){
	echo('It was not sent');
}


