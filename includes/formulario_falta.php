<main>
    <h2 class="mt-3"> Cadastrar Falta </h2>

    <form method="post">
        <div class="form-group">
            <label> Partida </label>
            <input type="text" class="form-control" name="partida">
        </div>

        <div class="form-group">
            <label> Minuto </label>
            <input type="text" class="form-control" name="minuto">
        </div>

        <div class="form-group">
            <label> Agente </label>
            <input type="text" class="form-control" name="agente">
        </div>

        <div class="form-group">
            <label> Cartão </label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="cartao" value="vermelho"> Vermelho
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="cartao" value="amarelo"> Amarelo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
    <section class="mt-3">
        <a href="index.php">
        <button class="btn btn-secondary"> Voltar </button>
        </a>
    </section>
</main>