<?php
    class Territorio {
        private $conexao;
        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }
        function addTerritorio($IDTerritorio,$Descricao,$IDRegiao) {
            $sql = "INSERT INTO territorios (IDTerritorio,DescricaoTerritorio,IDRegiao) VALUES('$IDTerritorio','$Descricao','$IDRegiao')";
            return mysqli_query($this->conexao,$sql);
        }
        function listaTerritorio() {
            $territorios = array();

            $sql = "SELECT * FROM territorios";
            $query = mysqli_query($this->conexao,$sql);

            while($row = mysqli_fetch_assoc($query)) {
                array_push($territorios,$row);
            }
            return $territorios;
        }
    }
?>

      