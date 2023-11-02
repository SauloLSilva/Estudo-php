<?php

    function testeisint(){
        //verificar se é inteiro
        $valor = 5;
        if (is_int($valor)){
            echo sprintf("%s é número", $valor);
        }
        }

    function testeisfloat(){
        //verificar se é float

        $valor = 12.5;

        if(is_float($valor)){
            echo sprintf('%s é um float', $valor);
        }}
        
    function testeisbool(){
        //verificar se é boolean

        $valor = true;

        if(is_bool($valor)){
            echo sprintf('%s é um bool', $valor);
        }}

    function testeistr(){
        //verificar se é string

        $valor = 'Bom dia';

        if(is_string($valor)){
            echo sprintf('%s é uma string', $valor);
        }}

    testeisint();
    echo '<br>';
    testeisfloat();
    echo '<br>';
    testeisbool();
    echo '<br>';
    testeistr();

?>