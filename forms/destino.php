<?php
if(!empty($_POST["enviar"])) {
  $nome = $_POST["nomeUsuario"];
  $email = $_POST["email"];
  $assunto = $_POST["assunto"];
  $content = $_POST["conteudo"];

  $enviarParaEmail = "contato @ brandxdigital . com . br";
  $mailCabecalhos = "De: " . $nome . "<". $email .">\r\n";
  if(mail($enviarParaEmail, $assunto , $conteudo, $mailCabecalhos)) {
      $message = "Seu contato foi recebido com sucesso.";
      $type = "Sucesso";
  }
}
require_once "resposta.php";
?>