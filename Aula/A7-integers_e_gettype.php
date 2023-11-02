<?php
// integer e gettype
// gettype server para descobrir tipo de variável
    $nome = 'Saulo';
    $idade = 11;
    $tem_barba = true;

    echo sprintf('Tipos de variável: Nome é:%s, idade é: %s e tem barba é:%s', gettype($nome), gettype($idade), gettype($tem_barba));

    function gettype_valores(){
        $valor1 = 10;
        $valor2 = 'bom dia';
        $valor3 = true;
        $valor4 = null;

        if (gettype($valor1) == 'integer'){
            echo sprintf('%s é um número', $valor1);
            echo '<br';
        }

        if (gettype($valor2) == 'string'){
            echo sprintf('%s é uma palavra', $valor2);
            echo '<br';

        }
        if (gettype($valor3) == 'boolean'){
            echo sprintf('%s é um boolean', $valor3);
            echo '<br';

        }
        if (gettype($valor4) == 'NULL'){
            echo sprintf('Valor é vazio');
            echo '<br';

        }}


    gettype_valores()

?>