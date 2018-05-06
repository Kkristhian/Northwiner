<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('regiao-database.php');
  
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $reg = new Regiao($conexao);
    $sucesso = $reg->buscaRegioes($_GET['IDRegiao']);
?>

    <h1 class="meio">Você deseja realmente excluir a região "<?=$regiao[0]['IDRegiao']?>"?</h1>
    <br><br>
    <form action="regiao-delete.php" method="POST">
        <input type="hidden" name="IDRegiao" value="<?=$regiao[0]['IDRegiao']?>">
        <div class="form-group">
            <button type="submit" class="btn btn-danger totalwidth" >Excluir</button>
        </div>
    </form>

<?php 
    include_once('rodape.php');
?>