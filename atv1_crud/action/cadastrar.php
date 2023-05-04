<?php
//req de conxeção

require_once ('../conexao.php');

$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$tipo=$_POST['tipo'];
$valor=$_POST['valor'];


$query ='INSERT INTO frutas (nome,descricao,tipo,valor)
VALUES (" '.$nome.' "," '.$descricao.' "," '.$tipo.' "," '.$valor.' ")';
//atibuindo os valores

$result = mysqli_query($conexao,$query);

header('Location:../index.php')
?>

 




 <!-- pasta "action" é usada para arquivos PHP que são responsáveis por executar as ações do CRUD -->