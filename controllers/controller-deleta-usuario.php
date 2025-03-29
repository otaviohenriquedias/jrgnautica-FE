<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Usuario($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaUsuario(intval($_GET['id_usuario']));

?>