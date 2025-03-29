<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$usuario = new Cliente($conexaoPool->getConexao(), $conexaoPool);
$usuario->__set('nome',$_POST['nome-cliente']);
$usuario->__set('sobrenome',$_POST['sobrenome-cliente']);
$usuario->__set('contato',$_POST['contato-cliente']);
$usuario->__set('sexo',$_POST['sexo-cliente']);
$usuario->__set('email',$_POST['email-cliente']); 
$usuario->__set('data_nascimento',$_POST['nascimento-cliente']); 
$usuario->__set('atendente',$_POST['atendimento']); 
$usuario->__set('heat',$_POST['heat']); 
$usuario->atualizaCliente($_GET['id-cliente']);
?>