<main>
    <h2 class="mt-3"> <?=TITLE?> </h2>

    <form method="post">
        
        <div class="form-group">
            <label> Seleção 1 </label>
            <input type="text" class="form-control" name="selecao_1" value="<?=$obPartida->selecao_1?>">
        </div>

        <div class="form-group">
            <label> Seleção 2 </label>
            <input type="text" class="form-control" name="selecao_2" value="<?=$obPartida->selecao_2?>">
        </div>

        <div class="form-group">
            <label> Cor do Uniforme 1 </label>
            <input type="text" class="form-control" name="cor_uniforme_1" value="<?=$obPartida->cor_uniforme_1?>">
        </div>

        <div class="form-group">
            <label> Cor do Uniforme 2 </label>
            <input type="text" class="form-control" name="cor_uniforme_2" value="<?=$obPartida->cor_uniforme_2?>">
        </div>

        <div class="form-group">
            <label> Gols de Desempate da seleção 1 </label>
            <input type="text" class="form-control" name="penalti_1" value="<?=$obPartida->penalti_1?>">
        </div>

        <div class="form-group">
            <label> Gols de Desempate da seleção 2 </label>
            <input type="text" class="form-control" name="penalti_2" value="<?=$obPartida->penalti_2?>">
        </div>

        <div class="form-group">
            <label> Juiz </label>
            <input type="text" class="form-control" name="juiz" value="<?=$obPartida->juiz?>">
        </div>

        <div class="form-group">
            <label> Estadio </label>
            <input type="text" class="form-control" name="estadio" value="<?=$obPartida->estadio?>">
        </div>

        <div class="form-group">
            <label> Fase </label>
            <input type="text" class="form-control" name="fase" value="<?=$obPartida->fase?>">
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