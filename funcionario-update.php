<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');  
?>

<?php
    $id = $_POST['id'];
    $sobrenome = $_POST['sobrenome'];
    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $tituloCortesia = $_POST['tituloCortesia'];
    $dataNac = $_POST['dataNac'];
    $dataAdmissao = $_POST['dataAdmissao'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $regiao = $_POST['regiao'];
    $cep = $_POST['cep'];
    $pais = $_POST['pais'];
    $telefoneResidencial = $_POST['telefoneResidencial'];
    $extensao = $_POST['extensao'];
    $notas = $_POST['notas'];
    $reportarse = $_POST['reportase'];
    
    $sucesso = alterafuncionario($conexao,$nome,$sobrenome,$titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefoneresidencial,$extensao,$notas,$reportase);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Atualizado com sucesso!</h1>
        <?php else: ?>
            <h1>Erro ao tentar atualizar funcionario!</h1>
        <?php endif; ?>
    </div>   
<?php
    include_once('rodape.php');
?>