<main>
    <h2 class="mt-3"> Excluir Estádio </h2>

    <form method="post">
        
        <div class="form-group">
            <p>Você realmente deseja excluir o estádio <strong><?=$obEstadio->id?></strong>?</p>
        </div>

        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success"> Cancelar </button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger mt-3">Excluir</button>
        </div>
    </form>
</main>