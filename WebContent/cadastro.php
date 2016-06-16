<?php 
 
$login = $_POST['UserName'];
$email = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];
$dataNascimento = $_POST['dataNascimento'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('lhamatable');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='index.xhtml';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='index.xhtml';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (NomeUsuario,email,senha,Nascimento) 
						  VALUES ('$login','$email','$senha','$dataNascimento')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='index.xhtml'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.xhtml'</script>";
                }
            }
        }
?>

