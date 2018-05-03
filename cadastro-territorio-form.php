<?php
    include_once("cabecalho.php");
?>
    <form action="cadastro-territorio.php" method="POST">
        <div class="form-group">
            <label for="nome">ID Território:</label>
            <input type="number" name="IDTerritorio" id="IDTerritorio" required class="form-control" placeholder="IDTerritorio">
        </div>
        <div>
            <label for="DescricaoTerritorio">Descrição Território:</label>
            <input type="text" name="DescricaoTerritorio" id="DescricaoTerritorio" required class="form-control" placeholder="DescricaoTerritorio">
        </div>
        <div class="form-group">
                <label for="IDRegiao">ID Região:</label>
                <select name="IDRegiao" id="IDRegiao" class="form-control">
                    <?php foreach ($regioes as $regiao): ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao['IDRegiao']?></option>
                    <?php endforeach; ?>
                </select>
        <br>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
<?php
    include_once("rodape.php");
?>