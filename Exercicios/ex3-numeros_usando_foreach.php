<?php
    // imprimir 3 numeros inteiros

    $numeros = '1,2,3';
    $numero = explode(',', $numeros); //explode é o split do php, definir array como str primeiro

    // após definir valores e separa-los, usar foreach
    
    foreach ($numero as $valores){ // for em python, o c seria o valores e a lista seria o numero
        echo $valores . '<br>'; //imprimindo os valores com quebra de linha
    }

?>