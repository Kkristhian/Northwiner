<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-database.php");
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $Ter = new Territorio($conexao);

    $sucesso = $Ter->addTerritorio($_POST['IDTerritorio'],$_POST['DescricaoTerritorio'],$_POST['IDRegiao']);
    if ($sucesso) {
        header('Location:index.php');
    } else {
        echo "Erro: " . mysqli_error($conexao->getCon());
    }
?>

<?php
    include_once("rodape.php");
?>