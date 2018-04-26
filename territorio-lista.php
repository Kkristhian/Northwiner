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
  
    <?php
        $territorios = $Ter->listaTerritorio();
        foreach ($territorios as $territorio):
    ?>
    <tr>
        <td><?=$territorio["DescricaoTerritorio"]?></td>
    </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>