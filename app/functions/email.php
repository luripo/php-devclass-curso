<?php


function send(array $data) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'plain';
	$email->isSMTP();
	$email->Host = 'smtp.mailtrap.io';
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = '9481d1cecc7c01';
	$email->Password = 'b0a07a604dacb4';
	$email->isHTML(true);
	$email->setFrom('lurianep.o@gmail.com');
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();
}