<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura= new Procura($conexaoPool->getConexao(), $conexaoPool);
$procura->setArray();
$procura->Sincron($procura->__get('listaprocuras'));
$dash = new Dashboard($conexaoPool->getConexao(), $conexaoPool);
$dash->viewProcura($procura->__get('encontradas'));
?>