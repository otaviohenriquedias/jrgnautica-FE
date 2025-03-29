<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$historico = new Historico($conexaoPool->getConexao(), $conexaoPool);
session_start();
$historico->__set('id_cliente', $_GET['ref']);
$historico->__set('id_usuario', $_SESSION['id_usuario']);
$historico->__set('ocorrencia', $_POST['ocorrencia-historico']);
$historico->__Set('historico', $_POST['conteudo-historico']);
$historico->createHistorico();
?>