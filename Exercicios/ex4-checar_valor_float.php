<?php
// analisar qual dado é float, imprimir pelo menos 2
    function check_float(){

    $valor = [1, 2.5, 'olá', 1.3, 1.5];

    foreach ($valor as $dado){
        if (is_float($dado)){
            echo sprintf ('%s é float', $dado);
            echo '<br>';
        }
        else{
            echo sprintf ('%s não é float', $dado);
            echo '<br>';
        }
    }}

    check_float()

?>