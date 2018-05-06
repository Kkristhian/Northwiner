<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $funcionario = $func->buscarFuncionarios($_GET['IDFuncionario']);
    
?>
    <form action = "funcionario-update.php" method="POST">
<div class="form-group">
  <div class="form-group">
    <label for="IDFuncionario">IDFuncionario</label>
    <input type="text" value="<?=$_GET['IDFuncionario']?>" name="IDFuncionario" class="form-control" id="IDFuncionario">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="<?=$_GET['nome']?>" name="nome" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="sobrenome">sobrenome</label>
    <input type="text" value="<?=$_GET['sobrenome']?>" name="sobrenome" class="form-control" id="Sobrenome" >
  </div>
  <div class="form-group">
    <label for="titulo">titulo</label>
    <input type="text" value="<?=$_GET['titulo']?>" name="titulo" class="form-control" id="Titulo">
  </div>
  <div class="form-group">
    <label for="tituloCortesia">tituloCortesia</label>
    <input type="text" value="<?=$funcionario['tituloCortesia']?>" name="tituloCortesia" class="form-control" id="TituloCortesia">
  </div>
  <div class="form-group">
    <label for="dataNac">data Nascimento</label>
    <input type="text" value="<?=$funcionario['dataNac']?>" name="dataNac" class="form-control" id="DataNac">
  </div>
  <div class="form-group">
    <label for="dataAdmissao">Data de Admissão</label>
    <input type="text" value="<?=$funcionario['dataAdmissao']?>" name="dataAdmissao" class="form-control" id="DataAdmissao">
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" value="<?=$funcionario['endereco']?>" name="endereco" class="form-control" id="Endereco">
  </div>
  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" value="<?=$funcionario['cidade']?>" name="cidade" class="form-control" id="cidade">
  </div>
  <div class="form-group">
    <label for="regiao">Região</label>
    <input type="text" value="<?=$funcionario['regiao']?>" name="regiao" class="form-control" id="Regiao">
  </div>
  <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" value="<?=$funcionario['cep']?>" name="cep" class="form-control" id="Cep">
  </div>
  <div class="form-group">
    <label for="pais">País</label>
    <input type="text" value="<?=$funcionario['pais']?>" name="pais" class="form-control" id="Pais">
  </div>
  <div class="form-group">
    <label for="telefoneResidencial">Telefone Residencial</label>
    <input type="text" value="<?=$funcionario['telefoneResidencial']?>" name="telefoneResidencial" class="form-control" id="TelefoneResidencial">
  </div>
  <div class="form-group">
    <label for="extensao">Extensão</label>
    <input type="text" value="<?=$funcionario['extensao']?>" name="extensao" class="form-control" id="Extensao">
  </div>
  <div class="form-group">
    <label for="notas">Notas</label>
    <input type="text" value="<?=$funcionario['notas']?>" name="notas" class="form-control" id="Notas">
  </div>
  <div class="form-group">
    <label for="reportase">Reportarse</label>
    <input type="text" value="<?=$funcionario['reportase']?>" name="reportase" class="form-control" id="Reportase">
  </div>
 
  <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth" >Alterar</button>
  </div>
</form>

<?php
    include_once('rodape.php');
?>