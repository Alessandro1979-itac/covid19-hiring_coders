<?php

if(isset($_POST['name'] && !empty($_POST['name'])));
if(isset($_POST['email'] && !empty($_POST['email'])));
if(isset($_POST['message'] && !empty($_POST['message'])));

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "muniz.caranha@gmail.com";
$subject = "Contato - COVID-19 News";

$body = "Nome: ".$nome. "Email: ".$email. "Mensagem: ".$mensagem;

$header = "From:muniz.caranha@github.com"."\r\n"."Reply-To:".$email."\r\n"."X-=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)) {
  echo("Email enviado com Sucesso!");
} else {
  echo("O email não pode ser enviado");
}

?>