<?php

include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Embarcacao($conexaoPool->getConexao(), $conexaoPool);
$_POST['valor-barco'] = str_replace('.','',$_POST['valor-barco']);
$_POST['valor-barco'] = str_replace(',','.',$_POST['valor-barco']);
$embarcacao->__set('propulsor', $_POST['tipo-propulsor']);
$embarcacao->__set('marina', $_POST['marina-bem']);
$embarcacao->__set('fabricante', $_POST['fabricantes-barcos']);
$embarcacao->__set('modelo', $_POST['modelo-barco']); 
$embarcacao->__set('tipo', $_POST['tipo-barco']);
$embarcacao->__set('horas', $_POST['horas-barco']);
$embarcacao->__set('potencia', $_POST['potencia-barco']);
$embarcacao->__set('quant_motor', $_POST['quant-motores-barco']);
$embarcacao->__set('modelo_motor', $_POST['motorizacao-barco']);
$embarcacao->__set('ano', $_POST['ano-barco']);
$embarcacao->__set('combustivel', $_POST['combustivel-barco']);
$embarcacao->__set('descricao', $_POST['descricao-barco']);
$embarcacao->__set('vendido', $_POST['vendida-barco']);
$embarcacao->__set('offmarket', $_POST['market-barco']);
$embarcacao->__set('captador', $_POST['captador-barco']);
$embarcacao->__set('propietario', $_POST['propietario-barco']);
$embarcacao->__set('tamanho', $_POST['tamanho-barco']);
$embarcacao->__set('id_embarcacao', $_GET['id-embarcacao']);
$embarcacao->__set('fabricante', $_POST['fabricantes-barcos']);
$embarcacao->__set('modelo', $_POST['modelo-barco']); 
$embarcacao->__set('tipo', $_POST['tipo-barco']);
$embarcacao->__set('horas', $_POST['horas-barco']);
$embarcacao->__set('potencia', $_POST['potencia-barco']);
$embarcacao->__set('quant_motor', $_POST['quant-motores-barco']);
$embarcacao->__set('modelo_motor', $_POST['motorizacao-barco']);
$embarcacao->__set('ano', $_POST['ano-barco']);
$embarcacao->__set('combustivel', $_POST['combustivel-barco']);
$embarcacao->__set('descricao', $_POST['descricao-barco']);
$embarcacao->__set('vendido', $_POST['vendida-barco']);
$embarcacao->__set('offmarket', $_POST['market-barco']);
$embarcacao->__set('captador', $_POST['captador-barco']);
$embarcacao->__set('propietario', $_POST['propietario-barco']);
$embarcacao->__set('tamanho', $_POST['tamanho-barco']);
$embarcacao->__set('id_embarcacao', $_GET['id-embarcacao']);
$embarcacao->__set('preco', $_POST['valor-barco']);

$embarcacao->atualizaEmbarcacao();
// echo '<pre>';
// print_r($_POST);
// print_r($_GET);
// echo '<pre>';


?>