<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('regiao-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Reg = new Regiao($conexao);
    $sucesso = $Reg->alteraRegiao($_POST['IDRegiao'],$_POST['DescricaoRegiao']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Atualizado com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na atualização da Região!</h1>
        <?php endif; ?>
    </div>
<?php
    include_once('rodape.php');
?>
