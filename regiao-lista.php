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
        
        <td>Nome</td>
       
    </tr>
    <?php
        $regioes = $Reg->listaregioes();
        foreach ($regioes as $regiao):
    ?>
    <tr>
        <td><?=$regiao["DescricaoRegiao"]?></td>
        </tr>
    </tr>
    <?php 
        endforeach;
    ?>
</table>
<?php
    include_once("rodape.php");
?>