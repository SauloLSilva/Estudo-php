<?php
    // verificar se valor é string, imprimir com aspas simples e duplas

    function check_string(){
        $numero = ['oi', 2, 'tchau'];
        foreach ($numero as $valor){
        if (is_string($valor)){
            echo sprintf ('%s impresso com aspas simples, é string', $valor);
            echo "<br>$valor impresso com aspas duplas, é string<br>";
        }
        else{
            echo sprintf('%s não é string, aspas simples', $valor);
            echo "<br>$valor não é string, aspas duplas<br>";
        }}}

    check_string()

?>