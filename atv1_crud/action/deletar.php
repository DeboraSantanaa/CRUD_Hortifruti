<?php 
//deletar

require_once('../conexao.php');

$id=$_GET['id'];

$query= "DELETE FROM frutas WHERE id=$id";

$result = mysqli_query($conexao,$query);

header('Location:../index.php');

?>