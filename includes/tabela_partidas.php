<?php

    $resultados = '';
    foreach($partidas as $partida){
        $resultados .= '<tr>
                      <td>'.$partida->id.'</td>
                      <td>'.$partida->selecao_1.'</td>
                      <td>'.$partida->selecao_2.'</td>
                      <td>'.$partida->cor_uniforme_1.'</td>
                      <td>'.$partida->cor_uniforme_2.'</td>
                      <td>'.$partida->penalti_1.'</td>
                      <td>'.$partida->penalti_2.'</td>
                      <td>'.$partida->juiz.'</td>
                      <td>'.$partida->estadio.'</td>
                      <td>'.$partida->fase.'</td>
                      <td>
                        <a href="editar_partida.php?id='.$partida->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir_partida.php?id='.$partida->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
    }
?>

<main>
    <h2 class="mt-3"> Visualizar Partidas </h2>
    <br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Seleção 1</th>
            <th scope="col">Seleção 2</th>
            <th scope="col">Cor do Uniforme da Seleção 1</th>
            <th scope="col">Cor do Uniforme da Seleção 2</th>
            <th scope="col">Gols de Desempate da Seleção 1</th>
            <th scope="col">Gols de Desempate da Seleção 2</th>
            <th scope="col">Juiz</th>
            <th scope="col">Estádio</th>
            <th scope="col">Fase</th>
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