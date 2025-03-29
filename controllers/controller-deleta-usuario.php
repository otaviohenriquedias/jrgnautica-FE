<?php
include('config.php');
$conexao = new Conexao();
$procura = new Usuario($conexao);
$procura->deletaUsuario(intval($_GET['id_usuario']));

?>