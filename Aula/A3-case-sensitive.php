<!-- para instruções, php não é case sensitive, ex: -->
<!-- Não esquecer o ponto e virgula -->

<?php

    echo "Teste <br>";
    ECHO "Teste <br>";
    eCho "Teste <br>";

// para funcoes, é case sensitive

    $nome = "Saulo";
    $NOME = 'Silva';

    echo $nome;
    echo '<br>';
    echo $NOME;

    $nome_completo = $nome . $NOME; //concatenação de strings em php

    echo $nome_completo;