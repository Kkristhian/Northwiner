<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
  
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $funcionario = $func->buscarFuncionarios($_GET['IDFuncionario']);
    
?>
    <h1 class="meio">Você deseja realmente excluir o funcionario "<?=$_GET['IDFuncionario']?>"?</h1>
    <br><br>
    <form action="funcionario-delete.php" method="POST">
        <input type="hidden" name="nome" value="<?=$_GET['IDFuncionario']?>">
        <div class="form-group">
            <button type="submit" class="btn btn-danger totalwidth" >Excluir</button>
        </div>
    </form>

<?php 
    include_once('rodape.php');
?>