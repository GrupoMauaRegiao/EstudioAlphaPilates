<?php
if (PATH_SEPARATOR == ";") {
  $quebraLinha = "\r\n";
} else {
  $quebraLinha = "\n";
}

$destino = $_GET["e-mail"];
$email = "contato@estudioalpha.com.br";
$assunto = "Site Estúdio Alpha Pilates";
$nome = $_GET["nome"];
$mensagem = "Mensagem:<br><pre>" . $_GET["mensagem"] . "</pre>";

$headers = "";
$headers .= "MIME-Version: 1.1" . $quebraLinha;
$headers .= "Content-type: text/html; charset=utf-8" . $quebraLinha;
$headers .= "From: " . $email . $quebraLinha;

if(!mail($destino, $assunto, $mensagem, $headers , "-r" . $destino)) {
  mail($destino, $assunto, $mensagem, $headers);
}
?>