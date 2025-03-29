<?php
include('config.php');
session_start();
$conexaoPool = Conexao::getInstance();
$procura = new Procura($conexaoPool->getConexao(), $conexaoPool);
$procura->__set('modelo', $_POST['modelo-procura']);
$procura->__set('propulsor', $_POST['tipo-propulsor']);
$procura->__set('horas', $_POST['horas-procura']);
$procura->__set('potencia', $_POST['potencia-procura']);
$procura->__set('ano', $_POST['ano-procura']);
$procura->__set('fabricante', $_POST['fabricantes-barcos']);
$procura->__set('combustivel', $_POST['combustivel-procura']);
$procura->__set('tipo', $_POST['tipo-procura']);
$procura->__set('quant_motores', $_POST['quant-motor-procura']);
$procura->__set('id_cliente', $_GET['id_cliente']); 
$procura->__set('cadastrante', intval($_SESSION['id_usuario'])); 
$procura->__set('tamanho_min_procura', $_POST['tamanho-min-procura']);
$procura->__set('tamanho_max_procura', $_POST['tamanho-max-procura']);
$procura->__set('valor_min_procura', $_POST['preco-min-procura']);
$procura->__set('valor_max_procura', $_POST['preco-max-procura']);
$procura->cadastraProcura();



?>