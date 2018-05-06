<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $sucesso = $func->removeFuncionario($_POST['nome']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Removido com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na remoção do Funcionario!</h1>
        <?php endif; ?>
    </div>
<?php 
    include_once('rodape.php');
?>