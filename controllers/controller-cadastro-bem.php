<?php
include('config.php');
$conexao = new Conexao();
$bem= new BEM($conexao);
$bem->__set('modelo_bem', $_POST['modelo-bem']);
$bem->__set('fabricante_bem', $_POST['fabricantes-barcos']);
$bem->__set('marina_bem', $_POST['marina-bem']);
$bem->__set('tipo_bem', $_POST['tipo-bem']);
$bem->__set('tamanho_bem', $_POST['tamanho-bem']);
$bem->__set('ano_bem', $_POST['ano-bem']);
$bem->__set('motores_bem', $_POST['quant-motores-bem']);
$bem->cadastrarBem();
?>