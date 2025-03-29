<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Marina($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listaMarina();
?>