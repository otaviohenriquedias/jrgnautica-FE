<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$usuario = new Captador($conexaoPool->getConexao(), $conexaoPool);
$usuario->__set('nome',$_POST['nome-captador']);
$usuario->__set('contato',$_POST['contato-captador']);
$usuario->__set('categoria',$_POST['categoria-captador']);
$usuario->__set('empresa',$_POST['empresa-captador']); 
$usuario->atualizaCaptador($_GET['id_captador']);
?>