<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Marina($conexao);
$embarcacao->listaMarina();
?>