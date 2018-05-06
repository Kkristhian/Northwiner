<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');
  
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Ter = new Territorio($conexao);
    $sucesso = $Ter->buscaTerritorio($_GET['IDTerritorio']);
?>
    


    <h1 class="meio">Você deseja realmente excluir o territorio "<?=$_GET['IDTerritorio']?>"?</h1>
    <br><br>
    <form action="territorio-delete.php" method="POST">
        <input type="hidden" name="IDTerritorio" value="<?=$_GET['IDTerritorio']?>">
        <div class="form-group">
            <button type="submit" class="btn btn-danger totalwidth" >Excluir</button>
        </div>
    </form>

<?php 
    include_once('rodape.php');
?>