<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Usuario($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listaUsuario();
?>