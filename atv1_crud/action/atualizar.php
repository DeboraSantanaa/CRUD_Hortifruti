<?php
require_once('../conexao.php');


$id=$_POST['id'];
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$tipo=$_POST['tipo'];
$valor=$_POST['valor'];

$query = "UPDATE frutas SET nome='$nome' , descricao='$descricao' ,
tipo='$tipo' , valor='$valor' WHERE id=$id ";

$result = mysqli_query($conexao,$query);



header('Location:../index.php');

?>