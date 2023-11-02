<?php
    //array e print array, sua utilização é parecida com listas em python
    $array = [1,2,3];
    //imprimir array inteiro
    print_r($array);
    //para imprimir itens dentro de array, usar for
    foreach($array as $valor){
        echo '<br>';
        echo "$valor está dentro de array";
    }
    // para imprimir um dado especifico dentro de um array
    echo '<br>';
    echo "primeiro item da lista é: $array[0]";

?>