<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$marina = new Marina($conexaoPool->getConexao(), $conexaoPool);
$marina->getMarinas();
?>