<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1>LISTA DE FUNCIONÁRIOS</h1>
    <br>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Titulo</td>
        <td>Titulo Cortesia</td>
        <td>Nacimento</td>
        <td>Admissão</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone Residencial</td>
        <td>Extensão</td>
        <td>Notas</td>
        <td>Reportase a</td>
    </tr>
    <?php
        $funcionarios = $func->listaFuncionario();
        foreach ($funcionarios as $funcionario):
    ?>
    <tr>
        <td><?=$funcionario['IDFuncionario']?></td>
        <td><?=$funcionario["nome"]?></td>
        <td><?=$funcionario["sobrenome"]?></td>
        <td><?=$funcionario["titulo"]?></td>
        <td><?=$funcionario["tituloCortesia"]?></td>
        <td><?=$funcionario["dataNac"]?></td>
        <td><?=$funcionario["dataAdmissao"]?></td>
        <td><?=$funcionario["endereco"]?></td>
        <td><?=$funcionario["cidade"]?></td>
        <td><?=$funcionario["regiao"]?></td>
        <td><?=$funcionario["cep"]?></td>
        <td><?=$funcionario["pais"]?></td>
        <td><?=$funcionario["telefoneResidencial"]?></td>
        <td><?=$funcionario["extensao"]?></td>
        <td><?=$funcionario["notas"]?></td>
        <td><?=$funcionario["reportase"]?></td>
        <td>
           <a href="funcionario-update-form.php?IDFuncionario=<?=$funcionario['IDFuncionario']?>" class="btn btn-primary"><span class="glyphicon glyphicon-refresh">Update</span></a> 
           <a href="funcionario-delete-confirma.php?IDFuncionario=<?=$funcionario['IDFuncionario']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Excluir</span></a>
        </td>
        </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>