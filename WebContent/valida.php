<?php


// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $email = (isset($_POST['inputEmail'])) ? $_POST['inputEmail'] : '';
  $senha = (isset($_POST['inputPassword'])) ? $_POST['inputPassword'] : '';
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
  if (validaUsuario($email, $senha) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
    header("Location: perfil.xhtml");
  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
    expulsaVisitante();
  }
}
?>