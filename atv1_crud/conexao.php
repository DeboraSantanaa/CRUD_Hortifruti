<?php 
require_once(__DIR__ . '/constante.php');

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'hort';



$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);


if (mysqli_connect_error()) {
    trigger_error(mysqli_connect_error());
}



?>