<?php
    class Regiao {
        private $conexao;
        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }
        function addRegiao($IDRegiao,$DescricaoRegiao) {
            $sql = "INSERT INTO regiao (IDRegiao,DescricaoRegiao) VALUES('$IDRegiao','$DescricaoRegiao')";
            return mysqli_query($this->conexao,$sql);
        }
        function buscaRegioes() {
            $regioes = array();
            $sql = "SELECT * FROM regiao";
            $query = mysqli_query($this->conexao,$sql);
            while($row = mysqli_fetch_assoc($query)) {
                array_push($regioes,$row);
            }
            return $regioes;
        }
        function alteraRegiao($IDRegiao,$DescricaoRegiao){
            $query = "UPDATE regiao set IDRegiao = '{$IDRegiao}',DescricaoRegiao = {$DescricaoRegiao} where IDRegiao={$IDRegiao}";
            return mysqli_query($this->conexao, $query);
        }
        function removeRegiao($IDRegiao) {
            $query = "DELETE FROM regiao WHERE IDRegiao='$IDRegiao'";
            return mysqli_query($this->conexao,$query);
        }
        function listaRegioes() {
            $regioes = array();
            $sql = "SELECT * FROM regiao";
            $query = mysqli_query($this->conexao,$sql);
            while($row = mysqli_fetch_assoc($query)) {
                array_push($regioes,$row);
            }
            return $regioes;
        }
    }
?>