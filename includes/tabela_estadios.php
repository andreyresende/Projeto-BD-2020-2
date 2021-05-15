<?php

    $resultados = '';
    foreach($estadios as $estadio){
        $resultados .= '<tr>
                      <td>'.$estadio->id.'</td>
                      <td>'.$estadio->nome.'</td>
                      <td>'.$estadio->cidade.'</td>
                      <td>'.$estadio->capacidade.'</td>
                      <td>
                        <a href="editar_estadio.php?id='.$estadio->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir_estadio.php?id='.$estadio->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
    }
?>

<main>
    <h2 class="mt-3"> Visualizar Estádios </h2>
    <br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
            <th scope="col">Capacidade</th>
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