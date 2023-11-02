<?php
//array associativo, seu uso é bem próximo ao uso de dicionário
    // $dados = ['chave' => 'valor']
// colocando caracteristicas, quando for imprimi-las, chamar key de cada uma, ex: echo $cachorro['nome']
    $cachorro = ['nome' => 'Dog', 'patas' => 4, 'cor' => 'cinza'];

    echo $cachorro['nome'];
    print_r($cachorro);//imprime estrutura

    foreach ($cachorro as $dados){
        echo $dados;
    }


?>