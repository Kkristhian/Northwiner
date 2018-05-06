<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');
    
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Ter = new Territorio($conexao);
    $sucesso = $Ter->removeTerritorio($_POST['IDTerritorio']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Removido com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na remoção do produto!</h1>
        <?php endif; ?>
    </div>
<?php 
    include_once('rodape.php');
?>