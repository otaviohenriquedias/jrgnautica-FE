<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Embarcacao($conexao);
$embarcacao->listarBarcos();
?>