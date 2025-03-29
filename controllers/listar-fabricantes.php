<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Embarcacao($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listarBarcos();
?>