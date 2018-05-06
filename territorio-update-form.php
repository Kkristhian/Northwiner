<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');
    include_once("regiao-database.php");
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $ter = new Territorio($conexao);
    $reg = new Regiao($conexao);
    $territorios = $ter->buscaTerritorio($GET_['IDTerritorio']);
    $regioes = $reg->listaRegioes();
?>
    <form action="territorio-update.php" method="POST">
        <div class="form-group">
            <label for="nome">ID Território:</label>
            <input type="number" name="IDTerritorio" id="IDTerritorio"  class="form-control" value="<?=$territorio[0]['IDTerritorio']?>">
        </div>
        <div>
            <label for="DescricaoTerritorio">Descrição Território:</label>
            <input type="text" name="DescricaoTerritorio" id="DescricaoTerritorio" required class="form-control" value="<?=$territorio[0]['DescricaoTerritorio']?>">
        </div>
        
            <div class="form-group">
                <label for="regiao">ID Região</label>
                <select name="IDRegiao" id="IDRegiao" class="form-control">
                    
                    <?php foreach ($regioes as $regiao): ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao['IDRegiao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
<?php
    include_once("rodape.php");
?>