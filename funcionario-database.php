<?php
    function inserirFuncionario($conexao,$nome,$sobrenome,$titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefoneresidencial,$extensao,$notas,$reportase) {
        $sql = "INSERT INTO `funcionarios`(`Sobrenome`, `Nome`, `Titulo`, `TituloCortesia`, `DataNac`, `DataAdmissao`, `Endereco`, `Cidade`, `Regiao`, `Cep`, `Pais`, `TelefoneResidencial`, `Extensao`, `Notas`, `Reportase`) VALUES ('$sobrenome','$nome','$titulo','$titulocortesia','$datanascimento','$dataadmissao','$endereco','$cidade','$regiao','$cep','$pais','$telefoneresidencial','$extensao','$notas','$reportase')";
        $query = mysqli_query($conexao,$sql);
        return $query;
    }
    function buscaFuncionario($conexao) {
        $resultado = array();
    
        $sql = "SELECT * FROM funcionarios";
        $query = mysqli_query($conexao,$sql);
        
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($resultado,$row);
        }
        return $resultado;
        }
        function listaFuncionario($conexao){
        $funcionarios = array();
        $sql = "
            SELECT sobrenome, nome, titulo, tituloCortesia, dataNac, dataAdmissao, endereco, cidade, regiao, cep, pais, telefoneResidencial, extensao, notas,reportase FROM funcionarios
        ";

        $query = mysqli_query($conexao,$sql);
        while ($linha = mysqli_fetch_assoc($query)) {
            array_push($funcionarios,$linha);
        }

        return $funcionarios;
    }
    function alterafuncionario($conexao,$nome,$sobrenome,$titulo,$titulocortesia,$datanascimento,$dataadmissao,$endereco,$cidade,$regiao,$cep,$pais,$telefoneresidencial,$extensao,$notas,$reportase){
        $query = "UPDATE funcionarios set sobrenome = '{$sobrenome}',nome = {$nome}, titulo = '{$titulo}', tituloCortesia = '{$tituloCortesia}', datanac = '{$dataNac}',dataAdmissao = '{$dataAdmissao}', endereco = '{$endereco}', cidade = '{$cidade}', regiao = '{$regiao}', cep = '{$cep}', pais = '{$pais}', telefoneResidencial = '{$telefoneResidencial}', extensao = '{$extensao}', notas = '{$notas}', reportarse = '{$reportase} where id={$id}";
        return mysqli_query($conexao, $query);
    }
  
?>