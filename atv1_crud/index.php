<?php
require_once('./conexao.php');  //apesentar info do banco


include_once('./views/includes/header.php');

//preparar query para o select

$query = 'SELECT * FROM frutas ORDER BY nome';

$result = mysqli_query($conexao, $query);

?>

<table class='table table-striped table-hover'>

    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>Tipo</th>
        <th>VALOR</th>
        <th></th>
    </thead>

    <tbody>
        <!-- loop para carregar informaçoes   -->

        <?php
        while ($row = mysqli_fetch_assoc($result)) {


        ?>

            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['nome'] ?> </td>
                <td><?php echo $row['descricao'] ?> </td>
                <td><?php echo $row['tipo'] ?> </td>
                <td><?php echo $row['valor'] ?> </td>

                <td>
                    <a href="./views/visualizar.php?id=<?php echo $row['id'] ?>">Atualizar</a>
                    <a href="./action/deletar.php?id=<?php echo $row['id'] ?>">Excluir</a>
                </td>

            </tr>

        <?php
        }   /*  fechar as chaves que 
           foi aberta la em cima para rodar 
           o while */
        ?>



    </tbody>


</table>

<?php 
include_once('./views/includes/footer.php');
?>
