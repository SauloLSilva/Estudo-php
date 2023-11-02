<?php
    // introdução a objetos, criando classe

    class Teste {
        // criar métodos
        function chamar_nome($nome){
            echo "Nome informado é: $nome";
        }
    }

    //criar um novo objeto deridado da classe

    $Saulo = new Teste();

    // declarar propriedade para objeto
    $Saulo->$nome = 'Saulo';

    // invocar método, passando como parâmetro o dado solicitado pelo método
    $Saulo->chamar_nome($Saulo->$nome);
    

?>