<?php

require_once('../conexao.php');

include_once('../views/includes/header.php');





$id = $_GET['id'];

$query= "select * from frutas where id=$id";

$result = mysqli_query($conexao,$query);

$row = mysqli_fetch_assoc ($result);

?>


<style>

h1,
    form {
      margin: 0 auto;
      max-width: 500px;
    }

    h1{
        color:#45a049;
        text-transform: uppercase;
        padding-top: 50px;
    }

    form div {
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      margin-top: 15px;
   
    }

    input,select{
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      text-transform: uppercase;
    }

    button {
      background-color: #252525;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }


    
</style>

<h1>Editar Frutas</h1>


<!-- action onde faz a ação -->
<form action="../action/atualizar.php" method="post">


<!-- o value ira adicionar uum valor no campo input -->
    <input type="text" name="id" value="<?php echo $row['id'] ?> "  hidden >

    <div>
        <label for="name">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?> " >
    </div>

    <div>
        <label for="name">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="<?php echo $row['descricao'] ?> ">
    </div>
    
    <div>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="<?php echo $row['tipo'] ?>"><?php echo $row['tipo'] ?></option>
            <option value="verdura">Verdura</option>
            <option value="fruta">Fruta</option>
            <option value="legume">Legume</option>
        </select>
    </div>

    <div>
        <label for="name">Valor</label>
        <input type="text" name="valor" id="valor" value="<?php echo $row['valor'] ?> ">
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>

</form>

<?php
include_once('../views/includes/footer.php');
?>
</body>

</html> <!-- //fechar o body que foi aberto na pagina de menu//
todas as paginas que for cria criada com a inclusao 
do menu é necessario fechar a tag body e a tag html -->