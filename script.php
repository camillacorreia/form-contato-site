<?php

$remetente    = 'From: contato@titanci.com.br';
$destinatario = 'camillajesuscorreia@hotmail.com';
$assunto      = utf8_decode($_POST['nome']);
$nome         = utf8_decode($_POST['nome']);
$email        = utf8_decode($_POST['email']);
$mensagem     = utf8_decode($_POST['mensagem']);
$alerta       = 'Seus dados foram enviados com sucesso!';
$corpo          = "

Nome: ".$nome."
Email: ".$email."
Mensagem: "
.$mensagem."";

mail($destinatario, $assunto, $corpo, $remetente);
echo $alerta;
?>