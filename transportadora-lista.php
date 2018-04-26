<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('transportadora-database.php');
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Tr = new transportadora($conexao);
?>

    <table class="table table-striped table-bordered meio">
    <h1>LISTA TRANSPORTADORA</h1>
    <br>
  
    <?php
        $transportadoras = $Tr->listaTransportadora();
        foreach ($transportadoras as $transportadora):
    ?>
    <tr>
        <td><?=$transportadora["NomeConpanhia"]?></td>
    </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>