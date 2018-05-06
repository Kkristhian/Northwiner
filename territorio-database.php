<?php
    class Territorio {
        private $conexao;
        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }
        function addTerritorio($IDTerritorio,$DescricaoTerritorio,$IDRegiao) {
            $sql = "INSERT INTO territorios (IDTerritorio,DescricaoTerritorio,IDRegiao) VALUES('$IDTerritorio','$DescricaoTerritorio','$IDRegiao')";
            return mysqli_query($this->conexao,$sql);
        }
        function buscaTerritorio() {
            $territorios = array();
            $sql = "SELECT * FROM territorios ORDER BY DescricaoTerritorio ASC";
            $query = mysqli_query($this->conexao,$sql);
            while($row = mysqli_fetch_assoc($query)) {
                array_push($territorios,$row);
            }
            return $territorios;
        }
        function alteraTerritorio($IDTerritorio,$DescricaoTerritorio,$IDRegiao){
            $query = "UPDATE territorios set IDTerritorio = '{$IDTerritorio}',DescricaoTerritorio = {$DescricaoTerritorio}, IDRegiao = '{$IDRegiao} where IDTerritorio={$IDTerritorio}";
            return mysqli_query($this->conexao, $query);
        }
        function removeTerritorio($IDTerritorio) {
            $query = "DELETE FROM territorios WHERE id='$IDTerritorio'";
            return mysqli_query($this->conexao,$query);
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

      