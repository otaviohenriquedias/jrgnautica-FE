<?php
include('config.php');
$conexao = new Conexao();
$marina = new Marina($conexao);
$marina->getMarinas();
?>