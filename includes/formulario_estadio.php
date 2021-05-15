<main>
    <h2 class="mt-3"> <?=TITLE?> </h2>

    <form method="post">
        <div class="form-group">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome" value="<?=$obEstadio->nome?>">
        </div>

        <div class="form-group">
            <label> Cidade </label>
            <input type="text" class="form-control" name="cidade" value="<?=$obEstadio->cidade?>">
        </div>

        <div class="form-group">
            <label> Capacidade </label>
            <input type="text" class="form-control" name="capacidade" value="<?=$obEstadio->capacidade?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3">Enviar</button>
        </div>
    </form>
    <section class="mt-3">
        <a href="index.php">
        <button class="btn btn-secondary"> Voltar </button>
        </a>
    </section>
</main>