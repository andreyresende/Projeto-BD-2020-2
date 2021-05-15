<main>
    <h2 class="mt-3"> <?=TITLE?> </h2>

    <form method="post">
        
        <div class="form-group">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome" value="<?=$obJogador->nome?>">
        </div>

        <div class="form-group">
            <label> Seleção </label>
            <input type="text" class="form-control" name="selecao" value="<?=$obJogador->selecao?>">
        </div>

        <div class="form-group">
            <label> Idade </label>
            <input type="text" class="form-control" name="idade" value="<?=$obJogador->idade?>">
        </div>

        <div class="form-group">
            <label> Gols </label>
            <input type="text" class="form-control" name="gols" value="<?=$obJogador->gols?>">
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