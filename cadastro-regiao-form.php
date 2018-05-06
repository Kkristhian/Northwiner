<?php
    include_once("cabecalho.php");
?>
    <form action="cadastro-regiao.php" method="POST">
        <div class="form-group">
            <label for="IDRegiao">ID Região:</label>
            <input type="text" name="IDRegiao" id="IDRegiao" required class="form-control" placeholder="IDRegião">
        </div>
        <div class="form-group">
            <label for="DescricaoRegiao">Nome:</label>
            <input type="text" name="DescricaoRegiao" id="DescricaoRegiao" required class="form-control" placeholder="Região">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>
<?php
    include_once("rodape.php");
?>