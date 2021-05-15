<?php

    $resultados = '';
    foreach($jogadores as $jogador){
        $resultados .= '<tr>
                      <td>'.$jogador->id.'</td>
                      <td>'.$jogador->nome.'</td>
                      <td>'.$jogador->selecao.'</td>
                      <td>'.$jogador->idade.'</td>
                      <td>'.$jogador->gols.'</td>
                      <td>
                        <a href="editar_jogador.php?id='.$jogador->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir_jogador.php?id='.$jogador->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
    }
?>

<main>
    <h2 class="mt-3"> Visualizar Jogadores </h2>
    <br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Seleção</th>
            <th scope="col">Idade</th>
            <th scope="col">Gols</th>
            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>
    <section class="mt-3">
        <a href="index.php">
        <button class="btn btn-secondary"> Voltar </button>
        </a>
    </section>
</main>