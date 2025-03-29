<?php
include('config.php');
$conexao = new Conexao();
$procura= new Procura($conexao);
$procura->setArray();
$procura->Sincron($procura->__get('listaprocuras'));
$dash = new Dashboard($conexao);
$dash->viewProcura($procura->__get('encontradas'));
?>