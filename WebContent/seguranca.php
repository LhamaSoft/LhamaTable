<?php
/**
* Sistema de seguranчa com acesso restrito
*
* Usado para restringir o acesso de certas pсginas do seu site
*
* @author Thiago Belem <contato@thiagobelem.net>
* @link http://thiagobelem.net/
*
* @version 1.0
* @package SistemaSeguranca
*/
//  Configuraчѕes do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexуo com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessуo com um session_start()?
$_SG['caseSensitive'] = true;     // Usar case-sensitive? Onde 'thiago' щ diferente de 'THIAGO'
$_SG['validaSempre'] = true;       // Deseja validar o usuсrio e a senha a cada carregamento de pсgina?
// Evita que, ao mudar os dados do usuсrio no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuсrio MySQL
$_SG['senha'] = '';                // Senha MySQL
$_SG['banco'] = 'lhamatable';            // Banco de dados MySQL
$_SG['paginaLogin'] = 'index.php'; // Pсgina de login
$_SG['tabela'] = 'usuarios';       // Nome da tabela onde os usuсrios sуo salvos
// ==============================
// ======================================
//   ~ Nуo edite a partir deste ponto ~
// ======================================
// Verifica se precisa fazer a conexуo com o MySQL
if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Nуo foi possэvel conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Nуo foi possэvel conectar-se ao banco de dados [".$_SG['banco']."].");
}
// Verifica se precisa iniciar a sessуo
if ($_SG['abreSessao'] == true)
  session_start();
/**
* Funчуo que valida um usuсrio e senha
*
* @param string $usuario - O usuсrio a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuсrio foi validado ou nуo (true/false)
*/
function validaUsuario($email, $senha) {
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  // Usa a funчуo addslashes para escapar as aspas
  $nemail = addslashes($email);
  $nsenha = addslashes($senha);
  // Monta uma consulta SQL (query) para procurar um usuсrio
  $sql = "SELECT `ID`, `NomeUsuario` FROM `".$_SG['tabela']."` WHERE ".$cS." `email` = '".$nemail."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuсrio щ invсlido
    return false;
  } else {
    // Definimos dois valores na sessуo com os dados do usuсrio
    $_SESSION['usuariosID'] = $resultado['ID']; // Pega o valor da coluna 'ID' do registro encontrado no MySQL
    $_SESSION['usuariosNome'] = $resultado['NomeUsuario']; // Pega o valor da coluna 'NomeUsuario' do registro encontrado no MySQL
	
    // Verifica a opчуo se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definimos dois valores na sessуo com os dados do login
      $_SESSION['usuariosLogin'] = $email;
      $_SESSION['usuariosSenha'] = $senha;
    }
    return true;
  }
}
/**
* Funчуo que protege uma pсgina
*/
function protegePagina() {
  global $_SG;
  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['nomeUsuario'])) {
    // Nуo hс usuсrio logado, manda pra pсgina de login
    expulsaVisitante();
  } else if (!isset($_SESSION['usuariosID']) OR !isset($_SESSION['usuariosNomeUsuario'])) {
    // Hс usuсrio logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessуo batem com os dados do banco de dados
      if (!validaUsuario($_SESSION['usuariosLogin'], $_SESSION['usuariosSenha'])) {
        // Os dados nуo batem, manda pra tela de login
        expulsaVisitante();
      }
    }
  }
}
/**
* Funчуo para expulsar um visitante
*/
function expulsaVisitante() {
  global $_SG;
  // Remove as variсveis da sessуo (caso elas existam)
  unset($_SESSION['usuariosID'], $_SESSION['usuariosNomeUsuario'], $_SESSION['usuariosLogin'], $_SESSION['usuariosSenha']);
  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin']);
}
?>