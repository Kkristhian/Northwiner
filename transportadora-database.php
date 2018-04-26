<?php
    class Transportadora {
        private $conexao;
        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }
        function addTransportadora($nome) {
            $sql = "INSERT INTO transportadoras(NomeCompanhia) VALUES('$nome')";
            return mysqli_query($this->conexao,$sql);
        }
        function listaTransportadora() {
            $transportadoras = array();

            $sql = "SELECT * FROM transportadoras";
            $query = mysqli_query($this->conexao,$sql);

            while($row = mysqli_fetch_assoc($query)) {
                array_push($transportadoras,$row);
            }
            return $transportadoras;
        }
    }
?>