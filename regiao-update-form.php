<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once("regiao-database.php");

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $reg = new Regiao($conexao);
    $regioes = $reg->listaRegioes();
?>
    <form action="regiao-update.php" method="POST">
        <div class="form-group">
            <label for="IDRegiao">ID Região:</label>
            <input type="number" name="IDRegiao" id="IDRegiao"  class="form-control" value="<?=$regiao[0]['IDRegiao']?>">
        </div>
        <div>
            <label for="DescricaoRegiao">Descrição Região:</label>
            <input type="text" name="DescricaoRegiao" id="DescricaoRegiao" required class="form-control" value="<?=$regiao[0]['DescricaoRegiao']?>">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
<?php
    include_once("rodape.php");
?>