<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Email($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listaEmail();
?>