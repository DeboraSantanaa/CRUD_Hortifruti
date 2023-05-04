<?php
include_once('../views/includes/header.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hortifruti</title>
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
  
</head>

<body>
  <h1>Hortifruti</h1>

  <form action="../action/cadastrar.php" method="post">
    <div>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" required>
    </div>

    <div>
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" id="descricao" required>
    </div>

    <div>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="">...</option>
            <option value="verdura">Verdura</option>
            <option value="fruta">Fruta</option>
            <option value="legume">Legume</option>
        </select>
    </div>

    <div>
      <label for="valor">Valor</label>
      <input type="text" name="valor" id="valor" required>
    </div>

    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>

  <?php
  include_once('../views/includes/footer.php');
  ?>

</body>

</html>