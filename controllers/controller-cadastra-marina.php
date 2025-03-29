<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$marina = new Marina($conexaoPool->getConexao(), $conexaoPool);
$marina->__set('cidade', $_POST['cidade-marina']);
$marina->__set('contato', $_POST['contato-marina']);
$marina->__set('estado', $_POST['localizacao-marina']);
$marina->__set('nome', $_POST['nome-marina']);
$marina->cadastraMarina();



?>

