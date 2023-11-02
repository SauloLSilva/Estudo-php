
<?php
    // Descrever caracteristicas básicas de uma pessoa ou objeto utilizando comentários, mínimo 3

    // Nome da pessoa

    $nome = 'Saulo';

    // Linguagem de programação com mais experiência

    $linguagem = 'Python';

    // possui barba?

    $aparencia = 'Possui barba';

    // forma mais clean de concatenar strings, usar %s para strings e %d para integer, colocar virgula no final e adicionar o que será incrementado
    // strtolower para transformar todos os caracteres em minúsculas

    $pessoa = sprintf('Bom dia, o nome da pessoa é %s, desenvolvedor %s e %s', $nome, $linguagem, strtolower($aparencia));

    echo $pessoa;

?>