<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Ter = new Territorio($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1>LISTA TERRITÓRIOS</h1>
    <br>
    <tr>
        <td>IDTerritorio</td>
        <td>DescricaoTerritorio</td>
        <td>IDRegiao</td>
    </tr>
    <tr>
    <?php
        $territorios = $Ter->listaTerritorio();
        foreach ($territorios as $territorio):
    ?>
        <tr>
            <td><?=$territorio['IDTerritorio']?></td>
            <td><?=$territorio['DescricaoTerritorio']?></td>
            <td><?=$territorio['IDRegiao']?></td>
            <td>
                <a href="territorio-update-form.php?IDTerritorio=<?=$territorio['IDTerritorio']?>" class="btn btn-primary"><span class="glyphicon glyphicon-refresh">Update</span></a>
                <a href="territorio-delete-confirma.php?IDTerritorio=<?=$territorio['IDTerritorio']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Excluir</span></a>
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