<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$usuario = new Usuario ($conexaoPool->getConexao(), $conexaoPool);
$usuario->logarUser($_POST['username'], $_POST['pass']);
?>