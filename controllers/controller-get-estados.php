<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$estados = new Estados($conexaoPool->getConexao(), $conexaoPool);
$estados->getEstados();
?>