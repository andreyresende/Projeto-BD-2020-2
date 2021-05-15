<main>
    <h2 class="mt-3"> Cadastrar Seleção </h2>

    <form method="post">
        
        <div class="form-group">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label> Grupo </label>
            <input type="text" class="form-control" name="grupo">
        </div>

        <div class="form-group">
            <label> Pontos do Grupo </label>
            <input type="text" class="form-control" name="pontos_grupo">
        </div>

        <div class="form-group">
            <label> Cor do Uniforme 1 </label>
            <input type="text" class="form-control" name="cor_uniforme_1">
        </div>

        <div class="form-group">
            <label> Cor do Uniforme 2 </label>
            <input type="text" class="form-control" name="cor_uniforme_2">
        </div>

        <div class="form-group">
            <label> Selecione a bandeira: </label>
            <input type="file" class="form-control" name="bandeira">
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