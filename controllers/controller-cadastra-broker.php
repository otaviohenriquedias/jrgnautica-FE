<?php
include('config.php');
$conexao = new Conexao();
$usuario = new Usuario($conexao);
$usuario->__set('nome', $_POST['nome-broker'].' '.$_POST['sobrenome-broker']);
$usuario->__set('cpf', $_POST['cpf-broker']);
$usuario->__set('tipo', $_POST['permissão-broker']);
$usuario->__set('senha', $_POST['senha']);
$usuario->cadastraUsuario()


?>

