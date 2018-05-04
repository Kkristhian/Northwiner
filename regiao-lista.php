<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('regiao-database.php');
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Reg = new Regiao($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1>LISTA REGIÕES</h1>
    <br>
    <tr>
        <td>IDRegiao</td>
        <td>DescricaoRegiao</td>
    </tr>
  
    <?php
        $regioes = $Reg->listaregioes();
        foreach ($regioes as $regiao):
    ?>
    <tr>
        <td><?=$regiao["IDRegiao"]?></td>
        <td><?=$regiao["DescricaoRegiao"]?></td>
        <td>
           <!-- <a href="regiao-update-form.php?id=<?=$regiao['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></a> -->
           <!-- <a href="regiao-delete.php?id=<?=$regiao['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></a> -->
        </td>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>