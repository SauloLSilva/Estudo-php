<?php

    function variaveis(){
    //criar variáveis de tipos diferentes
        $nome = 'Teste';
        $idade = 2;
        $tipo = true;

        echo gettype($nome);
        echo '<br>';
        echo gettype($idade);
        echo '<br>';
        echo gettype($tipo);
    }

    function somar_variaveis(){
    // somar duas variáveis diferentes

        $numero1 = 27;
        $numero2 = 48;
        $soma  = $numero1 + $numero2;
        echo '<br>';
        echo $soma;
    }

    function somar_varias_variaveis(){
    // somar variaveis

        $valores = [rand(1,100), rand(1,100), rand(1,100), rand(1,100)];
        $dados = 0;

        foreach ($valores as $valor){
            $dados += $valor;

        }
        echo '<br>';
        echo "A soma de: $valores[0] + $valores[1] + $valores[2] + $valores[3] = $dados";
    }

    variaveis();
    somar_variaveis();
    somar_varias_variaveis();

?>