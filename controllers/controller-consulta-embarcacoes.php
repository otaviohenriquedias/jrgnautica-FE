<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Embarcacao($conexao);
$valor1 = str_replace('.', '', $_POST['preco-min-consulta']);
$valor1 = str_replace(',', '.', $valor1);
//---------------------------------------------------------------
$valor2 = str_replace('.', '', $_POST['preco-max-consulta']);
$valor2 = str_replace(',', '.', $valor2);
//---------------------------------------------------------------
$embarcacao->consultarBarcos($_POST['fabricantes-barcos'], $_POST['disponivel-tipo'],
$_POST['disponivel-combustivel'], $_POST['disponivel-ano'], $_POST['tamanho-min-consulta'],$_POST['tamanho-max-consulta'],
$_POST['disponivel-potencia'],$_POST['disponivel-horas'],$_POST['disponivel-market'],
$_POST['disponivel-situacao'],$_POST['captador-barco'],$_POST['tipo-propulsor'], $_POST['disponivel-modelo'], $valor1, $valor2, $_POST['marina-bem']);
?>