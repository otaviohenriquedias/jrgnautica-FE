<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$usuario = new Usuario($conexaoPool->getConexao(), $conexaoPool);
$usuario->__set('nome', $_POST['nome-broker'].' '.$_POST['sobrenome-broker']);
$usuario->__set('cpf', $_POST['cpf-broker']);
$usuario->__set('tipo', $_POST['permissão-broker']);
$usuario->__set('senha', $_POST['senha']);
$usuario->cadastraUsuario()


?>

