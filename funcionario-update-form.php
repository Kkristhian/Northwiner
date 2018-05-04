<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('funcionario-database.php');
    
    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Funcionario($conexao);
    $funcionario = $func->buscaFuncionario();
    
?>
    <form action = "funcionario-update.php" method="POST">
<div class="form-group">
    <label for="id">ID</label>
    <input type="number" value="<?=$funcionario['id']?>" name="id" class="form-control" id="inputName"  placeholder="Id">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" value="<?=$funcionario['nome']?>" name="nome" class="form-control" id="inputName"  placeholder="Nome do funcionario">
  </div>
  <div class="form-group">
    <label for="sobrenome">sobrenome</label>
    <input type="text" value="<?=$funcionario['sobrenome']?>" name="sobrenome" class="form-control" id="inputSobrenome"  placeholder="Sobrenome do funcionario">
  </div>
  <div class="form-group">
    <label for="titulo">titulo</label>
    <input type="text" value="<?=$funcionario['tituloe']?>" name="titulo" class="form-control" id="inputTitulo"  placeholder="Titulo funcionario">
  </div>
  <div class="form-group">
    <label for="tituloCortesia">tituloCortesia</label>
    <input type="text" value="<?=$funcionario['tituloCortesia']?>" name="tituloCortesia" class="form-control" id="inputTituloCortesia"  placeholder="Titulo Cortesia">
  </div>
  <div class="form-group">
    <label for="dataNac">data Nascimento</label>
    <input type="text" value="<?=$funcionario['dataNac']?>" name="dataNac" class="form-control" id="inputDataNac"  placeholder="Data de Nacimento">
  </div>
  <div class="form-group">
    <label for="dataAdmissao">Data de Admissão</label>
    <input type="text" value="<?=$funcionario['dataAdmissao']?>" name="dataAdmissao" class="form-control" id="inputDataAdmissao"  placeholder="Data de Admissão">
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" value="<?=$funcionario['endereco']?>" name="endereco" class="form-control" id="inputEndereco"  placeholder="Endereco">
  </div>
  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" value="<?=$funcionario['cidade']?>" name="cidade" class="form-control" id="inputcidade"  placeholder="Cidade">
  </div>
  <div class="form-group">
    <label for="regiao">Região</label>
    <input type="text" value="<?=$funcionario['regiao']?>" name="regiao" class="form-control" id="inputRegiao"  placeholder="Região">
  </div>
  <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" value="<?=$funcionario['cep']?>" name="cep" class="form-control" id="inputCep"  placeholder="CEP">
  </div>
  <div class="form-group">
    <label for="pais">País</label>
    <input type="text" value="<?=$funcionario['pais']?>" name="pais" class="form-control" id="inputPais"  placeholder="País">
  </div>
  <div class="form-group">
    <label for="telefoneResidencial">Telefone Residencial</label>
    <input type="text" value="<?=$funcionario['telefoneResidencial']?>" name="telefoneResidencial" class="form-control" id="inputTelefoneResidencial"  placeholder="Telefone Residencial">
  </div>
  <div class="form-group">
    <label for="extensao">Extensão</label>
    <input type="text" value="<?=$funcionario['extensao']?>" name="extensao" class="form-control" id="inputExtensao"  placeholder="Extensão">
  </div>
  <div class="form-group">
    <label for="notas">Notas</label>
    <input type="text" value="<?=$funcionario['notas']?>" name="notas" class="form-control" id="inputNotas"  placeholder="Notas">
  </div>
  <div class="form-group">
    <label for="reportase">Reportarse</label>
    <input type="text" value="<?=$funcionario['reportase']?>" name="reportase" class="form-control" id="inputReportase"  placeholder="Reportase">
  </div>
 
  <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth" >Alterar</button>
  </div>
</form>

<?php
    include_once('rodape.php');
?>