<?php
include('config.php');
$conexao = new Conexao();
$estados = new Estados($conexao);
$estados->getEstados();
?>