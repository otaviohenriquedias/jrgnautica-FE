<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Captador($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listaCaptadores();
?>