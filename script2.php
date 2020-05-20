<?php

$nome         = utf8_decode($_POST['nome']);
$email        = utf8_decode($_POST['email']);
$mensagem     = utf8_decode($_POST['mensagem']);
$arquivo      = $_FILES["arquivo"];

$corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>Mensagem:</strong> $mensagem";
// chamada da classe		
require_once('class.phpmailer.php');
// instanciando a classe
$mail   = new PHPMailer();
// email do remetente
$mail->SetFrom('contato@titanci.com.br', 'remetente');
// email do destinatario
$address = "camillajesuscorreia@hotmail.com";
$mail->AddAddress($address, "destinatario");
// email da mensagem
$mail->Subject = $email;
// corpo da mensagem
$mail->MsgHTML($corpoMSG);
// anexar arquivo
$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

if(!$mail->Send()) {
    echo "Erro: " . $mail->ErrorInfo;
}
else {
    echo "Mensagem enviada com sucesso!";
}


?>