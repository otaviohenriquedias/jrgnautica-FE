<?php
include('config.php');
$conexao = new Conexao();
$cliente = new Cliente($conexao);
$cliente->__set('nome', $_POST['nome-cliente']);
$cliente->__set('sobrenome', $_POST['sobrenome-cliente']);
$cliente->__set('sexo', $_POST['sexo-cliente']);
$cliente->__set('data_nascimento', $_POST['nascimento-cliente']);
$cliente->__set('contato', $_POST['contato-cliente']);
$cliente->__set('email', $_POST['email-cliente']);
$cliente->cadastrarCliente();
?>