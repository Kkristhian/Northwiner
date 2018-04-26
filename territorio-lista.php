<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Ter = new territorio($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1>LISTA TERRITÓRIOS</h1>
    <br>
    <tr>
        <td>IDTerritorio</td>
        <td>DescricaoTerritorio</td>
        <td>IDRegiao</td>
    </tr>
  
    <?php
        $territorios = $Ter->listaTerritorio();
        foreach ($territorios as $territorio):
    ?>
    <tr>
        <td><?=$territorio["IDTerritorio"]?></td>
        <td><?=$territorio["DescricaoTerritorio"]?></td>
        <td><?=$territorio["IDRegiao"]?></td>
    </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>