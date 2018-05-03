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
    <tr>
        <td>IDTransportadora</td>
        <td>NomeConpanhia</td>
        <td>Telefone</td>
    </tr>

    <?php
        $transportadoras = $Tr->listaTransportadora();
        foreach ($transportadoras as $transportadora):
    ?>
    <tr>
        <td><?=$transportadora["IDTransportadora"]?></td>
        <td><?=$transportadora["NomeConpanhia"]?></td>
        <td><?=$transportadora["Telefone"]?></td>
    </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>