<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');
    $sucesso = adicionaProduto($conexao,$_POST['nome'],$_POST['preco'],$_POST['descricao'],$_POST['categoria']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Adicionado com sucesso!</h1>
        <?php else: ?>
            <h1>Erro ao tentar adicionar o produto!</h1>
            <?=mysqli_error($conexao)?>
        <?php endif; ?>
    </div>

<?php
    include_once('rodape.php');
?>