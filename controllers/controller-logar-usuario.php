<?php
include('config.php');
$conexao = new Conexao();
$usuario = new Usuario ($conexao);
$usuario->logarUser($_POST['username'], $_POST['pass']);
?>